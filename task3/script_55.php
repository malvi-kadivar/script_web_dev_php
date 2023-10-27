<?php

$fruits=array("A"=>"apple","B"=>"blue","C"=>"apple","D"=>"black","E"=>"pear","f"=>"orange");

$first  = array_key_first($fruits);
print_r($first);
echo "<br>";
$last  = array_key_last($fruits);
print_r($last);
echo "<br>";



?>