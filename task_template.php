<?php
/**
 * Created by PhpStorm.
 * User: GSU
 * Date: 21.07.2019
 * Time: 9:27
 */

/*
 *
 */

if (php_sapi_name() != "cli") {
    die();
}

if (!isset($argv[1]))  die();
if (!isset($argv[2]))  die();

$choice = $argv[1];
$number = $argv[2];

echo substr_count($choice, $number);
