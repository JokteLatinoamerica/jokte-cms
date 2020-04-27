<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	mod_version
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

/**
 * @package		Joomla.Administrator
 * @subpackage	mod_version
 * @since		1.6
 */
abstract class modVersionHelper
{
	/**
	 * Get the member items of the submenu.
	 *
	 * @return	mixed	An arry of menu items, or false on error.
	 */
	public static function getVersion(&$params)
	{
		$format = $params->get('format', 'corta');
		$product = $params->get('product', 0);
		$method = 'get' . "Version" . ucfirst($format);

		// Get the joomla version
		$instance = new JVjokte();
		$version = call_user_func(array($instance, $method));//$instance->{$method};

		if ($format=='corta' && !empty($product)) {
			//add the product name to short format only (in long format it's included)
			$version = $instance->PRODUCTO . ' ' . $version;
		}
		return $version;
	}
}
