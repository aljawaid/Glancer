<?php

namespace Kanboard\Plugin\Glancer;

use Kanboard\Core\Translator;
use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\Glancer\AgeHelper;

class Plugin extends Base
{

    public function initialize()
    {
        // Layout - Template Hook - Override name should start lowercase e.g. pluginNameExampleCamelCase
        $this->template->hook->attach('template:layout:top', 'glancer:layout/glancer');

        // Template - Template Hook
        //  - Override name should start lowercase e.g. pluginNameExampleCamelCase
        // Get accurate version of Kanboard
        $accurate_version = str_replace('v', '', APP_VERSION);
        $accurate_version = preg_replace('/\s+/', '', $accurate_version);

        if (strpos(APP_VERSION, 'master') !== false && file_exists('ChangeLog')) { $accurate_version = trim(file_get_contents('ChangeLog', false, null, 8, 6), ' '); }
        if (version_compare($accurate_version, '1.2.22') >= 0) {
            // For KB versions AFTER removing 'project_id' from task URLs
            $this->template->setTemplateOverride('comment/show', 'glancer:comment/show-latest');
            $this->template->setTemplateOverride('event/comment_create', 'glancer:event/comment_create-latest');
            $this->template->setTemplateOverride('event/comment_delete', 'glancer:event/comment_delete-latest');
            $this->template->setTemplateOverride('event/comment_update', 'glancer:event/comment_update-latest');
        } else {
            // For KB versions BEFORE removing 'project_id' from task URLs
            $this->template->setTemplateOverride('comment/show', 'glancer:comment/show');
            $this->template->setTemplateOverride('event/comment_create', 'glancer:event/comment_create');
            $this->template->setTemplateOverride('event/comment_delete', 'glancer:event/comment_delete');
            $this->template->setTemplateOverride('event/comment_update', 'glancer:event/comment_update');
            $this->template->setTemplateOverride('event/events', 'glancer:event/events');
        }

        // CSS - Asset Hook
        //  - Keep filename lowercase
        $this->hook->on('template:layout:css', array('template' => 'plugins/Glancer/Assets/css/glancer.css'));
        
        // JS - Asset Hook
        //  - Keep filename lowercase
        $this->hook->on('template:layout:js', array('template' => 'plugins/Glancer/Assets/js/glancer.js'));


        // Helper
        $this->helper->register('ageHelper', '\Kanboard\Plugin\Glancer\Helper\AgeHelper');

    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        // Plugin Name MUST be identical to namespace for Plugin Directory to detect updated versions
        return 'Glancer';
    }

    public function getPluginDescription()
    {
        return t('Glancer lets you quickly jump to a project, task or comment through a search bar at the bottom of the screen.  Following the \'Getting Things Done\' methodology, productive users can glance in and out of tasks, comments and projects across the interface.');
    }

    public function getPluginAuthor()
    {
        return 'aljawaid';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.20';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/aljawaid/Glancer';
    }

}
