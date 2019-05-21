<?php

// Install Composer PSR-4 autoloader
require_once(__DIR__ . '/../vendor/autoload.php');

// Run command
\MorvrenAchronos\Backup\Command::go();
