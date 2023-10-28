 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script_18</title>
    <form action="" method='post'>
        Guess any number from 1-10:<input type="number" name='num'>
        <input type="submit" value='submit'>
    </form>
 </head>
 <body>
    
 </body>
 </html>
 <?php
 $i = $_POST['num'];
 $j=rand(1,10);
 if($i>10){
    echo "Invalid Number";
 }
 elseif($i==$j){
    echo "You guessed the number correctly ";
 }
 else{
    echo "You guessed the number incorrectly. The number was $j";
 }
 ?>