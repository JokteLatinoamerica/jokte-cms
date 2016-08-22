<?php
/**
 * @package		Joomla.Site
 * @subpackage	Application
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

//
// Joomla system checks.
//

@ini_set('magic_quotes_runtime', 0);
@ini_set('zend.ze1_compatibility_mode', '0');

//
// Installation check, and check on removal of the install directory.
//

if (!file_exists(JPATH_CONFIGURATION.'/configuration.php') || (filesize(JPATH_CONFIGURATION.'/configuration.php') < 10) || file_exists(JPATH_INSTALLATION.'/index.php')) {

	if (file_exists(JPATH_INSTALLATION.'/index.php')) {
		header('Location: '.substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], 'index.php')).'installation/index.php');
		exit();
	} else {
		echo 'No configuration file found and no installation code available. Exiting...';
		exit();
	}
}

//
// Joomla system startup.
//

// System includes.
require_once JPATH_LIBRARIES.'/import.php';

// Force library to be in JError legacy mode
JError::$legacy = true;
JError::setErrorHandling(E_NOTICE, 'message');
JError::setErrorHandling(E_WARNING, 'message');
JError::setErrorHandling(E_ERROR, 'callback', array('JError', 'customErrorPage'));

// Botstrap the CMS libraries.
require_once JPATH_LIBRARIES.'/cms.php';

// Pre-Load configuration.
ob_start();
require_once JPATH_CONFIGURATION.'/configuration.php';
ob_end_clean();

// System configuration.
$config = new JConfig();

// Set the error_reporting
switch ($config->error_reporting)
{
	case 'default':
	case '-1':
		break;

	case 'none':
	case '0':
		error_reporting(0);
		break;

	case 'simple':
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		ini_set('display_errors', 1);
		break;

	case 'maximum':
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		break;

	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
		break;

	default:
		error_reporting($config->error_reporting);
		ini_set('display_errors', 1);
		break;
}

define('JBLOCK', $config->blockip);

define('JBLOCKIP', $config->ip_block);

define('JBLOCKTYPE', $config->blocktype);

define('JBLOCKMESSG', $config->block_message);

define('JBLOCKTPL', $config->blocktpl);

define('JIPALLOW', $config->ip_allow);

define('JIPALLOWTYPE', $config->ip_allowtype);

define('JDEBUG', $config->debug);

unset($config);

// Load URI applicatión
jimport('joomla.environment.uri');

/*
 * Check bloqued IP and loading Joomla! framework
*/

// Get remote IP
$input = JFactory::getApplication('site')->input;
$ip_re = $input->server->get('REMOTE_ADDR', '', 'string');

$ip_alw = explode(',', JIPALLOW);
if (JBLOCK and in_array($ip_re, $ip_alw) and (JIPALLOWTYPE == "all" or JIPALLOWTYPE == "site"))
{
    // Joomla! framework loading.

    // System profiler.
    if (JDEBUG) {
        jimport('joomla.error.profiler');
        $_PROFILER = JProfiler::getInstance('Application');
    }

    // Joomla! library imports.
    jimport('joomla.application.menu');
    jimport('joomla.utilities.utility');
    jimport('joomla.event.dispatcher');
    jimport('joomla.utilities.arrayhelper');
}
else
{
    if (JBLOCK and (JBLOCKTYPE == 'all' or JBLOCKTYPE == 'site'))
    {
        if (JBLOCKIP)
        {
            $ips = explode(',', JBLOCKIP);
            if (!empty($ips))
            {
                foreach ($ips as $ipcheck)
                {
                    $pos = strpos($ip_re, $ipcheck);
                    if ($pos !== false)
                    {
                        if (!JBLOCKTPL) {
                            echo JBLOCKMESSG;
                            exit();
                        }
                    }
                }
            }
        }
    }
}
// end of file
