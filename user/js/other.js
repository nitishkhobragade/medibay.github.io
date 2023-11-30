//slideshow container

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}


function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}
</script>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


function checkpassword1() {
  var x = document.getElementById("mypass1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function checkpassword2() {
  var x = document.getElementById("mypass2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
var input = document.getElementById("mypass1");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});

var input = document.getElementById("mypass2");
var text = document.getElementById("text2");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});

       var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal.style.display = "none";
            }
        }
		
	var modal = document.getElementById('id02');
        window.onclick = function(event) {
            if (event.target == modal2) 
                modal2.style.display = "none";
            }
        }
		
		
$(function() {
    $('#text-search').bind('keyup change', function(ev) {
        // pull in the new value
        var searchTerm = $(this).val();

        // remove any old highlighted terms
        $('body').removeHighlight();

        // disable highlighting if empty
        if ( searchTerm ) {
            // highlight the new term
            $('body').highlight( searchTerm );
        }
    });
});