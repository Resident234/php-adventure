<?php
/**
 * Created by PhpStorm.
 * User: GSU
 * Date: 21.07.2019
 * Time: 9:27
 */

/*
 * You need to develop a program that would count the number of occurrences of a particular number of your choice in the number of your choice. For example: the number 5 in the number 442158755745 occurs 4 times
 */

if (php_sapi_name() != "cli") {
    die();
}

if (!isset($argv[1]))  die();
if (!isset($argv[2]))  die();

$choice = $argv[1];
$number = $argv[2];

echo substr_count($choice, $number);
