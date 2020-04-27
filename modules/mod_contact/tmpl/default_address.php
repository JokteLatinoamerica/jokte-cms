<?php

/**
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/* marker_class: Class based on the selection of text, none, or icons
 * jicon-text, jicon-none, jicon-icon
 */
?>
<?php if (($params->get('address_check') > 0) &&  ($contact->address || $contact->suburb  || $contact->state || $contact->country || $contact->postcode)) : ?>
	<div class="contact-address">
	<?php if ($params->get('address_check') > 0) : ?>
		<span class="<?php echo $params->get('marker_class'); ?>" >
			<?php echo $params->get('marker_address'); ?>
		</span>
		<address>
	<?php endif; ?>
	<?php if ($contact->address && $params->get('show_street_address')) : ?>
		<span class="contact-street">
			<?php echo nl2br($contact->address); ?>
		</span>
	<?php endif; ?>
	<?php if ($contact->suburb && $params->get('show_suburb')) : ?>
		<span class="contact-suburb">
			<?php echo $contact->suburb; ?>
		</span>
	<?php endif; ?>
	<?php if ($contact->state && $params->get('show_state')) : ?>
		<span class="contact-state">
			<?php echo $contact->state; ?>
		</span>
	<?php endif; ?>
	<?php if ($contact->postcode && $params->get('show_postcode')) : ?>
		<span class="contact-postcode">
			<?php echo $contact->postcode; ?>
		</span>
	<?php endif; ?>
	<?php if ($contact->country && $params->get('show_country')) : ?>
		<span class="contact-country">
			<?php echo $contact->country; ?>
		</span>
	<?php endif; ?>
<?php endif; ?>

<?php if ($params->get('address_check') > 0) : ?>
	</address>
	</div>
<?php endif; ?>

<?php if($params->get('show_email') || $params->get('show_telephone')||$params->get('show_fax')||$params->get('show_mobile')|| $params->get('show_webpage') ) : ?>
	<div class="contact-contactinfo">
<?php endif; ?>
<?php if ($contact->email_to && $params->get('show_email')) : ?>
	<p>
		<span class="<?php echo $params->get('marker_class'); ?>" >
			<?php echo $params->get('marker_email'); ?>
		</span>
		<span class="contact-emailto">
			<?php echo $contact->email_to; ?>
		</span>
	</p>
<?php endif; ?>

<?php if ($contact->telephone && $params->get('show_telephone')) : ?>
	<p>
		<span class="<?php echo $params->get('marker_class'); ?>" >
			<?php echo $params->get('marker_telephone'); ?>
		</span>
		<span class="contact-telephone">
			<?php echo nl2br($contact->telephone); ?>
		</span>
	</p>
<?php endif; ?>
<?php if ($contact->fax && $params->get('show_fax')) : ?>
	<p>
		<span class="<?php echo $params->get('marker_class'); ?>" >
			<?php echo $params->get('marker_fax'); ?>
		</span>
		<span class="contact-fax">
		<?php echo nl2br($contact->fax); ?>
		</span>
	</p>
<?php endif; ?>
<?php if ($contact->mobile && $params->get('show_mobile')) :?>
	<p>
		<span class="<?php echo $params->get('marker_class'); ?>" >
			<?php echo $params->get('marker_mobile'); ?>
		</span>
		<span class="contact-mobile">
			<?php echo nl2br($contact->mobile); ?>
		</span>
	</p>
<?php endif; ?>
<?php if ($contact->webpage && $params->get('show_webpage')) : ?>
	<p>
		<span class="<?php echo $params->get('marker_class'); ?>" >
		</span>
		<span class="contact-webpage">
			<a href="<?php echo $contact->webpage; ?>" target="_blank">
			<?php echo $contact->webpage; ?></a>
		</span>
	</p>
<?php endif; ?>
<?php if($params->get('show_email') || $params->get('show_telephone')||$params->get('show_fax')||$params->get('show_mobile')|| $params->get('show_webpage') ) : ?>
	</div>
<?php endif; ?>