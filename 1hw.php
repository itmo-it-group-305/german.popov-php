<?php
/**
 * Created by PhpStorm.
 * User: gerch
 * Date: 12.01.16
 * Time: 16:06
 */
$year = 1941;
$check = ($year % 400 == 0 ? true : ($year % 100 == 0 ? false : ($year % 4 == 0 ? true : false)));
var_dump($check);

