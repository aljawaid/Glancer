<?php

/**
 * Verifies task navigation edge cases and repaired route contracts.
 *
 * Related production files: Helper/TaskNavigationHelper.php,
 * Template/task/navigation.php, Template/comment/show-latest.php,
 * and Controller/TaskCommentViewController.php.
 */

$navigationHelper = $container['helper']->taskNavigationHelper;

glancerAssertSame(
    array('count' => 0, 'previous' => null, 'next' => null),
    $navigationHelper->getNavigation(array(), 1),
    'An empty project must not produce task links.'
);
glancerAssertSame(
    array('count' => 1, 'previous' => null, 'next' => null),
    $navigationHelper->getNavigation(array(7), 7),
    'A single open task must not link to itself.'
);
glancerAssertSame(
    array('count' => 2, 'previous' => null, 'next' => null),
    $navigationHelper->getNavigation(array(7, 8), 99),
    'A closed or unrelated task must not borrow another task position.'
);
glancerAssertSame(
    array('count' => 3, 'previous' => 5, 'next' => 9),
    $navigationHelper->getNavigation(array(5, 7, 9), 7),
    'Navigation must resolve adjacent open tasks.'
);
glancerAssertSame(
    array('count' => 3, 'previous' => 9, 'next' => 7),
    $navigationHelper->getNavigation(array(5, 7, 9), 5),
    'Navigation must wrap at the start of the task list.'
);

$controller = file_get_contents($pluginRoot . '/Controller/TaskCommentViewController.php');
$commentTemplate = file_get_contents($pluginRoot . '/Template/comment/show-latest.php');

glancerAssertFalse(strpos($controller, '$_POST') !== false, 'Controller routes must use the Kanboard request abstraction.');
glancerAssertTrue(strpos($controller, "'comment-' . \$commentID") !== false, 'Comment redirects must pass the comment anchor separately from the task ID.');
glancerAssertTrue(strpos($controller, 'redirectToTask($this->request->getIntegerParam') !== false, 'The task button route must target a task rather than a project.');
glancerAssertTrue(strpos($commentTemplate, "'projectid' => \$task['project_id']") !== false, 'The Board action must include its project identifier.');

$commentUrl = $container['helper']->url->to('TaskViewController', 'show', array('task_id' => 42), 'comment-7');
glancerAssertTrue(substr($commentUrl, -10) === '#comment-7', 'Kanboard must generate the repaired comment anchor.');
