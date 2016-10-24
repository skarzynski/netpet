// Get the modal
var labus = document.getElementById('modallabus');
var pieskistyl = document.getElementById('modalpieskistyl');
var york = document.getElementById('modalyork');
var roxi = document.getElementById('modalroxi');
var pupil = document.getElementById('modalpupil');
var wybor = document.getElementById('modalmiasto');

// Get the button that opens the modal
var btn = document.getElementById("labus");
var btn2 = document.getElementById("pieskistyl");
var btn3 = document.getElementById("york");
var btn4 = document.getElementById("roxi");
var btn5 = document.getElementById("pupil");
var btn6 = document.getElementById("miasto");
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
     switch(event.target ){
		 case labus:labus.style.display = "none";
		 break;
		 case pieskistyl:pieskistyl.style.display = "none";
		 break;
		 case york:york.style.display = "none";
		 break;
		 case roxi:roxi.style.display = "none";
		 break;
 		 case pupil:pupil.style.display = "none";
		 break;
		 case wybor:wybor.style.display = "none";
		 break;
        
    }
}

// When the user clicks the button, open the modal
btn.onclick = function() {
	labus.style.display = "block";
	}

btn2.onclick = function() {
	pieskistyl.style.display = "block";
	}

btn3.onclick = function() {
	york.style.display = "block";
	}

btn4.onclick = function() {
	roxi.style.display = "block";
	}

btn5.onclick = function() {
	pupil.style.display = "block";
	}
btn6.onclick = function() {
	wybor.style.display = "block";
}





		 

