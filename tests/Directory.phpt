<?php

declare(strict_types = 1);

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

$class = new \Drago\Parameters\Directory('../app/', '../www/', '../temp/', '../vendor/');

Assert::type('string', $class->getAppDir());