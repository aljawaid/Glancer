<?php

namespace Kanboard\Plugin\Glancer;

use Kanboard\Core\Translator;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        // Layout - Template Hook - Override name should start lowercase e.g. pluginNameExampleCamelCase
        $this->template->hook->attach('template:layout:top', 'glancer:layout/glancer');

        // Template - Template Hook
        //  - Override name should start lowercase e.g. pluginNameExampleCamelCase
        $this->template->setTemplateOverride('comment/show', 'glancer:comment/show');

        // CSS - Asset Hook
        //  - Keep filename lowercase
        $this->hook->on('template:layout:css', array('template' => 'plugins/Glancer/Assets/css/glancer.css'));
        
        // Routes
        //  - Example: $this->route->addRoute('/my/custom/route', 'myController', 'myAction', 'myplugin');
        $this->route->addRoute(':link', 'TaskCommentViewController', 'showTask', 'Glancer');
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
