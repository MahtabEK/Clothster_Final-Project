function myFunction() {
    var x = document.getElementById("select_box");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function optionSelection(n){
	if (n==1){
		myOption = "محبوب ترین";
	}
	else if (n==2){
		myOption = "جدیدترین";
	}
	else {
		myOption = "پرفروش ترین";
	}
	
	document.getElementById("sort_menu").innerHTML = myOption;
	document.getElementById("select_box").style.display = "none";
}


function minus_function(){
	document.getElementsByClassName("searc_right_box_rest")[0].style.display = "none";
	document.getElementsByClassName("search_right_box_minus1")[0].style.display = "none";
	document.getElementsByClassName("search_right_box_plus1")[0].style.display = "block";
}

function plus_function(){
	document.getElementsByClassName("searc_right_box_rest")[0].style.display = "block";
	document.getElementsByClassName("search_right_box_minus1")[0].style.display = "block";
	document.getElementsByClassName("search_right_box_plus1")[0].style.display = "none";
}

function minus_function2(){
	document.getElementsByClassName("searc_right_box_rest")[1].style.display = "none";
	document.getElementsByClassName("search_right_box_minus1")[1].style.display = "none";
	document.getElementsByClassName("search_right_box_plus1")[1].style.display = "block";
}

function plus_function2(){
	document.getElementsByClassName("searc_right_box_rest")[1].style.display = "block";
	document.getElementsByClassName("search_right_box_minus1")[1].style.display = "block";
	document.getElementsByClassName("search_right_box_plus1")[1].style.display = "none";
}

function minus_function3(){
	document.getElementsByClassName("searc_right_box_rest")[2].style.display = "none";
	document.getElementsByClassName("search_right_box_minus1")[2].style.display = "none";
	document.getElementsByClassName("search_right_box_plus1")[2].style.display = "block";
}

function plus_function3(){
	document.getElementsByClassName("searc_right_box_rest")[2].style.display = "block";
	document.getElementsByClassName("search_right_box_minus1")[2].style.display = "block";
	document.getElementsByClassName("search_right_box_plus1")[2].style.display = "none";
}


function search_arrow_function1(){
	document.getElementById("searc_right_box_rest_title2").style.top = "55%";
	document.getElementById("search_arrow2").style.top = "65%";
	
	document.getElementById("searc_right_box_rest_title3").style.top = "76%";
	document.getElementById("search_arrow3").style.top = "86%";
	
	document.getElementById("searc_right_box_rest_title4").style.top = "94%";
	document.getElementById("search_arrow4").style.top = "104%";
	
	document.getElementById("searc_right_box_rest_title5").style.top = "116%";
	document.getElementById("search_arrow5").style.top = "126%";
	
	
	document.getElementById("search_right_box_rest_inner").style.display = "block";
	document.getElementsByClassName("search_arrow")[0].style.display = "none";
	document.getElementById("up_replace").style.display = "block";
}

function up_replace_function1(){
	document.getElementById("searc_right_box_rest_title2").style.top = "10%";
	document.getElementById("search_arrow2").style.top = "20%";
	
	document.getElementById("searc_right_box_rest_title3").style.top = "31%";
	document.getElementById("search_arrow3").style.top = "41%";
	
	document.getElementById("searc_right_box_rest_title4").style.top = "52%";
	document.getElementById("search_arrow4").style.top = "62%";
	
	document.getElementById("searc_right_box_rest_title5").style.top = "73%";
	document.getElementById("search_arrow5").style.top = "83%";
	
	
	document.getElementById("search_right_box_rest_inner").style.display = "none";
	document.getElementsByClassName("search_arrow")[0].style.display = "block";
	document.getElementById("up_replace").style.display = "none";
}

/**********************/
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}















