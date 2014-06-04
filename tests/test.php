<?php 
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use composerDemo\Demo;
$demo = new Demo;
echo $demo->hi();
