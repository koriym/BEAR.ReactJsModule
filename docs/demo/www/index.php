<?php

require dirname(__DIR__, 3) . '/vendor/autoload.php';
require dirname(__DIR__, 1) . '/vendor/autoload.php';

use BEAR\ReactJsModule\ReduxModule;
use BEAR\Resource\ResourceObject;
use Ray\Di\Injector;

$injector = new Injector(new ReduxModule(__DIR__ . '/build', 'ssr_app'));
$index = $injector->getInstance(Greeting::class);
/* @var $index ResourceObject */

echo $index;