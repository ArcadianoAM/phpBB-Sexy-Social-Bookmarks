<?php
/**
 *
 * @author Galandas (Rey) 
 * @version $Id$
 * @copyright (c) 2013 phpbb3world.com
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 * @ignore
 */
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The name of the mod to be displayed during installation.
$mod_name = 'SEXY_TITLE';

/*
* The name of the config variable which will hold the currently installed version
* UMIL will handle checking, setting, and updating the version itself.
*/
$version_config_name = 'sexy_version';


// The language file which will be included when installing
$language_file = 'mods/info_acp_sexy';


/*
* Optionally we may specify our own logo image to show in the upper corner instead of the default logo.
* $phpbb_root_path will get prepended to the path specified
* Image height should be 50px to prevent cut-off or stretching.
*/
$logo_img = 'adm/images/sexy_icon/sexi.png';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(
	// Version 1.0.0
	'1.0.0'	=> array(
		//First version
	),

	// Version 1.0.1
	'1.0.1'	=> array(
		//Adjusted other small things
	),

	// Version 1.0.2
	'1.0.2'	=> array(
		// Add enable/disable config entry
		'config_add' => array(
			array('sexy_enable', ''),
		),
	'cache_purge' => array('', 'template', 'theme'),
	),

	// Version 1.0.3
	'1.0.3'	=> array(
		//Mod improved
	),

	// Version 1.0.4
	'1.0.4'	=> array(
		// Sexy Social Bookmarks added after the first message
		'config_add' => array(
			array('sexy_below_enable', true),
		),
	),

	// Version 1.0.5
	'1.0.5'	=> array(
		//Added new buttons, you adjusted other small things	
	),

	// Version 1.0.6
	'1.0.6'	=> array(
		// Added images
		'config_add' => array(
			array('sexy_enjoy', 'images/share/share_8.png'),
		),

		// add permission settings
		'permission_add' => array(
			array('a_sexy', true),
		),

		// Added the module
		'module_add' => array(
			array('acp', 'ACP_CAT_DOT_MODS', 'SEXY_CONFIG'),

			array('acp', 'SEXY_CONFIG', array(
					'module_basename'	=> 'sexy',
					'module_langname'	=> 'SEXY_TITLE',
					'module_mode'		=> 'settings',
					'module_auth'		=> 'acl_a_sexy',
				),
			),
		),
	),

	// Version 1.0.7
	'1.0.7'	=> array(
		// Added visual buttons choice, color tooltip animation is the color of the text
		'config_add' => array(
			array('sexy_buttons', '5,7,2,304,38,74,52,39,40,10,88,309,3,219,191,236,196,54,53,78,89,24,102,1,92,247,48,265'),
			array('sexy_colors', '000000'),
			array('sexy_text', 'FFFFFF'),
		),
	),
	
	// Version 1.0.8
	'1.0.8'	=> array(
		//Improvements code	
	),

	// Version 1.0.9
	'1.0.9'	=> array(
		// Added choice the location of the buttons in index is in viewtopic
		'config_add' => array(
			array('sexy_position', true),
		    array('sexy_position_topic', false),
		),
	),	
);

// Include the UMIL Auto file, it handles the rest
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);