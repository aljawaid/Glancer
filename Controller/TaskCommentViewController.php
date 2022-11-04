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

                // Get accurate version of Kanboard
                $accurate_version = str_replace('v', '', APP_VERSION);
                $accurate_version = preg_replace('/\s+/', '', $accurate_version);

                if (strpos(APP_VERSION, 'master') !== false && file_exists('ChangeLog')) { $accurate_version = trim(file_get_contents('ChangeLog', false, null, 8, 6), ' '); }
                if (version_compare($accurate_version, '1.2.22') >= 0) {
                    // For KB versions AFTER removing 'project_id' from task URLs
                    $link = 'task/'.$task_id.'#comment-'.$commentID;
                } else {
                    // For KB versions BEFORE removing 'project_id' from task URLs
                    $project_id = $this->commentModel->getProjectId($commentID);
                    $link = 'project/'.$project_id.'/task/'.$task_id.'#comment-'.$commentID;
                }
                $this->response->redirect($this->helper->url->to('TaskCommentViewController', 'showTask', array('plugin' => 'Glancer', 'link' => $link)), true);
            } else {
                $user = $this->getUser();
                $this->response->redirect($this->helper->url->to('DashboardController', 'show', array('user_id' => $user['id'])));
            }
        } else {
                $user = $this->getUser();
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
                    $this->response->redirect($this->helper->url->to('DashboardController', 'show', array('user_id' => $user['id'])));
                }
        } else {
                $user = $this->getUser();
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
                    $this->response->redirect($this->helper->url->to('DashboardController', 'show', array('user_id' => $user['id'])));
                }
        } else {
                $user = $this->getUser();
                $this->response->redirect($this->helper->url->to('DashboardController', 'show', array('user_id' => $user['id'])));
        }
    }
    
    public function showTask()
    {
        $task = $this->getTask();
        $subtasks = $this->subtaskModel->getAll($task['id']);
        $commentSortingDirection = $this->userMetadataCacheDecorator->get(UserMetadataModel::KEY_COMMENT_SORTING_DIRECTION, 'ASC');

        $this->response->html($this->helper->layout->task('task/show', array(
            'task' => $task,
            'project' => $this->projectModel->getById($task['project_id']),
            'files' => $this->taskFileModel->getAllDocuments($task['id']),
            'images' => $this->taskFileModel->getAllImages($task['id']),
            'comments' => $this->commentModel->getAll($task['id'], $commentSortingDirection),
            'subtasks' => $subtasks,
            'internal_links' => $this->taskLinkModel->getAllGroupedByLabel($task['id']),
            'external_links' => $this->taskExternalLinkModel->getAll($task['id']),
            'link_label_list' => $this->linkModel->getList(0, false),
            'tags' => $this->taskTagModel->getTagsByTask($task['id']),
        )));
    }
}
