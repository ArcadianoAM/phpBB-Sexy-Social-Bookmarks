<?php
/**
*
* @package - Sexy social bookmarks
* @version $Id: acp_sexy.php 2013-06-13 13:02 Galandas (Rey) $
* @copyright (c) 2013 www.phpbb3world.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package module_install
*/
class acp_sexy_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_sexy',
			'title'		=> 'SEXY_TITLE',
			'version'	=> '1.0.9',
			'modes'		=> array(
				'settings'		=> array('title' => 'SEXY_CONFIG', 'auth' => 'acl_a_sexy', 'cat' => array('SEXY_TITLE')),
			),
		);
	}
	
	function install()
    {
	}
       
	function uninstall()
	{
	}
       
}

?>