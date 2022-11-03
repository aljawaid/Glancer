<div class="comment <?= isset($preview) ? 'comment-preview' : '' ?>" id="comment-<?= $comment['id'] ?>">

    <?= $this->avatar->render($comment['user_id'], $comment['username'], $comment['name'], $comment['email'], $comment['avatar_path']) ?>

    <div class="comment-title">
        <?php if (! empty($comment['username'])): ?>
            <strong class="comment-username"><?= $this->text->e($comment['name'] ?: $comment['username']) ?></strong>
        <?php endif ?>

        <small class="comment-date"><?= t('Created at:') ?>&nbsp;
            <kbd class="comment-created"><?= $this->dt->datetime($comment['date_creation']) ?><abbr title="Local Time">LT</abbr></kbd>
        </small>
        <small class="comment-date updated-comment"><?= t('Updated at:') ?>&nbsp;
            <kbd class="comment-updated"><?= $this->dt->datetime($comment['date_modification']) ?><abbr title="Local Time">LT</abbr></kbd>
        </small>
        <small class="comment-date comment-id"><i class="fa fa-comment-o fa-fw"></i> <?= t('ID: ') ?> <kbd class="comment-created"><?= $this->text->e($comment['id']) ?></kbd>
        </small>
    </div>

    <?php if (! isset($hide_actions)): ?>
    <div class="comment-actions action-comment">
        <div class="dropdown">
            <a href="#" class="dropdown-menu dropdown-menu-link-icon"><i class="fa fa-cog"></i><i class="fa fa-caret-down fa-fw"></i></a>
            <ul class="">
                <li class="">
                    <?= $this->url->icon('link', t('Link'), 'TaskViewController', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, '', '', $this->app->isAjax(), 'comment-'.$comment['id']) ?>
                </li>
                <?php if ($editable && ($this->user->isAdmin() || $this->user->isCurrentUser($comment['user_id']))): ?>
                    <li class="">
                        <?= $this->modal->medium('edit', t('Edit'), 'CommentController', 'edit', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'comment_id' => $comment['id'])) ?>
                    </li>
                    <li class="">
                        <?= $this->modal->confirm('trash-o', t('Remove'), 'CommentController', 'confirm', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'comment_id' => $comment['id'])) ?>
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
