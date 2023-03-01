<?php

require_once "data/Person.php";

$hasan = new Person("kampret", "jakarta");
$hasan->name = "fatku";
$hasan->sayHello("sabrina");

$husein = new Person("hendra", "subang");
$husein->name = "ali";
$husein->sayHello(null);

$hasan->info();
$husein->info();