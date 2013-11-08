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
* @package acp
*/
class acp_sexy
{
	var $u_action;

	function main($id, $mode)
	{
		global $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('mods/info_acp_sexy');
		$this->tpl_name = 'acp_sexy';
		$this->page_title = $user->lang['SEXY_TITLE'];
		add_form_key('acp_sexy');
		// Version Check
		$config['SEXY_VERSION'] = (isset($config['SEXY_VERSION'])) ? $config['SEXY_VERSION'] : '1.0.9';

		$submit = (isset($_POST['submit'])) ? true : false;

		switch ($mode)
		{
			case 'settings':
				$data = array(
					'sexy_enjoy'	=> utf8_normalize_nfc(request_var('sexy_enjoy', $config['sexy_enjoy'], true)),
					'sexy_buttons'	=> utf8_normalize_nfc(request_var('sexy_buttons', $config['sexy_buttons'], true)),
					'sexy_colors'	=> utf8_normalize_nfc(request_var('sexy_colors', $config['sexy_colors'], true)),
					'sexy_text'		=> utf8_normalize_nfc(request_var('sexy_text', $config['sexy_text'], true)),
				);

				if ($submit)
				{
					if (!check_form_key('acp_sexy'))
					{
						trigger_error('FORM_INVALID');
					}
					$log = 'SEXY_SOCIAL';

					set_config('sexy_enable', request_var('sexy_enable', true));
					set_config('sexy_below_enable', request_var('sexy_below_enable', true));
					set_config('sexy_position', request_var('sexy_position', true));
					set_config('sexy_position_topic', request_var('sexy_position_topic', true));					
					set_config('sexy_enjoy', $data['sexy_enjoy']);
					set_config('sexy_buttons', $data['sexy_buttons']);
					set_config('sexy_colors', $data['sexy_colors']);
					set_config('sexy_text', $data['sexy_text']);
					
					add_log('admin', 'LOG_' . $log);
					trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
				}
				
				// Start mod list forum_images from kiss engine copyright 2007 phpbbireland.com //
				$dirslist = ' ';

				if (!file_exists($phpbb_root_path . 'images/share'))
				{
					trigger_error(sprintf($user->lang['MISSING_FILE_OR_FOLDER'], $file));
				}

				$dirs = dir($phpbb_root_path . 'images/share');
				while ($file = $dirs->read())
				{
					if (stripos($file, ".gif") ||  stripos($file, ".png"))
					{
						$dirslist .= "$file ";
					}
				}
				closedir($dirs->handle);
				$dirslist = explode(" ", $dirslist);
				sort($dirslist);

				for ($i = 0; $i < sizeof($dirslist); $i++)
				{
					if ($dirslist[$i] != '')
					{
						$template->assign_block_vars('sexy_enjoy_imgage', array('SEXY_ENJOY_IMG' => $dirslist[$i]));
					}
				}
				$dirslist = '';
				// End mod list forum_images from kiss engine code //

				$template->assign_vars(array(
					'S_SEXY_ENABLE' 		=> $config['sexy_enable'],
					'S_SEXY_BELOW_ENABLE'	=> $config['sexy_below_enable'],
				    'S_SEXY_POSITION'	    => $config['sexy_position'],
				    'S_SEXY_POSITIONT'	    => $config['sexy_position_topic'],					
					'S_SEXY_ENJOY'			=> $config['sexy_enjoy'],
                    'SEXY_ENJOY_PATH'		=> $phpbb_root_path . 'images/share/',
					'S_SEXY_BUTTONS'		=> $config['sexy_buttons'],
					'S_SEXY_COLOR'			=> $config['sexy_colors'],
					'S_SEXY_TEXT'			=> $config['sexy_text'],
					'SEXY_VERSION'			=> $config['SEXY_VERSION'],
					'S_VERSION_UP_TO_DATE'	=> $this->sexy_version_compare($config['SEXY_VERSION']),
					'U_SWATCH'				=> append_sid("{$phpbb_admin_path}swatch.$phpEx", 'form=acp_sexy&amp;name=sexy_colors'),
					'U_SWATCHS'				=> append_sid("{$phpbb_admin_path}swatchs.$phpEx", 'form=acp_sexy&amp;name=sexy_text'),	
					'U_ACTION'				=> $this->u_action,
				));
			break;
		}
	}

	/**
	* Obtains the latest version information
	**/
	function sexy_version_compare($current_version = '', $version_up_to_date = true, $ttl = 86400)
	{
		global $cache, $template;

		$info = $cache->get('sexy_versioncheck');

		if ($info === false)
		{
			$errstr = '';
			$errno = 0;

			$info = get_remote_file('phpbb3world.com', '/modversione', 'sexybookmarks.txt', $errstr, $errno);
			if ($info === false)
			{
				$template->assign_var('S_VERSIONCHECK_FAIL', true);
				$cache->destroy('sexy_versioncheck');
			}
		}

		if ($info !== false)
		{
			$cache->put('sexy_versioncheck', $info, $ttl);
			$latest_version_info = explode("\n", $info);

			$latest_version = strtolower(trim($latest_version_info[0]));
			$current_version = strtolower(trim($current_version));
			$version_up_to_date = version_compare($current_version, $latest_version, '<') ? false : true;

			$template->assign_vars(array(
				'U_VERSIONCHECK'	=> ($version_up_to_date) ? false : $latest_version_info[1],
				'S_VERSIONOLD'		=> $current_version,
				'S_VERSIONNEW'		=> ($version_up_to_date) ? false : $latest_version_info[0],
			));
		}

		return $version_up_to_date;
	}
}

?>