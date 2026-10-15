<?php

namespace Kanboard\Plugin\Glancer\Helper;

use Kanboard\Core\Base;

/**
 * Resolves safe previous and next task targets for the task navigation control.
 *
 * Related regression test: tests/NavigationRegressionTest.php.
 */
class TaskNavigationHelper extends Base
{
    /**
     * Return navigation targets without indexing an empty or unrelated task list.
     */
    public function getNavigation(array $taskIds, $currentTaskId)
    {
        $taskIds = array_values(array_map('intval', $taskIds));
        $currentTaskId = (int) $currentTaskId;
        $count = count($taskIds);
        $currentIndex = array_search($currentTaskId, $taskIds, true);

        if ($count < 2 || $currentIndex === false) {
            return array(
                'count' => $count,
                'previous' => null,
                'next' => null,
            );
        }

        return array(
            'count' => $count,
            'previous' => $taskIds[($currentIndex - 1 + $count) % $count],
            'next' => $taskIds[($currentIndex + 1) % $count],
        );
    }
}
