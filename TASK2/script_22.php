<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            form{color:blue;
                 background-color: lightpink;
                 font-size:20px;
                }
            
            body{
                color:red;
                background-color: lightpink;
                font-size:30px;                
                }
    </style>
    <form action="" method="post">
        <b>Radius of Circle</b> <input type="number" name="radius" size="30"> <br>
        <br>
    </form>    
</head>
<body>
    
<?php
$radius=$_POST['radius'];
$pi=3.14;
$area=$pi*$radius*$radius;
echo "Area = " . " $pi*$radius*$radius";
echo "<br/>";
echo "<b>Area of Circle is $area. </b>";
?>
    
</body>
</html>
