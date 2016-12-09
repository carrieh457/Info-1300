<?php
/*
* Carrie Huang
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 2
*
*/

// variables
$i; // counter variable
$j; // counter variable
$k; // counter variable
$temp_num; // holder for random value
$number_array = []; // array of random integers 1-5
$high_array = []; // integers from $number_array greater than 3

function make_randoms($arr1){
	for($i = 0; $i < 10; $i++) {
		$temp_num=rand(1, 5);
		array_push($arr1, $temp_num);
	}
	
	for ($j = 0; $j < sizeof($arr1); $j++) {
        echo $j.": ".$arr1[$j]."</br>";
    }
	
	return $arr1; 
}

function get_and_sort($arr2){
	$arr = make_randoms($arr2); 
	echo "</br>";
	
	for($k = 0; $k < sizeof($arr); $k++){
		if($arr[$k] > 3){
			echo $k.": ".$arr[$k]."</br>"; 
		}
	}
	return $arr2; 
}

get_and_sort($number_array); 

?>