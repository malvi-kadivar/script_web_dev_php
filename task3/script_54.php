<?php

$name=array(array('rollno'  =>1,'name'=>"jonny",'age'=>22,),
            array('rollno'  =>2,'name'=>"ronny",'age'=>20,),
            array('rollno'  =>3,'name'=>"hanny",'age'=>25,));

$student=array_column($name,'name');
print_r($student);            



?> 