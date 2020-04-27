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
// no direct access
defined('_JEXEC') or die;

$document = JFactory::getDocument();
$css = '   
.videoWrapper {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
.videoWrapper iframe{
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
}
';
$document->addStyleDeclaration($css);
?>

<div class="videoWrapper">
		<iframe 
            id="_viframe"
            name="_viframe"
            src="https://www.youtube.com/embed/<?php echo $this->params->ayudavideo; ?>"
            width="640" height="360"
            seamless="seamless"
            frameborder="0">
        </iframe>
</div>