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
// No direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.combobox');
JHtml::_('behavior.switcher');
JHtml::_('behavior.keepalive');

$hasContent = empty($this->item->module) || $this->item->module == 'custom' || $this->item->module == 'mod_custom';

$script = "Joomla.submitbutton = function(task)
	{
			if (task == 'module.cancel' || document.formvalidator.isValid(document.id('module-form'))) {";
if ($hasContent) {
	$script .= $this->form->getField('content')->save();
}
$script .= "	Joomla.submitform(task, document.getElementById('module-form'));
				if (self != top) {
					window.top.setTimeout('window.parent.SqueezeBox.close()', 1000);
				}
			} else {
				alert('".$this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED'))."');
			}
	}";

JFactory::getDocument()->addScriptDeclaration($script);

echo $this->loadTemplate('navigation');

?>
<form action="<?php echo JRoute::_('index.php?option=com_modules&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="module-form" class="form-validate">
	<div id="config-document">
        <div id="page-edit" class="tab">
            <div class="noshow">
                <div class="width-60 fltlft">
                    <?php echo $this->loadTemplate('base'); ?>
                </div>
                <div class="width-40 fltrt">
                    <?php echo $this->loadTemplate('options'); ?>
                </div>
            </div>
        </div>
        <div id="page-params" class="tab">
            <div class="noshow">
                <?php if ($hasContent) : ?>
                    <div class="width-60 fltlft">
                        <fieldset class="adminform">
                            <legend><?php echo JText::_('COM_MODULES_CUSTOM_OUTPUT'); ?></legend>
                            <ul class="adminformlist">
                                <div class="clr"></div>
                                <li><?php echo $this->form->getLabel('content'); ?>
                                <div class="clr"></div>
                                <?php echo $this->form->getInput('content'); ?></li>
                            </ul>
                        </fieldset>
                    </div>
                    <div class="width-40 fltrt">
                        <?php echo $this->loadTemplate('assignment'); ?>
                    </div>            
                    <?php else: ?>
                    <div class="width-100 fltrt">
                        <?php echo $this->loadTemplate('assignment'); ?>
                    </div>                    
                <?php endif;?>                    
            </div>
        </div> 
        <div id="page-ayuda" class="tab">
            <div class="noshow">
                <div class="width-100 fltlft">                        
                    <?php echo $this->loadTemplate('ayuda'); ?>
                </div>
            </div>
        </div> 
        <input type="hidden" name="task" value="" />
        <?php echo JHtml::_('form.token'); ?>                
	</div>
	<div class="clr"></div>
</form>
