<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Form
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

/**
 * Form Field class for the Joomla Platform.
 * Supports a font list of options.
 *
 * @package     Joomla.Platform
 * @subpackage  Form
 * @since       11.1
 */
class JFormFieldFuentes extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  11.1
	 */
	protected $type = 'Fuentes';

	/**
	 * Method to get the field input markup for a generic list.
	 * Use the multiple attribute to enable multiselect.
	 *
	 * @return  string  The field input markup.
	 *
	 * @since   11.1
	 */
	protected function getInput()
	{
		// Initialize variables.
		$html = array();
		$attr = '';

		// Initialize some field attributes.
		$attr .= $this->element['class'] ? ' class="' . (string) $this->element['class'] . '"' : '';

		// To avoid user's confusion, readonly="true" should imply disabled="true".
		if ((string) $this->element['readonly'] == 'true' || (string) $this->element['disabled'] == 'true')
		{
			$attr .= ' disabled="disabled"';
		}

		$attr .= $this->element['size'] ? ' size="' . (int) $this->element['size'] . '"' : '';
		$attr .= $this->multiple ? ' multiple="multiple"' : '';

		// Initialize JavaScript field attributes.
		$attr .= $this->element['onchange'] ? ' onchange="' . (string) $this->element['onchange'] . '"' : '';

		// Get the field options.
		$options = array(
			JHTML::_('select.option', "0", JText::_('JGLOBAL_SELECCIONE_UNA_FUENTE') ),
			JHTML::_('select.option', "Impact, Charcoal, sans-serif;",'Impact' ),
			JHTML::_('select.option', "'Palatino Linotype', 'Book Antiqua', Palatino, serif;", 'Palatino Linotype' ),
			JHTML::_('select.option', "Tahoma, Geneva, sans-serif;",'Tahoma' ),
			JHTML::_('select.option', "Century Gothic, sans-serif;",'Century Gothic' ),
			JHTML::_('select.option', "'Lucida Sans Unicode', 'Lucida Grande', sans-serif;", 'Lucida Sans Unicode' ),
			JHTML::_('select.option', "'Arial Black', Gadget, sans-serif;", 'Arial Black' ),
			JHTML::_('select.option', "'Times New Roman', Times, serif;",'Times New Roman' ),
			JHTML::_('select.option', "'Arial Narrow', sans-serif;", 'Arial Narrow' ),
			JHTML::_('select.option', "Verdana, Geneva, sans-serif;", 'Verdana' ),
			JHTML::_('select.option', "Copperplate / Copperplate Gothic Light, sans-serif;", 'Copperplate' ),
			JHTML::_('select.option', "'Lucida Console', Monaco, monospace;", 'Lucida Console' ),
			JHTML::_('select.option', "Gill Sans / Gill Sans MT, sans-serif;", 'Gill Sans' ),
			JHTML::_('select.option', "'Trebuchet MS', Helvetica, sans-serif;", 'Trebuchet MS' ),
			JHTML::_('select.option', "'Courier New', Courier, monospace;", 'Courier New' ),
			JHTML::_('select.option', "Arial, Helvetica, sans-serif;", 'Arial' ),
			JHTML::_('select.option', "Georgia, Serif;", 'Georgia' ),
		);
		
		$html[] = JHtml::_('select.genericlist', $options, $this->name, trim($attr), 'value', 'text', $this->value, $this->id);
		
		return implode($html);
	}
}
