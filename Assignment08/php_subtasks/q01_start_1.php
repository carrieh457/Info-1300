<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 1
*
*/

// variables
$i; // counter variable
$key; // holder variable for array
$value; // holder variable for array
$plain_array = array(1,2,3,"four");
$assoc_array = array("Brady"=>12, "Blount"=>29, "Garropolo"=>10);

echo "Loop 1:". "<br>";

function for_print(){
	
    for ($i = 0; $i < sizeof($plain_array); $i++) {
        echo "i: $plain_array[$i] <br>";
    }
}

for_print(); 
echo "<br>";

echo "Loop 2:". "<br>";

function foreach_print(){
	
	foreach ($plain_array as $value) {
        echo "value: $value <br>";
    }
}

foreach_print(); 
echo "<br>";

echo "Loop 3:". "<br>";

function type(){
	
	for ($i = 0; $i < sizeof($plain_array); $i++) {
        
		if(is_int($plain_array[$i])){
			echo "value: $plain_array[$i] <br>";
		}
    }
}

type(); 
echo "<br>";

echo "Loop 4:". "<br>";

function assoc_print(){
	
	foreach ($assoc_array as $key => $value) {
        echo "$key: $value <br>";
    }
}

assoc_print(); 
echo "<br>";

?>