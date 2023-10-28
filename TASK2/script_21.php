<?php

    $num=121;
    $temp=$num;
    $r=0;
    while(floor($num))
    {
    $r=$temp%10;
    $num1=$temp/10;
    $sum=$num1*10+$r;
    }
   
if($num==$sum){
    echo "$sum is palidrome ";
}
else
{
    echo "$sum is not palidrome";
}

?>
