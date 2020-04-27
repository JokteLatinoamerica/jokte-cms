<?php
/**
 * @package		Jokte.Administrator
 * @subpackage	Sistema de Ayuda
 * @copyright	Comunidad Juuntos 2017. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;
jimport( 'joomla.html.html.sliders' );
?>

<?php
echo JHtml::_('tabs.start', 'config-tabs-'.$this->component->option.'_ayuda', array('useCookie'=>1));

echo JHtml::_('tabs.panel', JText::_('COM_CONFIG_AYUDA_FORO'), 'ayuda-foro'); ?>
    <div class="ayuda-foro">
        <?php echo $this->loadTemplate('foro'); ?>
    </div>
<?php echo JHtml::_('tabs.panel', JText::_('COM_CONFIG_AYUDA_REMOTA'), 'ayuda-remota'); ?>
    <div class="ayuda-remota">
        <?php echo $this->loadTemplate('remota'); ?>
    </div>
<?php echo JHtml::_('tabs.panel', JText::_('COM_CONFIG_AYUDA_LOCAL'), 'ayuda-local');?>
    <div class="ayuda-local">
        <?php echo $this->loadTemplate('local'); ?>
    </div>
<?php echo JHtml::_('tabs.panel', JText::_('COM_CONFIG_AYUDA_PDF'), 'ayuda-pdf'); ?>
    <div class="ayuda-pdf">
        <?php echo $this->loadTemplate('pdf'); ?>
    </div>
<?php echo JHtml::_('tabs.panel', JText::_('COM_CONFIG_AYUDA_VIDEO'), 'ayuda-video'); ?>
    <div class="ayuda-video">
        <?php echo $this->loadTemplate('video'); ?>
    </div>
<?php echo JHtml::_('tabs.end'); ?>