<?php 
$alltasks = $this->model->taskFinderModel->getAllIds($project['id']); 
$key = array_search($task['id'], $alltasks); 
$last_key = count($alltasks)-1;
$next_key = ($key + 1 <= $last_key) ? $key + 1 : 0;
$prev_key = ($key - 1 >= 0) ? $key - 1 : $last_key;

$next = $alltasks[$next_key];
$prev = $alltasks[$prev_key];

?>
<div class="task-navigation">
    <?= $this->url->icon('arrow-left', t('Prev Task'), 'TaskViewController', 'show', array('task_id' => $prev)) ?>
    <?= $this->url->icon('arrow-right', t('Next Task'), 'TaskViewController', 'show', array('task_id' => $next)) ?>
</div>
