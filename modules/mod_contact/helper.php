<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_archive
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

class modContactHelper
{
    
	static function getContact(&$params)
	{           
        // Take params
        $object = $params->toObject();
        $contact = $object->contacto;

        JLoader::import('joomla.application.component.model');        
        JLoader::import( 'contact', JPATH_SITE . DS . 'components' . DS . 'com_contact' . DS . 'models');        
        $item = JModel::getInstance( 'contact', 'ContactModel' );        
        $item->setState( 'id', $contact );
        $item->getItem((int) $contact);         
		return $item->contact;
	}        
    
    static function getForm(&$params)
	{           
        // Take form
        $array = $params->toArray();
        $contact = $array['contacto'];
        JLoader::import('joomla.application.component.model');  
        JLoader::import( 'contact', JPATH_SITE . DS . 'components' . DS . 'com_contact' . DS . 'models');        
        JForm::addFormPath(JPATH_SITE . DS . 'components' . DS . 'com_contact' . DS . 'models' . '/forms');
        JForm::addFormPath(JPATH_SITE . DS . 'components' . DS . 'com_contact' . DS . 'models' . '/fields');
        $item = JModel::getInstance( 'contact', 'ContactModel' );  
        $item->setState( 'id', $contact );
        $form = $item->getForm();                
		return $form;
	}    
		
}