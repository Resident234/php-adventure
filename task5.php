<?php
/**
 * Created by PhpStorm.
 * User: GSU
 * Date: 21.07.2019
 * Time: 9:27
 */

/*
 * You need to create an array and fill it with random numbers from 1 to 100 (f-rand). Next, calculate the product of those elements that are greater than zero and which have paired indices. After display elements that are greater than zero and which do not have a paired index.
 */

if (php_sapi_name() != "cli") {
    die();
}

$arRandNumbers = [];
foreach (range(1, 100) as $number) {
    $arRandNumbers[] = $number;
}

$arKeys = array_keys($arRandNumbers);

$arPairedKeys = [];
$arNotPairedKeys = [];

foreach ($arKeys as $key) {
    if ($key % 2 == 0) {
        $arPairedKeys[] = $key;
    } else {
        $arNotPairedKeys[] = $key;
    }
}

$intPairedKeysValuesResult = 1;
foreach ($arPairedKeys as $pairedKey) {
    $intPairedKeysValuesResult *= $arRandNumbers[$pairedKey];
}

foreach ($arNotPairedKeys as $notPairedKey) {
    echo $arRandNumbers[$notPairedKey] . "\n";
}


echo $intPairedKeysValuesResult;
