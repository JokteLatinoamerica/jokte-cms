<?php
/**
 * @package		Joomla.Administrator
 * @subpackage  com_modules
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 *              Copyright (c) 2016 - Miguel Tuyaré
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
jimport('joomla.filesystem.file');
$text = trim($this->item->xml->description);
if (empty($this->params->ayudalocal)):
    echo '<div class="blink" style="font-size:1.2em; color:green; padding-bottom:5px;">'
        .JText::_('COM_MODULES_FILE_NOT_INDICATED').'</div>';
    echo '<div class="mod_desc_nohelp" style="padding-top:5px; border-top:1px dashed #808080">'.JText::_($text).'</div>';
else:
    $local = JPATH_SITE . DS. 'ayudas' . DS . $this->params->ayudalocal;
    if (!JFile::exists($local)):
        echo '<div class="blink" style="font-size:1.2em; color:green; padding-bottom:5px;">'
            .JText::_('COM_MODULES_FILE_NOT_EXISTS').'</div>';
        echo '<div class="mod_desc_nohelp" style="padding-top:5px; border-top:1px dashed #808080">'.JText::_($text).'</div>';
    else:
    ?>

    <script type="text/javascript">
        function resize_liframe(){
            document.getElementById("liframe").height=768 // required for mozilla/firefox bugs, value can be "", null, or integer
            document.getElementById('liframe').height=window.frames["liframe"].document.body.scrollHeight
        }
    </script>

    <iframe width=96%
        id="liframe"
        name="liframe"
        src="<?php echo $local; ?>"
        scrolling="true"
        frameborder="no"
        ALLOWTRANSPARENCY="true"
        onload=resize_l_iframe();>

    </iframe>
    <?php 
    endif;
endif;