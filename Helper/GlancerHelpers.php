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

        // Time is in seconds
        // 60s /min
        // 300s /5min
        // 600s /10min
        // 900s /15min
        // 1800s /30min
        // 2700s /45 min
        // 3600s /hour
        // 7200s /2hrs
        // 10800s /3hrs
        // 14400s /4hrs
        // 18000s /5hrs
        // 21600s /6hrs
        // 43200s /12hrs
        // 64800s /18hrs
        // 86400s /day

        if ($diff < 60) {
            return t('- less than a minute ago');
        }
        if ($diff < 300) {
            return t('- less than 5 minutes ago');
        } elseif ($diff < 600) {
            return t('- less than 10 minutes ago');
        } elseif ($diff < 900) {
            return t('- around 15 minutes ago');
        } elseif ($diff < 1800) {
            return t('- around half an hour ago');
        } elseif ($diff < 2700) {
            return t('- around 45 minutes ago ago');
        } elseif ($diff < 3600) {
            return t('- around an hour ago');
        } elseif ($diff < 7200) {
            return t('- around 2 hours ago');
        } elseif ($diff < 10800) {
            return t('- around 3 hours ago');
        } elseif ($diff < 14400) {
            return t('- around 4 hours ago');
        } elseif ($diff < 18000) {
            return t('- around 5 hours ago ago');
        } elseif ($diff < 21600) {
            return t('- around 6 hours ago');
        } elseif ($diff < 43200) {
            return t('- around 12 hours ago');
        } elseif ($diff < 64800) {
            return t('- earlier today');
        } elseif ($diff < 86400) {
            return t('- yesterday');
        } elseif ($diff < (86400 * 3))  {
            return '- a few days ago';
        } elseif ($diff < (86400 * 5)) {
            return '- less than a week ago';
        } elseif ($diff = (86400 * 7)) {
            return '-  a week ago';
        } elseif ($diff < (86400 * 9)) {
            return '- over a week ago';
        }

        return '<span class="" title="'. t('- about') $this->dt->age($comment['date_creation']) t('ago').'">'. t('- a few days ago') .'</span>';
    }
}
