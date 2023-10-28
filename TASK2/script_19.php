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
$number = $_POST['num'];
$num=0;
if($number<2){
    echo"The number is not prime";

}
for($i=1;$i<=$number;$i++)
{
    if($number%$i==0)
    $num+=1;
}
if($num>2){
    echo "The number is not prime";
}
else{
    echo "The number is prime";
}
?>