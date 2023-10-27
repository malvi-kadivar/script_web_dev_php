<?php
  function add($value,$value1)
{
	return ($value.'-'.$value);
}
 $array= array("hello","every","set","hope");
  echo"Defualt array";
  print_r($arrayy);
  echo"<br>";
  print_r(array_reduce($arrayy,"add","newString"));
?>