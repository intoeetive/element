<?php

namespace Craft;

class ElementPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Element Variable');
    }
    
    public function getDescription()
    {
        return Craft::t('Access any element in Craft from templates.');
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/intoeetive/element/blob/master/README.md';
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'Yuri Salimovskiy';
    }

    public function getDeveloperUrl()
    {
        return 'http://www.intoeetive.com';
    }

    public function hasCpSection()
    {
        return false;
    }
}
