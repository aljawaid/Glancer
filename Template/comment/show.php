<div id="comment-<?= $comment['id'] ?>" class="comment <?= isset($preview) ? 'comment-preview' : '' ?>">

    <?= $this->url->link($this->avatar->render($comment['user_id'], $comment['username'], $comment['name'], $comment['email'], $comment['avatar_path']), 'UserViewController', 'show', array('user_id' => $comment['user_id'])) ?>

    <div class="comment-title">
        <?php if (! empty($comment['username'])): ?>
            <strong class="comment-username"><?= $this->text->e($comment['name'] ?: $comment['username']) ?></strong>
        <?php endif ?>
        <span class="ago">
            <?php
            $commentAge = $this->dt->age($comment['date_creation']);
            $commentAgeAgo = rtrim($commentAge, "d");
            ?>
            <?php if ($commentAgeAgo <= '1'): ?>
                <span class="" title="<?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- yesterday') ?></span>
            <?php elseif (($commentAgeAgo >= '2') && ($commentAgeAgo <= '5')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- a few days ago') ?></span>
            <?php elseif (($commentAgeAgo >= '6') && ($commentAgeAgo < '7')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- less than a week ago') ?></span>
            <?php elseif ($commentAgeAgo == '7'): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about a week ago') ?></span>
            <?php elseif (($commentAgeAgo >= '8') && ($commentAgeAgo <= '9')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- over a week ago') ?></span>
            <?php elseif (($commentAgeAgo >= '10') && ($commentAgeAgo <= '13')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 10 days ago') ?></span>
            <?php elseif (($commentAgeAgo >= '14') && ($commentAgeAgo <= '15')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 2 weeks ago') ?></span>
            <?php elseif (($commentAgeAgo >= '16') && ($commentAgeAgo <= '17')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- just over 2 weeks ago') ?></span>
            <?php elseif (($commentAgeAgo >= '18') && ($commentAgeAgo <= '19')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- nearly 3 weeks ago') ?></span>
            <?php elseif (($commentAgeAgo >= '20') && ($commentAgeAgo <= '28')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 3 weeks ago') ?></span>
            <?php elseif (($commentAgeAgo >= '29') && ($commentAgeAgo <= '31')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about a month ago') ?></span>
            <?php elseif (($commentAgeAgo >= '32') && ($commentAgeAgo <= '35')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- just over a month ago') ?></span>
            <?php elseif (($commentAgeAgo >= '36') && ($commentAgeAgo <= '59')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- over a month ago') ?></span>
            <?php elseif (($commentAgeAgo >= '59') && ($commentAgeAgo <= '62')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 2 months ago') ?></span>
            <?php elseif (($commentAgeAgo >= '62') && ($commentAgeAgo <= '88')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- over 2 months ago') ?></span>
            <?php elseif (($commentAgeAgo >= '89') && ($commentAgeAgo <= '93')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 3 months ago') ?></span>
            <?php elseif (($commentAgeAgo >= '94') && ($commentAgeAgo <= '97')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- just over 3 months ago') ?></span>
            <?php elseif (($commentAgeAgo >= '98') && ($commentAgeAgo <= '120')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 4 months ago') ?></span>
            <?php elseif (($commentAgeAgo >= '121') && ($commentAgeAgo <= '125')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- just over 4 months ago') ?></span>
            <?php elseif (($commentAgeAgo >= '126') && ($commentAgeAgo <= '150')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 5 months ago') ?></span>
            <?php elseif (($commentAgeAgo >= '151') && ($commentAgeAgo <= '159')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- just over 5 months ago') ?></span>
            <?php elseif (($commentAgeAgo >= '160') && ($commentAgeAgo <= '180')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 6 months ago') ?></span>
            <?php elseif (($commentAgeAgo >= '181') && ($commentAgeAgo <= '363')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- over 6 months ago') ?></span>
            <?php elseif (($commentAgeAgo >= '364') && ($commentAgeAgo <= '366')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- a year ago') ?></span>
            <?php elseif (($commentAgeAgo >= '367') && ($commentAgeAgo <= '385')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- just over a year ago') ?></span>
            <?php elseif (($commentAgeAgo >= '386') && ($commentAgeAgo <= '729')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- over a year ago') ?></span>
            <?php elseif (($commentAgeAgo >= '730') && ($commentAgeAgo <= '740')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 2 years ago') ?></span>
            <?php elseif (($commentAgeAgo >= '741') && ($commentAgeAgo <= '1094')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"> <?= t('- over 2 years ago') ?></span>
            <?php elseif (($commentAgeAgo >= '1095') && ($commentAgeAgo <= '1105')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 3 years ago') ?></span>
            <?php elseif (($commentAgeAgo >= '1106') && ($commentAgeAgo <= '1091')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- just over 3 years ago') ?></span>
            <?php elseif (($commentAgeAgo >= '1092') && ($commentAgeAgo <= '1459')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- over 3 years ago') ?></span>
            <?php elseif (($commentAgeAgo >= '1460') && ($commentAgeAgo <= '1470')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 4 years ago') ?></span>
            <?php elseif (($commentAgeAgo >= '1471') && ($commentAgeAgo <= '1820')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- over 4 years ago') ?></span>
            <?php elseif (($commentAgeAgo >= '1821') && ($commentAgeAgo <= '1827')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- about 5 years ago') ?></span>
            <?php elseif (($commentAgeAgo >= '1828')): ?>
                <span class="" title="<?= t('- about') ?> <?= $this->dt->age($comment['date_creation']) ?> <?= t('ago') ?>"><?= t('- over 5 years ago') ?></span>
            <?php else: ?>
                <?= $commentAge ?>
            <?php endif ?>
        </span>
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
                    <?= $this->url->icon('th', t('Board'), 'TaskCommentViewController', 'getProjectFromButton', array('plugin' => 'Glancer',  'projectid' => $task['project_id'], 'taskid' => $task['id'], 'commentid' => $comment['id']), false, 'comment-board') ?>
                </li>
            </ul>
        </div>
        <div class="comment-actions">
                <ul class="right">
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
