<?php // phpcs:ignore PSR12.Files.FileHeader.SpacingAfterBlock
$alltasks = $this->model->taskFinderModel->getAllIds($project['id']);
$key = array_search($task['id'], $alltasks);
$last_key = count($alltasks) - 1;
$next_key = ($key + 1 <= $last_key) ? $key + 1 : 0;
$prev_key = ($key - 1 >= 0) ? $key - 1 : $last_key;

$next = $alltasks[$next_key];
$prev = $alltasks[$prev_key];
?>
<div class="task-navigation">

    <a href="<?= $this->url->href('TaskViewController', 'show', array('task_id' => $prev), false, '', false) ?>" class="task-prev" title="<?= t('Previous Task') ?>">
        <svg height="32px" width="32px" fill='currentColor' viewBox="0 0 512 512" version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
            <path style="fill:#FFFFFF;" d="M256,504C119.248,504,8,392.752,8,256S119.248,8,256,8s248,111.248,248,248S392.752,504,256,504z"/>
            <path style="fill:#4D4D4D;" d="M256,16c132.336,0,240,107.664,240,240S388.336,496,256,496S16,388.336,16,256S123.664,16,256,16
            M256,0C114.608,0,0,114.608,0,256c0,141.376,114.608,256,256,256s256-114.624,256-256C512,114.608,397.392,0,256,0L256,0z"/>
            <polygon style="fill:#4D4D4D;" points="239.824,399.328 97.664,255.248 239.824,111.168 376.24,111.168 233.84,255.248
            376.24,399.328 "/>
        </svg>
    </a>
    <span class="navigation-task-count" title="<?= t('Navigate through all open tasks in this project') ?>">
        <?= count($alltasks) ?>
    </span>
    <a href="<?= $this->url->href('TaskViewController', 'show', array('task_id' => $next), false, '', false) ?>" class="task-next" title="<?= t('Next Task') ?>">
        <svg height="32px" width="32px" fill='currentColor' viewBox="0 0 512 512" xml:space="preserve" version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path style="fill:#FFFFFF;" d="M256,504C119.248,504,8,392.752,8,256S119.248,8,256,8s248,111.248,248,248S392.752,504,256,504z"/>
            <path style="fill:#4D4D4D;" d="M256,16c132.336,0,240,107.664,240,240S388.336,496,256,496S16,388.336,16,256S123.664,16,256,16
            M256,0C114.608,0,0,114.608,0,256c0,141.376,114.608,256,256,256s256-114.624,256-256C512,114.624,397.376,0,256,0L256,0z"/>
            <polygon style="fill:#4D4D4D;" points="272.176,111.088 414.336,255.168 272.176,399.248 135.76,399.248 278.16,255.168
            135.76,111.088 "/>
        </svg>
    </a>

</div>
