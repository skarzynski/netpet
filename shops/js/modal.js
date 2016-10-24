// Get the modal
var zoolus = document.getElementById('modalzoolus');
var animals2 = document.getElementById('modalanimals2');
var fourpet = document.getElementById('modalfourpet');
var sumatra = document.getElementById('modalsumatra');
var animals = document.getElementById('modalanimals');
var zoopupil = document.getElementById('modalzoopupil');
var akwarystyka = document.getElementById('modalakwarystyka');
var	pologar = document.getElementById('modalpologar');
var wybor = document.getElementById('modalmiasto');

// Get the button that opens the modal
var btn = document.getElementById("zoolus");
var btn2 = document.getElementById("animals2");
var btn3 = document.getElementById("fourpet");
var btn4 = document.getElementById("sumatra");
var btn5 = document.getElementById("animals");
var btn6 = document.getElementById("zoopupil");
var btn7 = document.getElementById("akwarystyka");
var btn8 = document.getElementById("pologar");
var btn9 = document.getElementById("miasto");
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
     switch(event.target ){
		 case zoolus:zoolus.style.display = "none";
		 break;
		 case animals2:animals2.style.display = "none";
		 break;
		 case fourpet:fourpet.style.display = "none";
		 break;
		 case sumatra:sumatra.style.display = "none";
		 break;
 		 case animals:animals.style.display = "none";
		 break;
		 case zoopupil:zoopupil.style.display = "none";
		 break;
		 case akwarystyka:akwarystyka.style.display = "none";
		 break;
 		 case pologar:pologar.style.display = "none";
		 break;
		 case wybor:wybor.style.display = "none";
		 break;
        
    }
}

// When the user clicks the button, open the modal
btn.onclick = function() {
	zoolus.style.display = "block";
	}

btn2.onclick = function() {
	animals2.style.display = "block";
	}

btn3.onclick = function() {
	fourpet.style.display = "block";
	}

btn4.onclick = function() {
	sumatra.style.display = "block";
	}

btn5.onclick = function() {
	animals.style.display = "block";
	}
btn6.onclick = function() {
	zoopupil.style.display = "block";
	}

btn7.onclick = function() {
	akwarystyka.style.display = "block";
	}

btn8.onclick = function() {
	pologar.style.display = "block";
	}
btn9.onclick = function() {
	wybor.style.display = "block";
}












