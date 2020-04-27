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
?>
<div class="width-100">
    <fieldset class="adminform">
        <legend><?php echo JText::_('COM_CONTENT_CONFIG_FORMATBLOG_SETTINGS'); ?></legend>
        <ul class="adminformlist">
            <?php
            foreach ($this->form->getFieldset('blog_default_parameters') as $field):
                ?>
                <li><?php echo $field->label; ?>
                    <?php echo $field->input; ?></li>
                <?php
            endforeach;
            ?>
        </ul>
    </fieldset>
</div>