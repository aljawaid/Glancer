<?php

namespace Kanboard\Plugin\Glancer\Helper;

use Kanboard\Core\Base;

/**
 * Validates administrator-configured shortcut values before HTML rendering.
 *
 * Related regression test: tests/SecurityRegressionTest.php.
 */
class ShortcutHelper extends Base
{
    /**
     * Accept only absolute HTTP(S) URLs for the configurable shortcut.
     */
    public function getSafeUrl($url)
    {
        $url = trim((string) $url);

        if ($url === '' || filter_var($url, FILTER_VALIDATE_URL) === false) {
            return '';
        }

        $scheme = strtolower((string) parse_url($url, PHP_URL_SCHEME));

        return in_array($scheme, array('http', 'https'), true) ? $url : '';
    }

    /**
     * Accept one Font Awesome 4 icon class without allowing extra attributes.
     */
    public function getSafeIconClass($iconClass)
    {
        $iconClass = trim((string) $iconClass);

        return preg_match('/\Afa-[a-z0-9-]+\z/', $iconClass) === 1 ? $iconClass : '';
    }
}
