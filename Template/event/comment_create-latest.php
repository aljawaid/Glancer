<div class="activity-comment-wrapper">
    <span id="CommentSideIcon" class="comment-side-icon"><i class="fa fa-comment-o fa-fw"></i></span>
    <p class="activity-title activity-comment-title">
        <?= e('%s commented on %s',
                $this->text->e($author),
                $this->url->link(t('#%d', $task['id']), 'TaskViewController', 'show', array('task_id' => $task['id']), false, 'task-comment-link', t('View Task'))
            ) ?>
        <span class="ago">
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
                    <?= $this->url->link(t('View Comment'), 'TaskCommentViewController', 'getCommentFromButton', array('plugin' => 'Glancer',  'taskid' => $task['id'], 'commentid' => $comment['id']), false, 'comment-link') ?>
                </li>
            </ul>
        </div>
        <div class="markdown"><?= $this->text->markdown($comment['comment']) ?></div>
    </div>
</div>
