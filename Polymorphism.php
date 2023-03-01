<?php


require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("hasan");
var_dump($company);

$company->programmer = new BackendProgrammer("hasan");
var_dump($company);

$company->programmer = new FrondendProgrammer("hasan");
var_dump($company);

sayHelloProgrammer(new Programmer("hasan"));
sayHelloProgrammer(new BackendProgrammer("hasan"));
sayHelloProgrammer(new FrondendProgrammer("hasan"));