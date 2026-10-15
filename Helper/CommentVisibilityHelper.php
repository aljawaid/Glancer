<?php

namespace Kanboard\Plugin\Glancer\Helper;

use Kanboard\Core\Base;
use Kanboard\Core\Security\Role;

/**
 * Enforces Kanboard comment visibility rules in the Glancer comment override.
 *
 * Related regression test: tests/SecurityRegressionTest.php.
 */
class CommentVisibilityHelper extends Base
{
    /**
     * Return whether a comment may be rendered for the current application role.
     */
    public function isVisible(array $comment, $userRole)
    {
        $visibility = isset($comment['visibility']) ? $comment['visibility'] : Role::APP_USER;

        if ($userRole === '' && $visibility !== Role::APP_USER) {
            return false;
        }

        if ($userRole === Role::APP_MANAGER && $visibility === Role::APP_ADMIN) {
            return false;
        }

        if ($userRole === Role::APP_USER && $visibility !== Role::APP_USER) {
            return false;
        }

        return true;
    }

    /**
     * Return the translated visibility label used by Kanboard core.
     */
    public function getLabel(array $comment)
    {
        $visibility = isset($comment['visibility']) ? $comment['visibility'] : Role::APP_USER;

        if ($visibility === Role::APP_USER) {
            return t('Standard users');
        }

        if ($visibility === Role::APP_MANAGER) {
            return t('Application managers or more');
        }

        return t('Administrators');
    }
}
