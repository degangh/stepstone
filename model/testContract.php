<?php

require_once "Contract.php";
echo "<pre>";
$contract = new Contract();


$contract->fields();

$contract->findOne(24);

$contract->name = "replace a value xxxx";

var_dump($contract);

$contract->save();