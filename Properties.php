<?php


require_once "data/Person.php";

$person = new Person("farhan", "kalimantan");
$person->name = "Sabrina";
$person->address = "Depok";
//$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name". PHP_EOL;
echo "Address : $person->address". PHP_EOL;
echo "Country : $person->country". PHP_EOL;

$person2 = new Person("budi", "bogor");
$person2->name = "Fatku";
$person2->address = null;
//$person2->country = "Indonesia";

var_dump($person2);

//error
//$person2->name = [];

