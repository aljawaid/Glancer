<?php

namespace Kanboard\Plugin\Glancer\Controller;

use Kanboard\Model\UserMetadataModel;
use Kanboard\Model\CommentModel;
use Kanboard\Model\ProjectModel;
use Kanboard\Model\TaskFinderModel;
use Kanboard\Controller\TaskViewController;


/**
 * Task Comment View Controller
 *
 * @package  Kanboard\Plugin\Glancer\Controller;
 * @author   Craig Crosby
 */
class TaskCommentViewController extends TaskViewController
{
    
    public function getCommentFromButton()
    {
        $comment_id = $this->request->getStringParam('commentid');
        $_POST['commentid'] = $comment_id;
        $this->getTaskIdByCommentId();
    }

    public function getProjectFromButton()
    {
        $project_id = $this->request->getStringParam('projectid');
        $_POST['projectid'] = $project_id;
        $this->getTaskIdByProjectId();
    }
    
    public function getTaskFromButton()
    {
        $taskt_id = $this->request->getStringParam('taskid');
        $_POST['taskid'] = $taskt_id;
        $this->getTaskIdByProjectId();
    }

    public function getTaskIdByCommentId()
    {
        if (!empty($_POST['commentid'])) {
            $commentID = $_POST['commentid'];
            if (!empty($this->commentModel->getById($commentID)['task_id'])) {
                $task_id = $this->commentModel->getById($commentID)['task_id'];
                $task_id = $task_id.'#comment-'.$commentID;
                $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task_id), false, '', '', $this->request->isAjax(), 'comment-'.$commentID));
            } else {
                $user = $this->getUser();
                $this->flash->failure(t('&#10008; Unable to find comment #'.$commentID.'. Directed to dashboard.'));
                $this->response->redirect($this->helper->url->to('DashboardController', 'show', array('user_id' => $user['id'])));
            }
        } else {
                $user = $this->getUser();
                $this->flash->failure(t('&#10008; Unable to find a comment without an ID. Directed to dashboard.'));
                $this->response->redirect($this->helper->url->to('DashboardController', 'show', array('user_id' => $user['id'])));
        }
        
    }
    
    public function getTaskIdByProjectId()
    {
        if (!empty($_POST['projectid'])) {
                $projectID = $_POST['projectid'];
                if (!empty($this->projectModel->getById($projectID))) {
                    $this->response->redirect($this->helper->url->to('BoardViewController', 'show', array('project_id' => $projectID)), true);
                } else {
                    $user = $this->getUser();
                    $this->flash->failure(t('&#10008; Unable to find project #'.$projectID.'. Directed to dashboard.'));
                    $this->response->redirect($this->helper->url->to('DashboardController', 'show', array('user_id' => $user['id'])));
                }
        } else {
                $user = $this->getUser();
                $this->flash->failure(t('&#10008; Unable to find a project without an ID. Directed to dashboard.'));
                $this->response->redirect($this->helper->url->to('DashboardController', 'show', array('user_id' => $user['id'])));
        }
    }
    
    public function getTaskIdByTaskId()
    {
        if (!empty($_POST['taskid'])) {
                $taskID = $_POST['taskid'];
                if (!empty($this->taskFinderModel->getById($taskID))) {
                    $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $taskID)), true);
                } else {
                    $user = $this->getUser();
                    $this->flash->failure(t('&#10008; Unable to find task #'.$taskID.'. Directed to dashboard.'));
                    $this->response->redirect($this->helper->url->to('DashboardController', 'show', array('user_id' => $user['id'])));
                }
        } else {
                $user = $this->getUser();
                $this->flash->failure(t('&#10008; Unable to find a task without an ID. Directed to dashboard.'));
                $this->response->redirect($this->helper->url->to('DashboardController', 'show', array('user_id' => $user['id'])));
        }
    }
    
}
