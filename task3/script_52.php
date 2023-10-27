<?php

$fruits=array("A"=>"apple","B"=>"blue","C"=>"mango","D"=>"black","E"=>"pear");
$color =array(0=>"red",1=>"green",2=>"yellow",3=>"orange",4=>"red",5=>"green");

print_r($fruits);
echo "<br>";
print_r($color);
echo "<br>";

$merge=array_merge($fruits,$color);


print_r($merge);



?>