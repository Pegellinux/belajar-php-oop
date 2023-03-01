<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Fatku";
$manager->sayHello("Hasan");

$vp = new VicePresident();
$vp->name = "Sabrina";
$vp->sayHello("Husein");