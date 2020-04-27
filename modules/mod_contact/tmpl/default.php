<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_custom
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>

<div class="contact<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')): ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> 
	<?php if ($contact->name && $params->get('show_name')) : ?>
		<h2>
			<span class="contact-name"><?php echo $contact->name; ?></span>
		</h2>
	<?php endif;  ?>
	<?php if ($params->get('show_contact_category') == 'show_no_link') : ?>
		<h3>
			<span class="contact-category"><?php echo $contact->category_title; ?></span>
		</h3>
	<?php endif; ?>
	
	<?php  if ($params->get('presentation_style')!='plain'){?>
		<?php  echo  JHtml::_($params->get('presentation_style').'.start', 'contact-slider'); ?>
	<?php  echo JHtml::_($params->get('presentation_style').'.panel', JText::_('COM_CONTACT_DETAILS'), 'basic-details'); } ?>
	<?php if ($params->get('presentation_style')=='plain'):?>
		<?php  echo '<h3>'. JText::_('COM_CONTACT_DETAILS').'</h3>';  ?>
	<?php endif; ?>
	 
	<?php if ($contact->image && $params->get('show_image')) : ?>
		<div class="contact-image">
		<?php 
			if ($params->get('allowGravatar')):		
				$imgdefault_g 	= JURI::root().$params->get('gravimgdefault');
				$imgsize_g		= $params->get('gravatarsize');
				$title_g		= $contact->name;
				$imgcontact		= "https://www.gravatar.com/avatar/avatar.php?gravatar_id=" . md5($contact->email_g)."?d=".$imgdefault_g. "&s=" . $imgsize_g;
			else:
				$imgcontact 	= $contact->image;
 			endif; ?>			
			<?php echo JHtml::_('image', $imgcontact, JText::_('COM_CONTACT_IMAGE_DETAILS'), array('align' => 'middle')); ?>
		</div>
		
	<?php endif; ?>
     <?php if ($contact->con_position && $params->get('show_position')) : ?>
		<p class="contact-position"><?php echo $contact->con_position; ?></p>
	<?php endif; ?>

	<?php     
    require JModuleHelper::getLayoutPath('mod_contact', 'default_address');?>
    
    
    <?php if ($params->get('allow_vcard')) :	?>
		<?php echo JText::_('COM_CONTACT_DOWNLOAD_INFORMATION_AS');?>
			<a href="<?php echo JRoute::_('index.php?option=com_contact&amp;view=contact&amp;id='.$contact->id . '&amp;format=vcf'); ?>">
			<?php echo JText::_('COM_CONTACT_VCARD');?></a>
	<?php endif; ?>
	<p></p>
	
    <?php if ($params->get('show_email_form') && ($contact->email_to || $contact->user_id)) : ?>        
		<?php if ($params->get('presentation_style')!='plain'):?>
			<?php  echo JHtml::_($params->get('presentation_style').'.panel', JText::_('COM_CONTACT_EMAIL_FORM'), 'display-form');  ?>
		<?php endif; ?>
		<?php if ($params->get('presentation_style')=='plain'):?>
			<?php  echo '<h3>'. JText::_('COM_CONTACT_EMAIL_FORM').'</h3>';  ?>
		<?php endif; ?>
		<?php          
        require JModuleHelper::getLayoutPath('mod_contact', 'default_form');?>
    <?php endif; ?>  
    
    <?php if ($params->get('show_links')) : ?>
		<?php 
            require JModuleHelper::getLayoutPath('mod_contact', 'default_links');?>
	<?php endif; ?>
	
    <?php if ($params->get('show_articles') && $contact->user_id && $contact->articles) : ?>
		<?php if ($params->get('presentation_style')!='plain'):?>
			<?php echo JHtml::_($params->get('presentation_style').'.panel', JText::_('JGLOBAL_ARTICLES'), 'display-articles'); ?>
			<?php endif; ?>
			<?php if  ($params->get('presentation_style')=='plain'):?>
			<?php echo '<h3>'. JText::_('JGLOBAL_ARTICLES').'</h3>'; ?>
			<?php endif; ?>
    
			<?php 
                require JModuleHelper::getLayoutPath('mod_contact', 'default_articles');?>
	<?php endif; ?>
    
	<?php if ($params->get('show_profile') && $contact->user_id && JPluginHelper::isEnabled('user', 'profile')) : ?>
		<?php if ($params->get('presentation_style')!='plain'):?>
			<?php echo JHtml::_($params->get('presentation_style').'.panel', JText::_('COM_CONTACT_PROFILE'), 'display-profile'); ?>
		<?php endif; ?>
		<?php if ($params->get('presentation_style')=='plain'):?>
			<?php echo '<h3>'. JText::_('COM_CONTACT_PROFILE').'</h3>'; ?>
		<?php endif; ?>
		<?php 
        require JModuleHelper::getLayoutPath('mod_contact', 'default_profile');?>
	<?php endif; ?>
    
	<?php if ($contact->misc && $params->get('show_misc')) : ?>
		<?php if ($params->get('presentation_style')!='plain'){?>
			<?php echo JHtml::_($params->get('presentation_style').'.panel', JText::_('COM_CONTACT_OTHER_INFORMATION'), 'display-misc');} ?>
		<?php if ($params->get('presentation_style')=='plain'):?>
			<?php echo '<h3>'. JText::_('COM_CONTACT_OTHER_INFORMATION').'</h3>'; ?>
		<?php endif; ?>
				<div class="contact-miscinfo">
					<div class="<?php echo $params->get('marker_class'); ?>">
						<?php echo $params->get('marker_misc'); ?>
					</div>
					<div class="contact-misc">
						<?php echo $contact->misc; ?>
					</div>
				</div>
	<?php endif; ?>
	
    <?php if ($params->get('presentation_style')!='plain'){?>
			<?php echo JHtml::_($params->get('presentation_style').'.end');} ?>
</div>