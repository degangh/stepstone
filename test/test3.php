<?php

$a = array();
var_dump($a);
var_dump(empty($a));
var_dump(isset($a));
var_dump(is_null($a));

unset($a);
echo "****\n";
var_dump($a);
var_dump(empty($a));
var_dump(isset($a));
var_dump(is_null($a));
