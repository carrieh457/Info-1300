<?php
/*
* Carrie Huang
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

echo "Loop 1:"."</br>";

/*A for loop that iterates through $plain_array using the variable $i
and prints all of the array’s values.*/
for ($i = 0; $i < sizeof($plain_array); $i++) {
	echo "i: ".$plain_array[$i]."</br>";
}

echo "</br>";
echo "</br>";
echo "</br>";

echo "Loop 2:"."<br>";

/*A for-each loop that iterates through $plain_array and prints all of 
the array’s values.*/
foreach ($plain_array as $value) {
	echo "value: ".$value."</br>";
}
 
echo "</br>";
echo "</br>";
echo "</br>";

echo "Loop 3:"."</br>";

/*A loop that iterates through $plain_array, tests each value to determine if it is an integer or a string and 
prints only the integer-valued elements of the array.*/
for ($i = 0; $i < sizeof($plain_array); $i++) {
	
	if(is_int($plain_array[$i])){
		echo "value: ".$plain_array[$i]."</br>";
	}
}

echo "</br>";
echo "</br>";
echo "</br>";

echo "Loop 4:"."<br>";

/*A loop that iterates through the associate array $assoc_array and 
prints all of its keys and values.*/
foreach ($assoc_array as $key => $value) {
	echo $key.": ".$value."</br>";
    }

echo "</br>";

?>