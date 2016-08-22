<?php
/**
 * @package		Jokte.Administrator
 * @subpackage	com_config
 * @copyright	Copyright (C) 2015 - 2016 Comunidad Juuntos
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;
?>
<div class="width-100">
<fieldset class="adminform">
	<legend><?php echo JText::_('COM_CONFIG_SECURITY_SETTINGS'); ?></legend>
	<ul class="adminformlist">
			<?php
			foreach ($this->form->getFieldset('ipblock') as $field):
			?>
					<li><?php echo $field->label; ?>
					<?php echo $field->input; ?></li>
			<?php
			endforeach;
			?>
	</ul>
	<ul class="adminformlist">
		<?php
		foreach ($this->form->getFieldset('jurltrue') as $field):
			?>
			<li><?php echo $field->label; ?>
				<?php echo $field->input; ?></li>
			<?php
		endforeach;
		?>
	</ul>

</fieldset>
</div>
