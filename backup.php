#!/usr/bin/php
<?php

if (false && version_compare(PHP_VERSION, '5.3.0') >= 0) {
	require_once('src/main.php');
}
else {
	require_once('src/main_legacy.php');
}
