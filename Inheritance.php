<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Sabrina";
$manager->sayHello("Fatku");

$vp = new VicePresident();
$vp->name = "Hasan";
$vp->sayHello("Husein");