<?php

interface HelloWorld {
    function sayHello(): void;
}

$helloworld = new class("Hasan") implements HelloWorld {

    public string $name;

    public function __construct(string $name){

//        echo "Hello $this->name". PHP_EOL;
        $this->name = $name;
    }
    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloworld->sayHello();