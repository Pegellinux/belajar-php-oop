<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodbye};

$person = new Person();
$person->goodBye("Sabrina");
$person->hello("Fatku");

$person->name = "Hasan";
var_dump($person);

$person->run();