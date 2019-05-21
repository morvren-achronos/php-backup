<?php

// Install Useful legacy autoloader
$LEGACY_AUTOLOADER = array(
	'ns' => array(
		'MorvrenAchronos\\Backup' => 'src/MorvrenAchronos/Backup',
	),
);
require_once(dirname(__FILE__) . '/../vendor/morvren-achronos/useful/src/legacy_autoloader.php');

// Run command
MorvrenAchronos_Backup_Command::go();
