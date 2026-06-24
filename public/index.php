<?php
/**
 * Faizan Ali Portfolio – Front Controller
 */

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/helpers.php';

use App\Core\App;

$app = new App();
$app->run();