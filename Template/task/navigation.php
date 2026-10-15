<?php
// Related regression test: tests/NavigationRegressionTest.php.
$taskNavigation = $this->helper->taskNavigationHelper->getNavigation(
    $this->model->taskFinderModel->getAllIds($project['id']),
    $task['id']
);
?>
<div class="task-navigation">

    <?php if ($taskNavigation['previous'] !== null): ?>
        <a href="<?= $this->url->href('TaskViewController', 'show', array('task_id' => $taskNavigation['previous']), false, '', false) ?>" class="task-prev" title="<?= t('Previous Task') ?>" aria-label="<?= t('Previous Task') ?>">
            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
        </a>
    <?php endif ?>
    <span class="navigation-task-count" title="<?= t('Navigate through all open tasks in this project') ?>">
        <?= $taskNavigation['count'] ?>
    </span>
    <?php if ($taskNavigation['next'] !== null): ?>
        <a href="<?= $this->url->href('TaskViewController', 'show', array('task_id' => $taskNavigation['next']), false, '', false) ?>" class="task-next" title="<?= t('Next Task') ?>" aria-label="<?= t('Next Task') ?>">
            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
        </a>
    <?php endif ?>

</div>
