<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script_19</title>
    
    <form action="" method="post">
    Enter any number :<input type="number" name = 'num'>
    <input type="submit" value="submit">
    </form>
</head>
<body>
    
</body>
</html>










<?php
$num=1;

$number = $_POST['num'];
for($i=1; $i<=$number; $i++){
  $num=$num*$i; 
 
}
echo $num;



?>