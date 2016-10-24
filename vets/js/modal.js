// Get the modal
var vetka = document.getElementById('modalvetka');
var limavet = document.getElementById('modallimavet');
var wet1 = document.getElementById('modalwet1');
var primaanimalia = document.getElementById('modalprimaanimalia');
var triovet = document.getElementById('modaltriovet');
var wybor = document.getElementById('modalmiasto');



// Get the button that opens the modal
var btn = document.getElementById("vetka");
var btn2 = document.getElementById("limavet");
var btn3 = document.getElementById("wet1");
var btn4 = document.getElementById("primaanimalia");
var btn5 = document.getElementById("triovet");
var btn6 = document.getElementById("miasto");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
     switch(event.target ){
		 case vetka:vetka.style.display = "none";
		 break;
		 case limavet:limavet.style.display = "none";
		 break;
		 case wet1:wet1.style.display = "none";
		 break;
		 case primaanimalia:primaanimalia.style.display = "none";
		 break;
 		 case triovet:triovet.style.display = "none";
		 break;
		 case wybor:wybor.style.display = "none";
		 break;
		 
        
    }
}

// When the user clicks the button, open the modal
btn.onclick = function() {
	vetka.style.display = "block";
	}

btn2.onclick = function() {
	limavet.style.display = "block";
	}

btn3.onclick = function() {
	wet1.style.display = "block";
	}

btn4.onclick = function() {
	primaanimalia.style.display = "block";
	}

btn5.onclick = function() {
	triovet.style.display = "block";
	}
btn6.onclick = function() {
	wybor.style.display = "block";
}

