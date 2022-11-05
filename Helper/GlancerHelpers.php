<?php

namespace Kanboard\Plugin\Glancer\Helper;

use Kanboard\Core\Base;

class AgeHelper extends Base
{
    public function newAge($timestamp, $now = null)
    {
        if ($now === null) {
            $now = time();
        }

        $diff = $now - $timestamp;

        if ($diff < 900) {
            return t('<15m');
        }
        if ($diff < 1200) {
            return t('<30m');
        } elseif ($diff < 3600) {
            return t('<1h');
        } elseif ($diff < 86400) {
            return '~'.t('%dh', $diff / 3600);
        } elseif ($diff < (86400 * 2))  {
            return '- yesterday';
        } elseif ($diff < (86400 * 5)) {
            return '- a few days ago';
        } elseif ($diff = (86400 * 7)) {
            return '-  a week ago';
        } elseif ($diff < (86400 * 9)) {
            return '- about a week ago';
        } AND SO FOURTH....

        return $default; // YOU WILL NEED TO DEFINE
    }
}
