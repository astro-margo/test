<?php

require "./sum.php";

$arg1 = readline("arg1: ");
$arg2 = readline("arg2: ");

$res = sum($arg1, $arg2);

echo "res: $res";