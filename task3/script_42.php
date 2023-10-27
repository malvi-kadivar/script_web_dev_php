<?php

$color = array("red", "green", "blue", "b1ack", "white");
$fruits = array("apple", "blue", "mengo", "black", "pear");
print_r($color);
echo "<br>";
print_r($fruits);
echo "<br>";
$differences=array_diff($fruits,$color);
print_r($differences);
?>