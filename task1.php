<?php
/**
 * Created by PhpStorm.
 * User: GSU
 * Date: 21.07.2019
 * Time: 9:27
 */

/*
 * You need to develop a program that would count the sum of digits of the number entered by the user. For example: there is the number 123, then the program should calculate the sum of the digits 1, 2, 3, i.e. 6.
 */

if (php_sapi_name() != "cli") {
    die();
}

if (!isset($argv[1]))  die();

echo array_sum(str_split($argv[1]));
