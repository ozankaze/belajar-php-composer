<?php

// 49

use Programmerzamannow\BelajarPhpComposerHello\Customer;

require_once __DIR__ . "/vendor/autoload.php";

$customer = new Customer("Budi");
echo $customer->sayHello("Zan") . PHP_EOL;