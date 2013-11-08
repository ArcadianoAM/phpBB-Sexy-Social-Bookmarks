<?php

/**
*
* @author Galandas (Rey)
* @package info_acp_sexy.php, v1.0.9 12/06/2013 Exp $
* @copyright (c) 2013 www.phpbb3world.com/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang)) 
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM
//


$lang = array_merge($lang, array(
	// Sexy Social Bookmarks UMIL
	'INSTALL_SEXY'				=> 'Install Sexy Social Bookmarks',
	'INSTALL_SEXY_CONFIRM'		=> 'Are you ready to install the Sexy Social Bookmarks Mod?',
	'SEXY_EXPLAIN'				=> 'Install Sexy Social Bookmarks database changes with UMIL auto method.',
	'UNINSTALL_SEXY'			=> 'Uninstall Sexy Social Bookmarks',
	'UNINSTALL_SEXY_CONFIRM'	=> 'Are you ready to uninstall the Sexy Social Bookmarks? All settings and data saved by this mod will be removed!',
	'UPDATE_SEXY'				=> 'Update Sexy Social Bookmarks',
	'UPDATE_SEXY_CONFIRM'		=> 'Are you ready to update the Sexy Social Bookmarks Mod?',

	// Sexy Social Bookmarks settings
	'SEXY_TITLE'				=> 'Sexy Social Bookmarks',
	'SEXY_EXPLAIN'				=> 'This is the configuration page Sexy Social Bookmarks Mod by Galandas (Rey)',
	'SEXY_CONFIG'				=> 'Sexy Social Bookmarks mod',
	'ACP_SEXY_IMAGE'			=> '<img src="images/sexi.png" style="width: 391px; height: 90px;" alt="" />',
	'SEXY_SETTINGS'				=> 'Settings Sexy Social Bookmarks',
	'SEXY_ENABLE'				=> 'Enable in index:',
	'SEXY_ENABLE_EXPLAIN'		=> 'Decide whether to enable Sexy Social Bookmarks in index',
	'SEXY_BELOW'				=> 'Enable in viewtopic:',
	'SEXY_BELOW_EXPLAIN'		=> 'Decide whether to enable Sexy Social Bookmarks in viewtopic',
	'TOOLTIP_COLOR'				=> 'Color toolTips',
	'TOOLTIP_COLOR_EXPLAIN'		=> 'Here you can choose the color of the animation of toolTips',
	'TOOLTIP_TEXT'				=> 'Text color toolTips',
	'TOOLTIP_TEXT_EXPLAIN'		=> 'Here you can choose the color of the text of tooltips',
	'LOG_SEXY_SOCIAL'			=> '<strong>Sexy Social Bookmarks Updated</strong>',
	
	// Sexy Social Bookmarks Position
	'SEXY_BOTTOM_NAVBAR'	  => 'In the bottom of the navbar',
	'SEXY_FIRST_CATEGORY'	  => 'Above the first category',
	'SEXY_POSITION'	          => 'Position:',	
	'SEXY_POSITION_EXPLAIN'	  => 'Here you can choose the location you want. <strong>In the bottom of the navbar</strong> The buttons can be placed on the navbar at the bottom where there is index text. The second option <strong>Above the first category</strong> The buttons can be placed above the first category of the forum.',	
	'SEXY_ABOVE_MESSAGE'	  => 'Above the first message',
	'SEXY_BELOW_MESSAGE'	  => 'Under the first message',
	'SEXY_POSITIONT'	      => 'Position in viewtopic:',	
	'SEXY_POSITIONT_EXPLAIN'  => 'Here you can choose the location that you prefer in viewtopic. <strong>Above the first message</strong> buttons can be placed above the first message. The second option <strong>Under the first message</strong> buttons can be placed under the first message.',
	
	// Sexy Social Bookmarks version
	'SEXY_VERSION_OLD'		=> 'Current version of the MOD:',
	'SEXY_VERSION_NEW'		=> 'Latest version of the MOD:',
	'AUTHOR_TOPIC'			=> 'Author Topic',
	'SEXY_ICON'				=> 'Shareaholic Sexy Bookmark script by phpbb3world.com to phpbb3',
	'SEXY_COPYRIGHT'		=> '<strong>The Mod was created by <a href="http://phpbb3world.com">phpbb3world.com</a></strong>',

	// Sexy Social Bookmarks buttons
	'SEXY_BUTTON'			=> 'Sexy Buttons',
	'SEXY_BUTTONS'			=> 'Choose Sexy Buttons of display',
	'SEXY_BUTTONS_EXPLAIN'	=> 'Here you can choose which buttons you want to show sexy in your forum.<br /> <strong>Note:</strong> below you can see preview of the images, copy the <strong>ID</strong> code associated with the button, or delete it according to your needs',		
	'SEXY_FACEBOOK'			=> 'Facebook ID:<span style="color: #B52F0A">5</span>',
	'SEXY_TWITTER'			=> 'Twitter ID:<span style="color: #B52F0A">7</span>',
	'SEXY_DELICIOUS'		=> 'Delicious ID:<span style="color: #B52F0A">2</span>',
	'SEXY_GOOGLE'			=> 'Google+1 ID:<span style="color: #B52F0A">304</span>',
	'SEXY_STUMBLEUPON'		=> 'StumbleUpon ID:<span style="color: #B52F0A">38</span>',
	'SEXY_BOOKMAKERS'		=> 'Google B ID:<span style="color: #B52F0A">74</span>',
	'SEXY_GMAIL'			=> 'GMail ID:<span style="color: #B52F0A">52</span>',
	'SEXY_MYSPACE'			=> 'MySpace ID:<span style="color: #B52F0A">39</span>',
	'SEXY_REDDIT'			=> 'Reddit ID:<span style="color: #B52F0A">40</span>',
	'SEXY_TECHNORATI'		=> 'Technorati ID:<span style="color: #B52F0A">10</span>',
	'SEXY_LINKEDIN'			=> 'LinkedIn ID:<span style="color: #B52F0A">88</span>',
	'SEXY_PINTEREST'		=> 'Pinterest ID:<span style="color: #B52F0A">309</span>',
	'SEXY_DIGG'				=> 'Digg ID:<span style="color: #B52F0A">3</span>',
	'SEXY_BLOGGER'			=> 'Blogger ID:<span style="color: #B52F0A">219</span>',
	'SEXY_EVERNOTE'			=> 'Evernote ID:<span style="color: #B52F0A">191</span>',
	'SEXY_PRINTFRIENDLY'	=> 'PrintFriendly ID:<span style="color: #B52F0A">236</span>',
	'SEXY_BEBO'				=> 'Bebo ID:<span style="color: #B52F0A">196</span>',
	'SEXY_YAHOO'			=> 'Yahoo! ID:<span style="color: #B52F0A">54</span>',
	'SEXY_HOTMAIL'			=> 'Hotmail ID:<span style="color: #B52F0A">53</span>',
	'SEXY_TUMBLR'			=> 'Tumblr ID:<span style="color: #B52F0A">78</span>',
	'SEXY_GLOBAL'			=> 'Global ID:<span style="color: #B52F0A">89</span>',
	'SEXY_DIIGO'			=> 'Diigo ID:<span style="color: #B52F0A">24</span>',
	'SEXY_DZONE'			=> 'DZone ID:<span style="color: #B52F0A">102</span>',
	'SEXY_BUZZ'				=> 'Buzzster ID:<span style="color: #B52F0A">1</span>',
	'SEXY_VIADEO'			=> 'Viadeo ID:<span style="color: #B52F0A">92</span>',
	'SEXY_ORKUT'			=> 'Orkut ID:<span style="color: #B52F0A">247</span>',
	'SEXY_BLINK'			=> 'Blinklist ID:<span style="color: #B52F0A">48</span>',
	'SEXY_SPRING'			=> 'SpringPad ID:<span style="color: #B52F0A">265</span>',
	
	// Sexy Social Bookmarks ACP buttons	
	'ACP_IMAGE_FACEBOOK'		    => 'images/sexy_icon/Facebook.png',
	'ACP_IMAGE_TWITTER'			    => 'images/sexy_icon/Twitter.png',	
	'ACP_IMAGE_DELICIOUS'		    => 'images/sexy_icon/Delicious.png',
	'ACP_IMAGE_GOOGLE'			    => 'images/sexy_icon/Google.png',	
	'ACP_IMAGE_STUMBLEUPON'		    => 'images/sexy_icon/StumbleUpon.png',
	'ACP_IMAGE_BOOKMAKERS'		    => 'images/sexy_icon/Google-b.png',
	'ACP_IMAGE_GMAIL'			    => 'images/sexy_icon/GMail.png',
	'ACP_IMAGE_MYSPACE'			    => 'images/sexy_icon/MySpace.png',	
	'ACP_IMAGE_REDDIT'			    => 'images/sexy_icon/Reddit.png',
	'ACP_IMAGE_TECHNORATI'		    => 'images/sexy_icon/Technorati.png',
	'ACP_IMAGE_LINKEDIN'		    => 'images/sexy_icon/LinkedIn.png',
	'ACP_IMAGE_PINTEREST'		    => 'images/sexy_icon/Pinterest.png',
	'ACP_IMAGE_DIGG'			    => 'images/sexy_icon/Digg.png',
	'ACP_IMAGE_BLOGGER'			    => 'images/sexy_icon/Blogger.png',
	'ACP_IMAGE_EVERNOTE'		    => 'images/sexy_icon/Evernote.png',
	'ACP_IMAGE_PRINT'		        => 'images/sexy_icon/Printfriendly.png',
	'ACP_IMAGE_BEBO'		        => 'images/sexy_icon/Bebo.png',
	'ACP_IMAGE_YAHOO'		        => 'images/sexy_icon/Yahoo.png',
	'ACP_IMAGE_HOTMAIL'		        => 'images/sexy_icon/Hotmail.png',
	'ACP_IMAGE_TUMBLR'		        => 'images/sexy_icon/Tumblr.png',
	'ACP_IMAGE_GLOBAL'		        => 'images/sexy_icon/Global.png',
	'ACP_IMAGE_DIIGO'		        => 'images/sexy_icon/Diigo.png',
	'ACP_IMAGE_DZONE'		        => 'images/sexy_icon/Dzone.png',
	'ACP_IMAGE_BUZZ'		        => 'images/sexy_icon/Buzz.png',
	'ACP_IMAGE_VIADEO'		        => 'images/sexy_icon/Viadeo.png',
	'ACP_IMAGE_ORKUT'		        => 'images/sexy_icon/Orkut.png',
	'ACP_IMAGE_BLINK'		        => 'images/sexy_icon/Blink.png',
	'ACP_IMAGE_SPRING'		        => 'images/sexy_icon/Spring.png',

	// Sexy Social Bookmarks images
	'SEXY_IMAGE'			=> 'Sexy Image',
	'SEXY_IMAGES'			=> 'Select the image to display',
	'SEXY_IMAGES_EXPLAIN'	=> 'Place a picture to display next to Sexy buttons, click on the mouse on one of the pictures below, it will be automatically inserted in the area',
	'SEXY_ENJOY_CURR'			=> 'Current image',
	'CLEAR_BUTTON_IMAGE'		=> 'Remove Image',
	
	'acl_a_sexy'			=> array('lang' => 'Can use Sexy Social Bookmarks', 'cat' => 'misc'),
));

?>