<div class="activity-comment-wrapper">
    <span id="CommentSideIcon" class="comment-side-icon"><i class="fa fa-comment-o fa-fw"></i></span>
    <span class="comment-original-dates">
        <span class="deleted-wrapper" title="<?= t('Showing Deleted Content') ?>"><?= t('Deleted Comment') ?></span>
        <span class="original-created" title="<?= $this->dt->datetime($comment['date_creation']) ?><?= t('LT') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-text" viewBox="0 0 16 16">
                <title><?= t('Originally Created') ?></title>
                <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
            </svg>
            <?= t('Created') ?> <?= $this->helper->ageHelper->newAge($comment['date_creation']) ?>
        </span>
        <?php if (!empty($this->dt->datetime($comment['date_modification']))): ?>
            <span class="original-modified" title="<?= $this->dt->datetime($comment['date_modification']) ?><?= t('LT') ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                    <title><?= t('Comment Last Updated') ?></title>
                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
                </svg>
                <?= t('Updated') ?> <?= $this->helper->ageHelper->newAge($comment['date_modification']) ?>
            </span>
        <?php endif ?>
    </span>
    <p class="activity-title activity-comment-title">
        <?= e('%s removed a comment on task %s',
            $this->text->e($author),
            $this->url->link(t('#%d', $task['id']), 'TaskViewController', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'task-comment-link', t('View Task'))
            ) ?>
        <div class="ago event-date-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity activity-icon" viewBox="0 0 16 16">
                <title><?= t('Activity') ?></title>
                <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
            </svg>
            <div class="relative-date">
                <?= $this->helper->ageHelper->newAge($date_creation) ?>
            </div>
            <div class="exact-date" style="display: none;">
                <?= $this->dt->date($date_creation) ?>
            </div>
        </div>
        <small class="activity-date activity-comment-date comment-date" title="<?= t('Date Created') ?>"><?= t('Created') ?>&nbsp;
            <kbd class="comment-created"><?= $this->dt->datetime($date_creation) ?><abbr title="<?= t('Local Time') ?>"><?= t('LT') ?></abbr></kbd>
        </small>
        <small class="comment-date activity-comment-id comment-id" title="<?= $this->text->e($comment['id']) ?> <?= t(' - ') ?> <?= t('This Comment ID cannot be searched') ?>">
            <i class="fa fa-comment-o fa-fw"></i> <?= t('ID ') ?> <kbd class="comment-updated deleted-comment"><?= $this->text->e($comment['id']) ?></kbd>
        </small>
    </p>
    <div class="activity-description activity-comment-description">
        <p class="activity-task-title activity-comment-task-title" title="<?= t('Task Title') ?>">
            <i class="fa fa-sticky-note icon-grey" aria-hidden="true"></i> <?= $this->text->e($task['title']) ?>
        </p>
        <div class="markdown"><?= $this->text->markdown($comment['comment']) ?></div>
    </div>
</div>
