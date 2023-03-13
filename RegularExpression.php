<?php

$matches = [];
$result = preg_match_all("/sab|fad|cib/i", "sabrina fadlan cibro", $matches);

var_dump($matches);
var_dump($result);

$result = preg_replace("/anjing|bangsat/i", "*****", "dasar loe anjing dan bangsat");
var_dump($result);

$result = preg_split("/[\s,-]/", "Fatku Rachman Saleh,Programmer-Ulung");
var_dump($result);