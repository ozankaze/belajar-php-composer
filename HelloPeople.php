<?php

// 22

require_once __DIR__ . "/vendor/autoload.php";

use Programmerzamannow\BelajarPhpComposer\Data\People;

$result = new People("Eko");

echo $result->sayHello("Zan");