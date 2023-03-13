<?php


$dateTime = new DateTime();
$dateTime->setDate(1998, 02, 25);
$dateTime->setTime(12, 12,12, 0);
$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

$now = new DateTime();
//
var_dump($now);

$now->setTimezone(new DateTimeZone("Asia/Riyadh"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini di Riyadh : $string".PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2023-03-14 12:12:12", new DateTimeZone("Asia/Makassar"));
var_dump($date);

if ($date){
    var_dump($date);
} else {
    echo "Format Salah".PHP_EOL;
}
