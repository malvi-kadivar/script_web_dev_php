<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script_16</title>
    <form action="" method='post'>
        Enter a Sentence :<input type="text" name = 'sentence'>
        <input type="submit" value= 'find vowels no.'>
    </form>
</head>
<body>
    
</body>
</html>

<?php
$sentence = $_POST['sentence'];
$sentence= strtolower($sentence); //for making the lower case value in the sentence
$vowels = ['a','e','i','o','u']; //array
$vowels_NO = 0;
for($i=0; $i<=strlen($sentence);$i++){
     $char = $sentence[$i];
     if(in_array($char,$vowels)){   // comparing the character in the sentence to vowels
        $vowels_NO++;
     }

}
echo "The Number of Vowels in this sentence is $vowels_NO";
?>