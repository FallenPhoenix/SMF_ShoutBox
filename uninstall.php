<?php
// File Version: 2
// Hack's Park Shoutbox: www.hackspark.com

// If SSI.php is in the same place as this file, and SMF isn't defined, this is being run standalone.
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
// Hmm... no SSI.php and no SMF?
elseif (!defined('SMF'))
	die('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');

$smcFunc['db_query']('', "DROP TABLE IF EXISTS {db_prefix}shoutbox");
$smcFunc['db_query']('', "DROP TABLE IF EXISTS {db_prefix}shoutbox_settings");
$smcFunc['db_query']('', "DROP TABLE IF EXISTS {db_prefix}shoutbox_ban");

if(SMF == 'SSI')
	echo 'Database changes are complete!';

?>