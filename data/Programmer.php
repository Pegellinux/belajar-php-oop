<?php


class Programmer {

    public string $name;
    public function __construct(string $name){
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer {

}

class FrondendProgrammer extends Programmer{

}

class Company {
    public Programmer $programmer;
}

function sayHelloProgrammer (Programmer $programmer){

    if ($programmer instanceof BackendProgrammer){
        echo "Hello Backend Programmer $programmer->name".PHP_EOL;
    } elseif ($programmer instanceof FrondendProgrammer){
        echo "Hello Frontend Programmer $programmer->name".PHP_EOL;
    } elseif ($programmer instanceof Programmer){
        echo "Hello Programmer $programmer->name".PHP_EOL;
    }

}