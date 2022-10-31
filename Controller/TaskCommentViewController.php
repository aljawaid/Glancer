<?php

namespace Kanboard\Plugin\Glancer\Controller;

use Kanboard\Model\UserMetadataModel;
use Kanboard\Model\CommentModel;
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

    public function getTaskIdByCommentId()
    {
        $commentID = $_POST['comment_id'];
        $task_id = $this->commentModel->getById($commentID)['task_id'];
        $this->response->redirect($this->helper->url->to('TaskCommentViewController', 'showTask', array('plugin' => 'Glancer', 'task_id' => $task_id)), true);
        
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