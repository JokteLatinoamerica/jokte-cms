<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	mod_version
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

if (!empty($version)) :
    echo '<p align="center" style="font-size:120%; color:darkred">'
        . $version . '</p>';
    echo '<p align="center">'
        . JHtml::_('image', 'media/system/jokte-nombre.png' , JText::_('MOD_VERSION_OKTE_NOMBRE_IMAGEN')) . '</p>';
    echo '<p align="center" style="border:1px dotted #808080; margin:5px; padding:10px"><b>'
        . JText::_('MOD_VERSION_JOKTE_TITULO') .'</b></p>';
    echo '<p align="center">'
        . JText::_('MOD_VERSION_JOKTE_NOMBRE_DETALLE') .'</p>';
endif;