<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/1/2015
 * Time: 7:36 PM
 */
require __DIR__ . '/../vendor/autoload.php';
$b = new \Reverse_a_String\Reverser();
$s = $b->changeString(new \Reverse_a_String\String("Hello"));
echo $s->getModString();