<div class="activity-comment-wrapper">
    <span id="CommentSideIcon" class="comment-side-icon"><i class="fa fa-comment-o fa-fw"></i></span>
    <p class="activity-title activity-comment-title">
        <?= e('%s commented on %s',
                $this->text->e($author),
                $this->url->link(t('#%d', $task['id']), 'TaskViewController', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'task-comment-link', t('View Task'))
            ) ?>
        <span class="ago">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity activity-icon" viewBox="0 0 16 16">
                <title><?= t('Activity') ?></title>
                <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
            </svg>
            <?= $this->helper->ageHelper->newAge($comment['date_creation']) ?>
        </span>
        <small class="activity-date activity-comment-date comment-date" title="<?= t('Date Created') ?>"><?= t('Created') ?>&nbsp;
            <kbd class="comment-created"><?= $this->dt->datetime($comment['date_creation']) ?><abbr title="<?= t('Local Time') ?>"><?= t('LT') ?></abbr></kbd>
        </small>
        <small class="comment-date activity-comment-id comment-id" title="<?= t('Comment ID') ?>">
            <i class="fa fa-comment-o fa-fw"></i> <?= t('ID ') ?> <kbd class="comment-updated"><?= $this->text->e($comment['id']) ?></kbd>
        </small>
    </p>
    <div class="activity-description activity-comment-description">
        <p class="activity-task-title activity-comment-task-title" title="<?= t('Task Title') ?>">
            <i class="fa fa-sticky-note icon-grey" aria-hidden="true"></i> <?= $this->text->e($task['title']) ?>
        </p>
        <div id="JumpComment" class="comment-actions action-comment">
            <ul class="">
                <li class="">
                    <?= $this->url->link(t('View Comment'), 'TaskCommentViewController', 'getCommentFromButton', array('plugin' => 'Glancer',  'projectid' => $task['project_id'], 'taskid' => $task['id'], 'commentid' => $comment['id']), false, 'comment-link') ?>
                </li>
            </ul>
        </div>
        <div class="markdown"><?= $this->text->markdown($comment['comment']) ?></div>
    </div>
</div>
