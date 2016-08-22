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
	</div>
	<div class="joktetop2"></div><div class="joktetop3"></div><div class="joktetop4"></div>
	<div id="frame" class="outline">
		<h1>
			<?php echo $app->getCfg('sitename'); ?>
		</h1>
	<?php if ($app->getCfg('blockip', 1) == 1 && str_replace(' ', '', $app->getCfg('block_message')) != ''): ?>
		<p>
			<?php echo $app->getCfg('block_message'); ?>
		</p>
	<?php elseif ($app->getCfg('block_message', 1) == 2 && str_replace(' ', '', JText::_('JBLOCK_MESSAGE')) != ''): ?>
		<p>
			<?php echo JText::_('JBLOCK_MESSAGE'); ?>
		</p>
	<?php  endif; ?>
	</div>
</body>
</html>
