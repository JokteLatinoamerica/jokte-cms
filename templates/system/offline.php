<?php
/**
 * @version		$Id: offline.php 22507 2011-12-13 20:44:45Z github_bot $
 * @package		Jokte.Site
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$app = JFactory::getApplication();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/offline.css" type="text/css" />
	<?php if ($this->direction == 'rtl') : ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/offline_rtl.css" type="text/css" />
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/general.css" type="text/css" />
</head>
<body>
<jdoc:include type="message" />
	<div class="joktetop">
		<a href="http://www.juuntos.net.ar" target="_blank" title="Proyecto Jokte!">
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png" alt="<?php echo $app->getCfg('sitename'); ?>" title="<?php echo $app->getCfg('sitename'); ?>" />
		</a>
	</div>
	<div class="joktetop2"></div><div class="joktetop3"></div><div class="joktetop4"></div>
	<div id="frame" class="outline">
		<?php if ($app->getCfg('offline_image')) : ?>
		<img src="<?php echo $app->getCfg('offline_image'); ?>" alt="<?php echo $app->getCfg('sitename'); ?>" />
		<?php endif; ?>
		<h1>
			<?php echo $app->getCfg('sitename'); ?>
		</h1>
	<?php if ($app->getCfg('display_offline_message', 1) == 1 && str_replace(' ', '', $app->getCfg('offline_message')) != ''): ?>
		<p>
			<?php echo $app->getCfg('offline_message'); ?>
		</p>
	<?php elseif ($app->getCfg('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != ''): ?>
		<p>
			<?php echo JText::_('JOFFLINE_MESSAGE'); ?>
		</p>
	<?php  endif; ?>
	<form action="<?php echo JRoute::_('index.php', true); ?>" method="post" id="form-login">
	<fieldset class="input">
		<p id="form-login-username">
			<label for="username"><?php echo JText::_('JGLOBAL_USERNAME') ?></label>
			<input name="username" id="username" type="text" class="inputbox" alt="<?php echo JText::_('JGLOBAL_USERNAME') ?>" size="18" />
		</p>
		<p id="form-login-password">
			<label for="passwd"><?php echo JText::_('JGLOBAL_PASSWORD') ?></label>
			<input type="password" name="password" class="inputbox" size="18" alt="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" id="passwd" />
		</p>
		<p id="form-login-remember">
			<label for="remember"><?php echo JText::_('JGLOBAL_REMEMBER_ME') ?></label>
			<input type="checkbox" name="remember" class="inputbox" value="yes" alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME') ?>" id="remember" />
		</p>
		<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGIN') ?>" />
		<input type="hidden" name="option" value="com_users" />
		<input type="hidden" name="task" value="user.login" />
		<input type="hidden" name="return" value="<?php echo base64_encode(JURI::base()) ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</fieldset>
	</form>
	</div>
	<div class="login-img-back">
		<img src="<?php echo $this->baseurl.'/templates/'.$this->template.'/images/back-jeyuu.png' ?>" alt="jeyuu" title="Jokte! Jeyuu" />
	</div>
	<div class="joktepie">
		<a href="https://www.juuntos.net.ar" title="Visitar la Comunidad Latinoamericana Juuntos" target="_blank">
			<img src="<?php echo $this->baseurl.'/templates/'.$this->template.'/images/juuntos-logo.png' ?>" alt="juuntos-logo" title="Comunidad Juuntos Latioamérica" />
		</a> 
	</div>
</body>
</html>
