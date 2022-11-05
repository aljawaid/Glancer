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

        $timestamp = $comment['date_creation'];

        $diff = $now - $timestamp;

        if ($diff < 900) {
            return t('<15m');
        }
        if ($diff < 1200) {
            return t('- less than half an hour ago');
        } elseif ($diff < 3600) {
            return t('- less than an hour ago');
        } elseif ($diff < 86400) {
            // what does this mean in human terms? less than xxhrs ago?
            return '~'.t('%dh', $diff / 3600);
            // because this goes to days
        } elseif ($diff < (86400 * 2))  {
            return '- yesterday';
        } elseif ($diff < (86400 * 5)) {
            return '- a few days ago';
            // mins x days? what if a week is classed as 5-7 days... is it just > ($diff = (86400 * 7) && ($diff = (86400 * 9)
        } elseif ($diff = (86400 * 7)) {
            return '-  a week ago';
        } elseif ($diff < (86400 * 9)) {
            return '- about a week ago';
        } AND SO FOURTH....

        return $default; // YOU WILL NEED TO DEFINE
    }
}
