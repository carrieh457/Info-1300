/*
* INFO/CS 1300
* Fall 2016
* Carrie Huang
*/

/* establish global variables */
/*global window, document*/

var index = 0; 
var landscape_images = ["shanghai.JPG", "qingdao_beach.JPG", "qingdao_boat.JPG", "beijing_yiheyuan.JPG"];
//image credit of all photos: Carrie Huang
var image_captions = ["Taken at Shanghai, China 2015", "Taken at the beaches of Qingdao, China 2015", "A boat at the beaches of Qingdao, China 2015", "Taken at Yi He Yuan at Beijing, China 2015"]

window.onload = function date_and_season() {
    "use strict";
    // variables
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        // get pieces of date
        full_date = new Date(),
        this_month_text = monthNames[full_date.getMonth()],
        // this_month_text = "March",
        today = full_date.getDate(),
        this_year = full_date.getFullYear(),
        // set information up for insertion into DOM tree
        new_span = document.createElement('span'),
        new_text = document.createTextNode(today  + ', ' + this_month_text + ' ' + this_year),
        position = document.getElementsByTagName('footer')[0];
    // append date to footer
    new_span.appendChild(new_text);
    position.appendChild(new_span);
};

//Function for the Next Button
function image_forward(){
    "use strict";
	var main_image = document.getElementById('landscape_image');

	if(index == (landscape_images.length - 1)){
		index = 0;
		main_image.src = 'images/' + landscape_images[index];
		main_caption = image_captions[index];
	}
	
	else{ 
		index += 1;
		main_image.src = 'images/' + landscape_images[index]; 
		main_caption = image_captions[index];
	}
}

//Function for the Previous Button
function image_previous(){
    "use strict";
	var main_image = document.getElementById('landscape_image');
	
	if(index == 0){
		index = landscape_images.length-1;
		main_image.src = 'images/' + landscape_images[index];	
		main_caption = image_captions[index];
	}
	
	else{ 
		index -= 1; 
		main_image.src = 'images/' + landscape_images[index]; 
		main_caption = image_captions[index];
	}
}
	
