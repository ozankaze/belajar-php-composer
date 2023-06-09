<?php

// 22

use Programmerzamannow\BelajarPhpComposer\Data\People;

require_once __DIR__ . "/vendor/autoload.php";

$result = new People("Budi");
echo $result->sayHello("Zan") . PHP_EOL;