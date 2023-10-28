<?php
$a=44;
$b=95;
$c=10;
echo "<font color='green' size=7><b>";
if($a>$b && $a>$c )
{
    echo "$a is largest Number.";
}
elseif($b>$a && $b>$c)
{
    echo "$b is largest Number.";
}
else
{
    echo "$c is largest Number.";
}
echo "</b></font>";
?>
