<?php
//15.Create a multidimensional array to store information about movies, including title, director, and  release year for at least two movies. Display the information for one of the movies.

 $movies =array(
    array("Title"=>"M.S.Dhoni The Untold Story",
        "Director"=>"Neeraj Pandey",
        "Release_Date"=>"2016"),
        array("Title"=>"Shidat",
        "Director"=>"Kunal Deshmukh",
        "Release_Date"=>"2021")    
 );
 print_r($movies[1]);

?>