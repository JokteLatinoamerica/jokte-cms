<?php
/**
 * @package		Jokte.Administrator
 * @subpackage          com_content
 * @copyright           Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 *                      (c) 2016 Comunidad Juuntos
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * ***************************************************************************************
 * Warning: Some creations, modifications and improved were made by the Community Juuntos
 * for the latinamerican Project Jokte! CMS
 * Last Modification: 24/08/2016 by Tux Merlin
 * Version: Jokte Rayen 1.4.0
 ***************************************************************************************
 */
// Acceso directo a este archivo prohibido.
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
 * Ayuda view
 *
 * @static
 * @package		Jokte.Site
 * @subpackage	com_ayuda
 * @since 1.2.2
 */
class ContentViewAyuda extends JViewLegacy
{
    function display($tpl = null)
    {
        $component	 = JComponentHelper::getComponent('com_content');
        // Check for errors.
        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode("\n", $errors));
            return false;
        }

        JToolBarHelper::title(JText::_('COM_CONTENT_AYUDA'), 'help_header.png');
        var_dump($component->params->get());

        $this->assignRef('component',	$component);

        parent::display($tpl);
    }
}