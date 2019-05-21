<?php
/**
 * Autoload classes without namespace support, for PHP 5 < 5.3
 *
 * @link https://github.com/morvren-achronos/php-backup
 * @copyright Morvren-Achronos 2019, licensed under Apache 2.0
 * @package morvren-achronos/backup
 */

// Files are relative to here (projecy root)
$sRootDir = dirname(dirname(__FILE__));

// Where to put cached class files
$sCacheDir = "$sRootDir/legacysrc";

// The namespaces to autoload, and where to find the classes
$aNamespaceList = array(
	'MorvrenAchronos\\Backup'   => "$sRootDir/src/MorvrenAchronos/Backup",
	'Useful'                    => "$sRootDir/vendor/morvren-achronos/useful/src/Useful",
	'Psr\\Log'                  => "$sRootDir/vendor/psr/log/Psr/Log",
);

// Load class Useful_Legacy_Loader
require_once("$sRootDir/vendor/morvren-achronos/useful/src/Useful_Legacy/Loader.php");

// Register namespaces for loading
foreach ($aNamespaceList as $sNamespace => $sSourceDir) {
	Useful_Legacy_Loader::registerNamespace($sNamespace, $sSourceDir, "$sCacheDir/$sNamespace");
}
