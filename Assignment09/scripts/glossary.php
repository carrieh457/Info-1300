<?php
/*
* Carrie Huang
* INFO/CS 1300
* Fall 2016
*
*
*/
// initialize empty, global arrays

$archery_data = array();
$archery_info = array();

//functions
//read the cvs file and put into 2D array 
function get_data() {
    // read file into an array, return the array
    $data = array_map('str_getcsv', file("data/archery_terms.csv", FILE_IGNORE_NEW_LINES));
    return $data;
}

//convert the 2D array into an associative array and sort by keys
function array_sort($archery_data){
	
	$archery_terms = array(); 
	
	for ($i = 0; $i < sizeof($archery_data); $i++){
		for($j = 0; $j < sizeof($archery_data[$i]); $j++){
			if($j%2 == 0){
				$archery_terms[$archery_data[$i][$j]] = $archery_data[$i][$j+1]; 
			}
		}
	}
	
	ksort($archery_terms); 
	return $archery_terms;
}

// create a dl list from the sorted array
function archery_dllist($archery_info) {
	
	echo "<dl>"; 
	
    foreach ($archery_info as $term => $definition) {
        echo "<dt>".$term."</dt>"."<dd>".$definition."</dd>";
    }
    
	echo "</dl>"; 
}

$archery_data = get_data(); 
$archery_info = array_sort($archery_data);
archery_dllist($archery_info);
?>