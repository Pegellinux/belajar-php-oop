<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name. PHP_EOL;
MathHelper::$name = "Hasan";
echo MathHelper::$name. PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result". PHP_EOL;


//echo $mathHelper->name; // error dkarenakan properties nya static