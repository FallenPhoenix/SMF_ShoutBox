<?php
// File Version: 1
// Hack's Park Shoutbox: www.hackspark.com

// If SSI.php is in the same place as this file, and SMF isn't defined, this is being run standalone.
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
// Hmm... no SSI.php and no SMF?
elseif (!defined('SMF'))
	die('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');

// drop old table
$smcFunc['db_query']('', "DROP TABLE IF EXISTS {db_prefix}hp_settings");

// shoutbox settings
$smcFunc['db_query']('', "CREATE TABLE IF NOT EXISTS {db_prefix}shoutbox_settings(
			variable tinytext NOT NULL,
			value text NOT NULL,
		PRIMARY KEY (variable(30))
		)");

$smcFunc['db_query']('', "INSERT IGNORE INTO {db_prefix}shoutbox_settings (variable,value)
			VALUES
				('timeColor','#b7b7b7'),
				('minMsgLenght','1'),
				('maxMsgLenght','1024'),
				('maxLinkLenght','38'),
				('fixLongWords','60'),
				('timeFormat','%d.%m %H:%M'),
				('boxTitle','Shoutbox'),
				('showmsg_down','1'),
				('faces','Arial,Arial Black,Comic Sans MS,Courier New,Fixedsys,Lucida Console,Lucida Sans Unicode,Microsoft Sans Serif,System,Trebuchet MS,Times New Roman,Verdana'),
				('backgroundColor','#FFFFFF'),
				('keepShouts','100'),
				('height','180'),
				('showActions','boardindex,collapsecategory'),
				('printClass','smalltext'),
				('refreshShouts','8000'),
				('startShouts','20'),
				('disableTags','bgcolor'),
				('banUpadte','0'),
				('lastPrune', '0'),
				('textColor','#000000'),
				('showform_down','1'),
				('showdate_left','0'),
				('align_nicks','0')");

// main table
$smcFunc['db_query']('', "DROP TABLE IF EXISTS {db_prefix}shoutbox");
	$smcFunc['db_query']('', "CREATE TABLE {db_prefix}shoutbox(
				ID_SHOUT mediumint(8) unsigned NOT NULL auto_increment,
				ID_MEMBER mediumint(8) unsigned NOT NULL default '0',
				realName tinytext NOT NULL,
				colorName varchar(20) NOT NULL default '',
				style text NOT NULL,
				message text NOT NULL,
				timestamp int(10) unsigned NOT NULL default '0',
			PRIMARY KEY (ID_SHOUT)
			)");

// drop old table
$smcFunc['db_query']('', "DROP TABLE IF EXISTS {db_prefix}hp_shoutbox_ban");

// ban table
$smcFunc['db_query']('', "CREATE TABLE IF NOT EXISTS {db_prefix}shoutbox_ban(
			ID_MEMBER mediumint(8) unsigned NOT NULL default '0',
			banStart int(10) unsigned NOT NULL default '0',
			banEnd int(10) unsigned NOT NULL default '0',
			reason text NOT NULL,
			banBy tinytext NOT NULL,
			banByID mediumint(8) unsigned NOT NULL default '0',
		PRIMARY KEY (ID_MEMBER)
		)");

if(SMF == 'SSI')
	echo 'Database changes are complete!';

?>