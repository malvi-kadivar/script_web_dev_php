<?php

function add($value)
{
	return ($value+5);
}
$array= array(4,6,8,97,100);
echo "Default arrayy";
print_r($array);

echo"<br>";

echo"The array after calling the function";
 print_r(array_map("add",$arrayy));
?>