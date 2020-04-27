<?php
/**
 * @package		Jokte.Administrator
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
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

// Load the tooltip behavior.
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (document.formvalidator.isValid(document.id('adminForm'))) {
			Joomla.submitform(task, document.getElementById('adminForm'));
		}
	}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_content&view=config');?>" id="adminForm" method="post" name="adminForm" autocomplete="off" class="form-validate">
	<?php
    echo JHtml::_('sliders.start', 'config-tabs-'.$this->component->option.'_configuration', array('useCookie'=>1));

    echo JHtml::_('sliders.panel', JText::_('COM_CONTENT_CONFIG_ARTICLES'), 'articles-details');
    ?>
    <div class="width-60 fltlft">
        <?php echo $this->loadTemplate('preview'); ?>
        <?php echo $this->loadTemplate('edicion'); ?>
        <?php echo $this->loadTemplate('redes'); ?>
        <?php echo $this->loadTemplate('adjuntos'); ?>
    </div>
    <div class="width-40 fltrt">
        <?php echo $this->loadTemplate('articles'); ?>
    </div>

    <?php echo JHtml::_('sliders.panel', JText::_('COM_CONTENT_CONFIG_FORMATS'), 'formats-details'); ?>
    <div class="width-60 fltlft">
        <?php echo $this->loadTemplate('category'); ?>
        <?php echo $this->loadTemplate('categories'); ?>
    </div>
    <div class="width-40 fltrt">
        <?php echo $this->loadTemplate('formatblog'); ?>
        <?php echo $this->loadTemplate('formatlist'); ?>
    </div>

    <?php echo JHtml::_('sliders.panel', JText::_('COM_CONTENT_CONFIG_OTHERS'), 'others-details'); ?>
    <div class="width-60 fltlft">
        <?php echo $this->loadTemplate('shared'); ?>
        <?php echo $this->loadTemplate('integration'); ?>
    </div>
    <div class="width-40 fltrt">
        <?php echo $this->loadTemplate('ayuda'); ?>
    </div>

    <?php echo JHtml::_('sliders.panel', JText::_('COM_CONTENT_CONFIG_PERMISSIONS'), 'permissions-details'); ?>
        <?php echo $this->loadTemplate('permissions'); ?>

    <?php echo JHtml::_('sliders.end'); ?>

    <div>
		<input type="hidden" name="id" value="<?php echo $this->component->id;?>" />
		<input type="hidden" name="component" value="<?php echo $this->component->option;?>" />
		<input type="hidden" name="task" value="" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
