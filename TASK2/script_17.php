<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script_17</title>
    <link rel="stylesheet" href="script_17.php">
    <form action="" method="post">
    Enter the year :<input type="number" name = 'year'>
    <input type="submit" value="submit">
    </form>
</head>
<body>
    
</body>
</html>










<?php
$year = $_POST['year'];
if($year % 400 == 0){
    echo "$year is a leap year";
}
elseif($year % 100 == 0){
    echo "$year is  not a leap year";
}
elseif($year % 4 == 0){
    echo "$year is a leap year";
}
else{
    echo "$year is not a leap year";
}
?>