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

$fieldSets = $this->form->getFieldsets('params');
           
foreach ($fieldSets as $name => $fieldSet) :
    $label = !empty($fieldSet->label) ? $fieldSet->label : 'COM_MODULES_'.$name.'_FIELDSET_LABEL';
    if (isset($fieldSet->description) && trim($fieldSet->description)) :
	echo '<p class="tip">'.$this->escape(JText::_($fieldSet->description)).'</p>';
    endif;
    ?>
    <fieldset class="adminform"> 
        <legend><?php echo JText::_('COM_MODULES_'.$fieldSet->name.'_FIELDSET_LABEL'); ?></legend>
	<?php $hidden_fields = ''; ?>
	<ul class="adminformlist">
            <?php foreach ($this->form->getFieldset($name) as $field) : ?>
                <?php if (!$field->hidden) : ?>
		<li>
                    <?php echo $field->label; ?>
                    <?php echo $field->input; ?>
		</li>
		<?php else : $hidden_fields.= $field->input; ?>
		<?php endif; ?>
            <?php endforeach; ?>
	</ul>
	<?php echo $hidden_fields; ?>
    </fieldset>
<?php endforeach; ?>