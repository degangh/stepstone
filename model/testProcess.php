<?php

require_once 'Process.php';

$p1 = new Process($db="test");
$p2 = new Process($db="", 5);
echo "<pre>";
var_dump($p1);
var_dump($p2);
var_dump($p2->name);