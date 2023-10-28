<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Script_15">
    <form action="" method="post">
           num1 <input type="number" name="num1"><br/>
<br/>
           num2 <input type="number" name="num2"><br/>
<br/>     
           num3 <input type="number" name="num3"><br/>
<br/>
           <input type="submit" value="largest number">
    </form>
</head>
<body>
    
</body>
</html>

<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];
if($num1>$num2 && $num1>$num3 )
{
    echo "$num1 is greatest.";
}
elseif($num2>$num1 && $num2>$num3)
{
    echo "$num2 is greatest.";
}
else
{
    echo "$num3 is greatest.";
}
?>