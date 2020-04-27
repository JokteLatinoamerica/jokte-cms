<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<ul class="adminformlist">
	<li><?php echo $this->form->getLabel('metadesc'); ?>
	<?php echo $this->form->getInput('metadesc'); ?></li>
    <?php
    if (strlen($this->item->articletext) > 0): ?>
        <input name="copiar_metadesc" type="button" class="button" value="<?php echo JText::_( 'ARTICLE_COPIAR_EPIGRAFE' ); ?>" 
               onclick="getValue('adminForm', 'jform[metadesc]', 'jform[copete]');" />
        <input name="limpiar_metadesc" type="button" class="button" value="<?php echo JText::_( 'ARTICLE_CAMPO_LIMPIAR' ); ?>" 
               onclick="clearField('adminForm', 'jform[metadesc]');" />
    <?php endif; ?>

	<li><?php echo $this->form->getLabel('metakey'); ?>
	<?php echo $this->form->getInput('metakey'); ?></li>
    <?php
    if (strlen($this->item->articletext) > 0): ?>
        <input name="calcula_metakey" type="button" class="button" value="<?php echo JText::_( 'ARTICLE_CALCULAR_KEYS' ); ?>" 
               onclick="getFrequency('adminForm', 'jform[articletext]', 'jform[metakey]');" />
        <input name="limpiar_metakey" type="button" class="button" value="<?php echo JText::_( 'ARTICLE_CAMPO_LIMPIAR' ); ?>" 
               onclick="clearField('adminForm', 'jform[metakey]');" />
        <input name="alerta" type="hidden" value="<?php echo JText::_( 'ARTICLE_CALCULAR_AVISO' ); ?>" />
        <input name="aviso" class="blink" value="" />
    <?php endif; ?>

<?php foreach($this->form->getGroup('metadata') as $field): ?>
	<li>
		<?php if (!$field->hidden): ?>
			<?php echo $field->label; ?>
		<?php endif; ?>
		<?php echo $field->input; ?>
	</li>
<?php endforeach; ?>
</ul>
