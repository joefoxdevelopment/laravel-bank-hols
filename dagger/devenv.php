<?php

declare(strict_types=1);

require(dirname(__DIR__) . '/vendor/autoload.php');

use Dagger\Dagger;

$dagger = Dagger::connect();
$dagger->container()
    ->from('8.3.3-fpm-alpine3.19')
    ->withExposedPort(80)
    ->asService()
    ->start();
