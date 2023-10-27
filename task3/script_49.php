<?php

$fruits = array("apple", "banana", "orange", "mango", "pear", "grape");
print_r($fruits);
echo "<br>";

$chunk=array_chunk($fruits,2);
print_r($chunk);
?>