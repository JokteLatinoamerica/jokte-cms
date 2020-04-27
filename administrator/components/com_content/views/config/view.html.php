<?php
/**
 * @package		Jokte.Administrator
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * *************************************************************************************
 * Warning: Some modifications and improved were made by the Community Juuntos for
 * the latinamerican Project Jokte! CMS
 * Last Modification: 24/08/2016
 * *************************************************************************************
 */

defined('_JEXEC') or die;

/**
 * @package		Jokte.Administrator
 * @subpackage	com_content
 * @since       24/08/2016
 */
class ContentViewConfig extends JViewLegacy
{
    protected $state;

    /**
	 * Display the view
     * @param   $tpl = template
     * @return  void
     * @since   24/08/2016
	 */
	public function display($tpl = null)
	{
		$form		    = $this->get('Form');

        $this->state		= $this->get('State');
        $component	 = JComponentHelper::getComponent('com_content');
		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		// Bind the form to the data.
		if ($form && $component->params) {
			$form->bind($component->params);
		}

		$this->assignRef('form',		$form);
		$this->assignRef('component',	$component);
		$this->assignRef('ayuda',	    $ayuda);

		$this->addToolbar();

        parent::display($tpl);
	}

    /**
     * Add the page title and toolbar.
     *
     * @since	1.6
     */
    protected function addToolbar()
    {
        $user		= JFactory::getUser();
        JToolBarHelper::title(JText::_('COM_CONTENT_CONFIGURATION'), 'config.png');


        // For new records, check the create permission.
        if (count($user->authorise('com_content', 'core.admin')) > 0) {
            JToolBarHelper::apply('config.save');
        }

    }
}
