// Get the modal

var wybor = document.getElementById('modalmiasto');



// Get the button that opens the modal

var btn6 = document.getElementById("miasto");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
     switch(event.target ){
		 case wybor:wybor.style.display = "none";
		 break;
		 
        
    }
}
btn6.onclick = function() {
	wybor.style.display = "block";
}

