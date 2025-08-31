<?php

$a = 47;
$b = 13;
$c = 89;

$largest = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);

echo $largest;
?>