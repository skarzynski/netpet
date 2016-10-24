// Get the modal
var hotel = document.getElementById('modalhotel');
var wybor = document.getElementById('modalmiasto');



// Get the button that opens the modal
var btn = document.getElementById("zoohotel");
var btn2 = document.getElementById("miasto");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
     switch(event.target ){
		 case hotel:hotel.style.display = "none";
		 break;
		 case wybor:wybor.style.display = "none";
		 break;

		 
        
    }
}

// When the user clicks the button, open the modal
btn.onclick = function() {
	hotel.style.display = "block";
	}
btn2.onclick = function() {
	wybor.style.display = "block";
}







		 




