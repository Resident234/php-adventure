<?php
/**
 * Created by PhpStorm.
 * User: GSU
 * Date: 21.07.2019
 * Time: 9:27
 */

/*
Develop a program that of the numbers 20 .. 45 found those that are divisible by 5 and find the sum of these numbers.
 */

if (php_sapi_name() != "cli") {
    die();
}

if (!isset($argv[1]))  die();

$arNumbers = $argv[1];
$intSumTargetNumbers = 0;

foreach($arNumbers as $intNumber) {
    if(fmod($intNumber, 5) === 0) $intSumTargetNumbers += $intNumber;
}

echo $intSumTargetNumbers;
