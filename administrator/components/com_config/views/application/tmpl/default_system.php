<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	com_config
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;
?>
<div class="width-100">	
    <fieldset class="adminform">
		<legend><?php echo JText::_('CONFIG_HELPERBACKEND_SETTINGS_LABEL'); ?></legend>
		<ul class="adminformlist">
			<?php
			foreach ($this->form->getFieldset('helps') as $field):
			?>
				<li><?php echo $field->label; ?>
				<?php echo $field->input; ?></li>
			<?php
			endforeach;
			?>
			</ul>
	</fieldset>
    <fieldset class="adminform">
		<legend><?php echo JText::_('COM_MODULES_AYUDAS_FIELDSET_LABEL'); ?></legend>
		<ul class="adminformlist">
			<?php
			foreach ($this->form->getFieldset('ayudas') as $field):
			?>
				<li><?php echo $field->label; ?>
				<?php echo $field->input; ?></li>
			<?php
			endforeach;
			?>
			</ul>
	</fieldset>
</div>