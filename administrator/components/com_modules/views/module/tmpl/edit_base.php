<?php
/**
 * @package		Joomla.Administrator
 * @subpackage  com_modules
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 *              Copyright (c) 2015 - 2016 - Miguel Tuyaré
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * ***************************************************************************************
 * Warning: Some creations, modifications and improved were made by the Community Juuntos
 * for the latinamerican Project Jokte! CMS
 * Last Modification: 24/08/2016 by Tux Merlin
 * Version: Jokte Rayen 1.4.0
 ***************************************************************************************
 */
// No direct access.
defined('_JEXEC') or die;
?>

<fieldset class="adminform">
    <legend><?php echo JText::_('JDETAILS'); ?></legend>
    <p class="advert_tip"><?php echo JText::_('JGLOBAL_CAMPOS_OBLIGATORIOS'); ?></p>
    <ul class="adminformlist">
	<li><?php echo $this->form->getLabel('title'); ?>
           <?php echo $this->form->getInput('title'); ?></li>

	<li><?php echo $this->form->getLabel('showtitle'); ?>
	<?php echo $this->form->getInput('showtitle'); ?></li>

	<li><?php echo $this->form->getLabel('position'); ?>
	<?php echo $this->form->getInput('position'); ?></li>

	<?php if ((string) $this->item->xml->name != 'Login Form'): ?>
        <li><?php echo $this->form->getLabel('published'); ?>
	<?php echo $this->form->getInput('published'); ?></li>
	<?php endif; ?>

	<li><?php echo $this->form->getLabel('access'); ?>
	<?php echo $this->form->getInput('access'); ?></li>

	<li><?php echo $this->form->getLabel('ordering'); ?>
	<?php echo $this->form->getInput('ordering'); ?></li>
	<?php if ((string) $this->item->xml->name != 'Login Form'): ?>

        <li><?php echo $this->form->getLabel('publish_up'); ?>
	<?php echo $this->form->getInput('publish_up'); ?></li>

	<li><?php echo $this->form->getLabel('publish_down'); ?>
	<?php echo $this->form->getInput('publish_down'); ?></li>
	<?php endif; ?>

	<li><?php echo $this->form->getLabel('language'); ?>
	<?php echo $this->form->getInput('language'); ?></li>

	<li><?php echo $this->form->getLabel('note'); ?>
	<?php echo $this->form->getInput('note'); ?></li>

	<?php if ($this->item->id) : ?>
	<li><?php echo $this->form->getLabel('id'); ?>
	<?php echo $this->form->getInput('id'); ?></li>
	<?php endif; ?>

	<li><?php echo $this->form->getLabel('module'); ?>
	<?php echo $this->form->getInput('module'); ?>
	<input type="text" size="35" value="<?php if ($this->item->xml) echo ($text = (string) $this->item->xml->name) ? JText::_($text) : $this->item->module;else echo JText::_('COM_MODULES_ERR_XML');?>" class="readonly" readonly="readonly" /></li>

	<li><?php echo $this->form->getLabel('client_id'); ?>
	<input type="text" size="35" value="<?php echo $this->item->client_id == 0 ? JText::_('JSITE') : JText::_('JADMINISTRATOR'); ?>	" class="readonly" readonly="readonly" />
	<?php echo $this->form->getInput('client_id'); ?></li>
    </ul>
    <div class="clr"></div>
    <?php if ($this->item->xml) : ?>
        <?php if ($text = trim($this->item->xml->description)) : ?>
        <label>
            <?php echo JText::_('COM_MODULES_MODULE_DESCRIPTION');?>
        </label>
        <span class="readonly mod-desc"><?php echo JText::_($text); ?></span>
        <?php endif; ?>
    <?php else : ?>
        <p class="error"><?php echo JText::_('COM_MODULES_ERR_XML'); ?></p>
    <?php endif; ?>
    <div class="clr"></div>
</fieldset>