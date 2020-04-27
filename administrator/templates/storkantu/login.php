<?php
/**
 * @version		$Id: login.php 22010 2011-08-28 14:52:17Z infograf768 $
 * @package		Joomla.Administrator
 * @subpackage	Templates.storkantu fork Bluestork (c) Opensource Matters
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.filesystem.file');

$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$doc->addStyleSheet('templates/system/css/system.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');

if ($this->direction == 'rtl') {
	$doc->addStyleSheet('templates/'.$this->template.'/css/template_rtl.css');
}

/** Load specific language related css */
$lang = JFactory::getLanguage();
$file = 'language/'.$lang->getTag().'/'.$lang->getTag().'.css';
if (JFile::exists($file)) {
	$doc->addStyleSheet($file);
}

JHtml::_('behavior.noframes');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />

<!--[if IE 7]>
<link href="templates/<?php echo  $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript">
	window.addEvent('domready', function () {
		document.getElementById('form-login').username.select();
		document.getElementById('form-login').username.focus();
	});
</script>
</head>
<body>
	<div class="joktetop">
		<a href="http://www.juuntos.net.ar" target="_blank" title="Proyecto Jokte!">
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo2.png" alt="<?php echo $app->getCfg('sitename'); ?>" title="<?php echo $app->getCfg('sitename'); ?>" />
		</a>
	</div>
	<div class="joktetop2"></div><div class="joktetop3"></div><div class="joktetop4"></div>
	<div id="frame" class="outline">
		<div id="Jkcontent-login">
			<div id="element-box-login" class="login">
				<jdoc:include type="message" />
				<h1><?php echo JText::_('COM_LOGIN_JOOMLA_ADMINISTRATION_LOGIN') ?></h1>
				<jdoc:include type="component" />
				<p class="text"><?php echo JText::_('COM_LOGIN_VALID') ?></p><br />
				<p class="text2"><a href="<?php echo JURI::root(); ?>"><?php echo JText::_('COM_LOGIN_RETURN_TO_SITE_HOME_PAGE') ?></a></p>
			</div>
			<noscript>
				<?php echo JText::_('JGLOBAL_WARNJAVASCRIPT') ?>
			</noscript>
		</div>
	</div>
	<div class="login-img-back">
		<img src="<?php echo $this->baseurl.'/templates/'.$this->template.'/images/back-nombre.png' ?>" alt="rayen" title="Jokte! Rayen" />
	</div>
	<div class="joktepie">
		<a href="http://www.juuntos.net.ar" title="Visitar la Comunidad Latinoamericana Juuntos" target="_blank">
			<img src="<?php echo $this->baseurl.'/templates/'.$this->template.'/images/juuntos-logo.png' ?>" alt="juuntos-logo" title="Comunidad Juuntos Latioamérica" />
		</a>
	</div>
</body>
</html>
