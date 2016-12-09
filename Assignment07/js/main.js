/*
* INFO/CS 1300
* Fall 2016
* Carrie Huang
*
*/

/* establish global variables */
/*global window, document, $, jQuery*/

$(document).ready(function () {
    // pragma
    "use strict";
	
	//hide footer
    $("#hide").click(function () {
        $(footer).hide();
    });
	
	//animate car
	$("#car").click(function () {
        $("#car").animate({margin: "750px"}, 1000);
    });
	
});

//animate ghost
function ghost_animator() {
    // prgama
    "use strict";
    $("#ghost").toggle(3000); 
   
}

//set colors to greens
function setSpringTheme(){
	$("body").css("background-color", "#D8ECC3");
	$("nav").css("background-color", "#1C4905");
}

//set colors to oranges
function setFallTheme(){
	$("body").css("background-color", "#FFBD6B");
	$("nav").css("background-color", "#FF6D1E");
}