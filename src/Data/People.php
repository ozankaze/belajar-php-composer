<?php

// 22

namespace Programmerzamannow\BelajarPhpComposer\Data;

class People
{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name)
    {
        echo "Hello $name, My name $this->name" . PHP_EOL; 
    }
}
