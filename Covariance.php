<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("muezza");
$cat->eat(new \Data\AnimalFood());

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("guguk");
$dog->eat(new \Data\Food());