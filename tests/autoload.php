<?php

$configDir = __DIR__ . '/config.php';
if (!file_exists($configDir)) {
    die("No config file found at $configDir. Please copy the $configDir.dist file." . PHP_EOL);
}

require __DIR__ . '/config.php';
require __DIR__ . '/../vendor/autoload.php';
