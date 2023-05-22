<div id="comment-<?= $comment['id'] ?>" class="comment <?= isset($preview) ? 'comment-preview' : '' ?>">

    <?= $this->url->link($this->avatar->render($comment['user_id'], $comment['username'], $comment['name'], $comment['email'], $comment['avatar_path']), 'UserViewController', 'show', array('user_id' => $comment['user_id'])) ?>

    <div class="comment-title">
        <?php if (!empty($comment['username'])): ?>
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
            <kbd class="comment-updated"><?= $this->dt->datetime($comment['date_modification']) ?><abbr title="<?= t('Local Time') ?>"><?= t('LT') ?></abbr></kbd>
        </small>
        <small class="comment-date comment-id" title="<?= t('Comment ID') ?>">
            <i class="fa fa-comment-o fa-fw"></i> <?= t('ID ') ?> <kbd class="comment-updated"><?= $this->text->e($comment['id']) ?></kbd>
        </small>
    </div>

    <?php if (!isset($hide_actions)): ?>
    <div id="CommentActions" class="action-comment">
        <div class="comment-actions">
            <ul class="left">
                <li class="">
                    <a id="CommentTop" href="#main" title="<?= t('Go to the top of the page') ?>"><i class="fa fa-level-up" aria-hidden="true"></i> <?= t('Top') ?></a>
                </li>
                <li class="">
                    <?= $this->url->icon('th', t('Board'), 'TaskCommentViewController', 'getProjectFromButton', array('plugin' => 'Glancer',  'projectid' => $task['project_id'], 'taskid' => $task['id'], 'commentid' => $comment['id']), false, 'comment-board', t('View the project board')) ?>
                </li>
                <li class="">
                    <?= $this->url->icon('eye', t('Overview'), 'ProjectOverviewController', 'show', array('project_id' => $task['project_id']), false, 'comment-board', t('View recent activity in this project'), false, 'ActivityOverview') ?>
                </li>
                <div class="copy-buttons">
                    <?php
                    $unstrippedComment = $this->text->markdown($comment['comment'], isset($is_public) && $is_public);
                    $strippedComment = $this->text->e($unstrippedComment);
                    $unformattedComment = $this->text->markdown($comment['comment'], isset($is_public) && $is_public);
                    $formattedComment = strip_tags($unformattedComment);
                    ?>
                    <li class="copy-btn-html clipboard-html" title="<?= t('Copy HTML version') ?>" data-clipboard-text="<?= $strippedComment ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-filetype-html" viewBox="0 0 16 16">
                            <title><?= t('Copy HTML version') ?></title>
                            <path fill-rule="evenodd" d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5Zm-9.736 7.35v3.999h-.791v-1.714H1.79v1.714H1V11.85h.791v1.626h1.682V11.85h.79Zm2.251.662v3.337h-.794v-3.337H4.588v-.662h3.064v.662H6.515Zm2.176 3.337v-2.66h.038l.952 2.159h.516l.946-2.16h.038v2.661h.715V11.85h-.8l-1.14 2.596H9.93L8.79 11.85h-.805v3.999h.706Zm4.71-.674h1.696v.674H12.61V11.85h.79v3.325Z"/>
                        </svg>
                    </li>
                    <li class="copy-btn-md clipboard-md" title="<?= t('Copy markdown version') ?>" data-clipboard-text="<?= $this->text->e($comment['comment']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" class="" viewBox="0 0 16 16" fill="currentColor">
                            <title><?= t('Copy markdown version') ?></title>
                            <path fill-rule="evenodd" d="M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z"></path>
                        </svg>
                    </li>
                    <li class="copy-btn-format clipboard-format" title="<?= t('Copy formatted version') ?>" data-clipboard-text="<?= trim($formattedComment) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                            <title><?= t('Copy formatted version') ?></title>
                            <path fill-rule="evenodd" d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z"/>
                        </svg>
                    </li>
                    <li class="copy-btn-line clipboard-line" title="<?= t('Copy No line breaks version') ?>" data-clipboard-text="<?= str_replace(["<br>", "<br/>", "\r", "\n"], " ", $formattedComment) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-file-earmark-break" viewBox="0 0 16 16">
                            <title><?= t('Copy No line breaks version') ?></title>
                            <path d="M14 4.5V9h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v7H2V2a2 2 0 0 1 2-2h5.5L14 4.5zM13 12h1v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2h1v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-2zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H.5z"/>
                        </svg>
                    </li>
                    <svg height="19px" class="copy-button" fill="currentColor" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                        <title><?= t('Copy to Clipboard') ?></title>
                        <path xmlns="http://www.w3.org/2000/svg" d="M128 768h256v64H128v-64z m320-384H128v64h320v-64z m128 192V448L384 640l192 192V704h320V576H576z m-288-64H128v64h160v-64zM128 704h160v-64H128v64z m576 64h64v128c-1 18-7 33-19 45s-27 18-45 19H64c-35 0-64-29-64-64V192c0-35 29-64 64-64h192C256 57 313 0 384 0s128 57 128 128h192c35 0 64 29 64 64v320h-64V320H64v576h640V768zM128 256h512c0-35-29-64-64-64h-64c-35 0-64-29-64-64s-29-64-64-64-64 29-64 64-29 64-64 64h-64c-35 0-64 29-64 64z"/>
                    </svg>
                </div>
            </ul>
        </div>
        <div class="comment-actions">
                <ul class="right">
                <li class="">
                    <?= $this->url->icon('link', t('Link'), 'TaskViewController', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'task-link', '', $this->app->isAjax(), 'comment-' . $comment['id']) ?>
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
