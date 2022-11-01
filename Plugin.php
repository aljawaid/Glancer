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

        // Template - Override name should be camelCase e.g. pluginNameExampleCamelCase
        $this->template->setTemplateOverride('comment/show', 'glancer:comment/show');

        // CSS - Asset Hook - keep filename lowercase
        $this->hook->on('template:layout:css', array('template' => 'plugins/Glancer/Assets/css/glancer.css'));
        
        //Routes
        $this->route->addRoute(':link', 'TaskCommentViewController', 'showTask', 'Glancer');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'Glancer';
    }

    public function getPluginDescription()
    {
        return t('Glancer lets you quickly jump to a project, task or comment through a mini bar at the bottom of the screen');
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
        return '>=1.2.20';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/aljawaid/Glancer';
    }

}
