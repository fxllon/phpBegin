<?php
define('APP_PATH', __DIR__);

require('Bootstrap.php');

use \core\Container;
use \Ns\TestNs;

(new Bootstrap())->run();

$container = new Container();
var_dump($container->toArray());
echo $container->toString();
echo "\n";
TestNs::print();