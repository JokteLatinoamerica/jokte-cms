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
// no direct access
defined('_JEXEC') or die;
jimport( 'joomla.html.html.sliders' );
?>

<?php
echo JHtml::_('tabs.start', 'config-tabs-'.$this->component->option.'_ayuda', array('useCookie'=>1));

echo JHtml::_('tabs.panel', JText::_('COM_CONFIG_AYUDA_LOCAL'), 'ayuda-local');
?>
    <div class="ayuda-local">
        <?php echo $this->loadTemplate('local'); ?>
    </div>
<?php echo JHtml::_('tabs.panel', JText::_('COM_CONFIG_AYUDA_REMOTA'), 'ayuda-remota'); ?>
    <div class="ayuda-remota">
        <?php echo $this->loadTemplate('remota'); ?>
    </div>
<?php echo JHtml::_('tabs.panel', JText::_('COM_CONFIG_AYUDA_FORO'), 'ayuda-foro'); ?>
    <div class="ayuda-foro">
        <?php echo $this->loadTemplate('foro'); ?>
<?php echo JHtml::_('tabs.end'); ?>