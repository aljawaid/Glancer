<div id="comment-<?= $comment['id'] ?>" class="comment <?= isset($preview) ? 'comment-preview' : '' ?>">

    <?= $this->url->link($this->avatar->render($comment['user_id'], $comment['username'], $comment['name'], $comment['email'], $comment['avatar_path']), 'UserViewController', 'show', array('user_id' => $comment['user_id'])) ?>

    <div class="comment-title">
        <?php if (! empty($comment['username'])): ?>
            <strong class="comment-username"><?= $this->text->e($comment['name'] ?: $comment['username']) ?></strong>
        <?php endif ?>
        <div class="ago event-date-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity activity-icon" viewBox="0 0 16 16">
                <title><?= t('Activity') ?></title>
                <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
            </svg>
            <div class="relative-date">
                <?= $this->helper->ageHelper->newAge($comment['date_creation']) ?>
            </div>
            <div class="exact-date" style="display: none;">
                <?= $this->dt->date($comment['date_creation']) ?>
            </div>
        </div>
        <small class="comment-date" title="<?= t('Date Created') ?>"><?= t('Created') ?>&nbsp;
            <kbd class="comment-created"><?= $this->dt->datetime($comment['date_creation']) ?><abbr title="<?= t('Local Time') ?>"><?= t('LT') ?></abbr></kbd>
        </small>
        <small class="comment-date updated-comment" title="<?= t('Date Updated') ?>"><?= t('Updated') ?>&nbsp;
            <kbd class="comment-updated"><?= $this->dt->datetime($comment['date_modification']) ?><abbr title="Local Time">LT</abbr></kbd>
        </small>
        <small class="comment-date comment-id" title="<?= t('Comment ID') ?>">
            <i class="fa fa-comment-o fa-fw"></i> <?= t('ID ') ?> <kbd class="comment-updated"><?= $this->text->e($comment['id']) ?></kbd>
        </small>
    </div>

    <?php if (! isset($hide_actions)): ?>
    <div id="CommentActions" class="action-comment">
        <div class="comment-actions">
            <ul class="left">
                <li class="">
                    <a id="CommentTop" href="#main" title="<?= t('Go to the top of the page') ?>"><i class="fa fa-level-up" aria-hidden="true"></i> <?= t('Top') ?></a>
                </li>
                <li class="">
                    <?= $this->url->icon('th', t('Board'), 'TaskCommentViewController', 'getProjectFromButton', array('plugin' => 'Glancer',  'taskid' => $task['id'], 'commentid' => $comment['id']), false, 'comment-board') ?>
                </li>
            </ul>
        </div>
        <div class="comment-actions">
                <ul class="right">
                <li class="">
                    <?= $this->url->icon('link', t('Link'), 'TaskViewController', 'show', array('task_id' => $task['id']), false, 'task-link', '', $this->app->isAjax(), 'comment-'.$comment['id']) ?>
                </li>
                <?php if ($editable && ($this->user->isAdmin() || $this->user->isCurrentUser($comment['user_id']))): ?>
                    <li class="">
                        <?= $this->modal->medium('edit', t('Edit'), 'CommentController', 'edit', array('task_id' => $task['id'], 'comment_id' => $comment['id'])) ?>
                    </li>
                    <li class="">
                        <?= $this->modal->confirm('trash-o', t('Remove'), 'CommentController', 'confirm', array('task_id' => $task['id'], 'comment_id' => $comment['id'])) ?>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
    <?php endif ?>

    <div class="comment-content">
        <div class="markdown">
            <?= $this->text->markdown($comment['comment'], isset($is_public) && $is_public) ?>
        </div>
    </div>
</div>
<hr>
