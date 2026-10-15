<?php

namespace Kanboard\Plugin\Glancer\Controller;

use Kanboard\Controller\TaskViewController;

/**
 * Task Comment View Controller
 *
 * @package  Kanboard\Plugin\Glancer\Controller;
 * @author   Craig Crosby
 * @see      tests/NavigationRegressionTest.php
 */
class TaskCommentViewController extends TaskViewController
{
    public function getCommentFromButton()
    {
        $this->redirectToComment($this->request->getIntegerParam('commentid'));
    }

    public function getProjectFromButton()
    {
        $this->redirectToProject($this->request->getIntegerParam('projectid'));
    }

    public function getTaskFromButton()
    {
        $this->redirectToTask($this->request->getIntegerParam('taskid'));
    }

    public function getTaskIdByCommentId()
    {
        $this->redirectToComment($this->getPostedId('commentid'));
    }

    public function getTaskIdByProjectId()
    {
        $this->redirectToProject($this->getPostedId('projectid'));
    }

    public function getTaskIdByTaskId()
    {
        $this->redirectToTask($this->getPostedId('taskid'));
    }

    private function getPostedId($name)
    {
        $values = $this->request->getValues();

        return isset($values[$name]) ? (int) $values[$name] : 0;
    }

    private function redirectToComment($commentID)
    {
        $comment = $commentID > 0 ? $this->commentModel->getById($commentID) : array();
        $task = !empty($comment['task_id']) ? $this->taskFinderModel->getById($comment['task_id']) : array();

        if (
            !empty($task['project_id'])
            && $this->isProjectAccessible($task['project_id'])
            && $this->helper->commentVisibilityHelper->isVisible($comment, $this->userSession->getRole())
        ) {
            $this->response->redirect($this->helper->url->to(
                'TaskViewController',
                'show',
                array('task_id' => (int) $comment['task_id']),
                'comment-' . $commentID
            ));
            return;
        }

        $message = $commentID > 0
            ? t('&#10008; Unable to find comment #%s. Directed to dashboard.', $commentID)
            : t('&#10008; Unable to find a comment without an ID. Directed to dashboard.');
        $this->redirectToDashboardWithFailure($message);
    }

    private function redirectToProject($projectID)
    {
        if ($projectID > 0 && !empty($this->projectModel->getById($projectID)) && $this->isProjectAccessible($projectID)) {
            $this->response->redirect($this->helper->url->to('BoardViewController', 'show', array('project_id' => $projectID)), true);
            return;
        }

        $message = $projectID > 0
            ? t('&#10008; Unable to find project #%s. Directed to dashboard.', $projectID)
            : t('&#10008; Unable to find a project without an ID. Directed to dashboard.');
        $this->redirectToDashboardWithFailure($message);
    }

    private function redirectToTask($taskID)
    {
        $task = $taskID > 0 ? $this->taskFinderModel->getById($taskID) : array();

        if (!empty($task['project_id']) && $this->isProjectAccessible($task['project_id'])) {
            $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $taskID)), true);
            return;
        }

        $message = $taskID > 0
            ? t('&#10008; Unable to find task #%s. Directed to dashboard.', $taskID)
            : t('&#10008; Unable to find a task without an ID. Directed to dashboard.');
        $this->redirectToDashboardWithFailure($message);
    }

    private function isProjectAccessible($projectID)
    {
        return $this->projectPermissionModel->isUserAllowed($projectID, $this->userSession->getId());
    }

    private function redirectToDashboardWithFailure($message)
    {
        $user = $this->getUser();
        $this->flash->failure($message);
        $this->response->redirect($this->helper->url->to('DashboardController', 'show', array('user_id' => $user['id'])));
    }
}
