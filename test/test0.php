<?php
$str = "Hello World Wide Web";

echo $str;

$arr = str_split($str);

var_dump($arr);

var_dump(array_filter($arr));

echo "******<br/>";

$array = array(
  "a" => 3,
  "b" => 5,
  "c" => "E",
  "d" => "F",
  "e" => "E"
);

var_dump(array_filter($array, function($value, $key)
  {
    echo $value ;
  },
  ARRAY_FILTER_USE_BOTH
));

var_dump("F" > 3);
