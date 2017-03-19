<?php

namespace Craft;

class ElementVariable
{
    
    public function getName()
    {
        $plugin = craft()->plugins->getPlugin('element');
        return $plugin->getName();
    }
    
    
    public function get($elementType = ElementType::Entry, $criteria = null)
	{
		return craft()->elements->getCriteria($elementType, $criteria);
	}
    
    
    
}
