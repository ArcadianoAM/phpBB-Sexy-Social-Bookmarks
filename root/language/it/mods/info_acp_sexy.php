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
	'INSTALL_SEXY'				=> 'Installa Sexy Social Bookmarks',
	'INSTALL_SEXY_CONFIRM'		=> 'Sei pronto per installare il Mod Sexy Social Bookmarks?',
	'SEXY_EXPLAIN'				=> 'Installa Sexy Social Bookmarks con le modifiche al database con il metodo automatico UMIL.',
	'UNINSTALL_SEXY'			=> 'Disinstalla Sexy Social Bookmarks',
	'UNINSTALL_SEXY_CONFIRM'	=> 'Sei pronto a disinstallare la Mod Sexy Social Bookmarks? Tutte le impostazioni e i dati salvati da questa mod saranno rimossi!',
	'UPDATE_SEXY'				=> 'Aggiornare Sexy Social Bookmarks',
	'UPDATE_SEXY_CONFIRM'		=> 'Sei pronto per aggiornare il Mod Sexy Social Bookmarks?',

	// Sexy Social Bookmarks settings
	'SEXY_TITLE'				=> 'Sexy Social Bookmarks',
	'SEXY_EXPLAIN'				=> 'Questa è la pagina di configurazione della Mod Sexy Social Bookmarks by Galandas (Rey)',
	'SEXY_CONFIG'				=> 'Sexy Social Bookmarks mod',
	'ACP_SEXY_IMAGE'			=> '<img src="images/sexi.png" style="width: 391px; height: 90px;">',
	'SEXY_SETTINGS'				=> 'Impostazioni Sexy',
	'SEXY_ENABLE'				=> 'Abilita in indice:',
	'SEXY_ENABLE_EXPLAIN'		=> 'Decidi se abilitare Sexy Social Bookmarks nell’indice',
	'SEXY_BELOW'				=> 'Abilita in viewtopic:',
	'SEXY_BELOW_EXPLAIN'		=> 'Decidi se abilitare Sexy Social Bookmarks in viewtopic',
	'TOOLTIP_COLOR'				=> 'Colore toolTips',
	'TOOLTIP_COLOR_EXPLAIN'		=> 'Qui puoi scegliere il colore di animazione del toolTips',
	'TOOLTIP_TEXT'				=> 'Colore testo toolTips',
	'TOOLTIP_TEXT_EXPLAIN'		=> 'Qui puoi scegliere il colore del testo del toolTips',
	'LOG_SEXY_SOCIAL'			=> '<strong>Sexy Social Bookmarks Aggiornato</strong>',
	
	// Sexy Social Bookmarks Position
	'SEXY_BOTTOM_NAVBAR'	  => 'In basso sulla navbar',
	'SEXY_FIRST_CATEGORY'	  => 'Sopra la prima categoria',
	'SEXY_POSITION'	          => 'Posizione in indice:',	
	'SEXY_POSITION_EXPLAIN'	  => 'Qui puoi scegliere la posizione che preferisci. <strong>In basso sulla navbar</strong> i pulsanti verranno posizionati in basso sulla barra navbar dove c’è il testo Indice. La seconda opzione <strong>Sopra la prima categoria</strong> i pulsanti verranno posizionati sopra la prima categoria del forum.',
	'SEXY_ABOVE_MESSAGE'	  => 'Sopra il primo messaggio',
	'SEXY_BELOW_MESSAGE'	  => 'Sotto il primo messaggio',
	'SEXY_POSITIONT'	      => 'Posizione in viewtopic:',	
	'SEXY_POSITIONT_EXPLAIN'  => 'Qui puoi scegliere la posizione che preferisci in viewtopic. <strong>Sopra il primo messaggio</strong> i pulsanti verranno posizionati sopra il primo messaggio. La seconda opzione <strong>Sotto il primo messaggio</strong> i pulsanti verranno posizionati sotto il primo messaggio.',	

	// Sexy Social Bookmarks version
	'SEXY_VERSION_OLD'		=> 'Versione corrente della MOD:',
	'SEXY_VERSION_NEW'		=> 'Ultima versione della MOD:',
	'AUTHOR_TOPIC'			=> 'Autore Argomento',
	'SEXY_ICON'				=> 'Shareaholic Sexy Bookmark script by phpbb3world.com per phpbb3',
	'SEXY_COPYRIGHT'		=> '<strong>La Mod è stata creata da <a href="http://phpbb3world.com">phpbb3world.com</a></strong>',

	// Sexy Social Bookmarks buttons
	'SEXY_BUTTON'			=> 'Sexy Pulsanti',
	'SEXY_BUTTONS'			=> 'Scegli i Pulsanti Sexy da visualizzare',
	'SEXY_BUTTONS_EXPLAIN'	=> 'Qui puoi scegliere i pulsanti sexy che vuoi visualizzare nel tuo forum.<br /> <strong>Nota:</strong> qui sotto vedete l’immagine è <strong>l’ID</strong> associata ad essa copia il <strong>codice ID</strong> o cancellalo assecondo le tue esigenze.',
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
	'SEXY_IMAGE'			=> 'Sexy Immagine',
	'SEXY_IMAGES'			=> 'Scegli l’immagine da visualizzare',
	'SEXY_IMAGES_EXPLAIN'	=> 'Inserisci l’immagine Sexy da visualizzare accanto hai pulsanti, clicca con il mouse su una delle immagini qui sotto, questa verrà inserita automaticamente nell’area',
	'SEXY_ENJOY_CURR'			=> 'Immagine corrente',
	'CLEAR_BUTTON_IMAGE'		=> 'Togli Immagine',
	
	'acl_a_sexy'			=> array('lang' => 'Può usare Sexy Social Bookmarks', 'cat' => 'misc'),
));

?>