<?php

$color= array("yellow", "green", "blue", "yellow", "green");
$fruits= array("apple", "banana", "banana", "orange");
print_r($color);
print_r($fruits);

echo "<br>";

$splice = array_splice($color,2,3,$fruits);
print_r($color);
?>