function loginFunc() {
    document.getElementById('myModal').style.display = "block";
}

function closeFunc(){
    document.getElementById('myModal').style.display = "none";
}

function memberFunc() {
    document.getElementById('myModal1').style.display = "block";
}

function closeFunc1(){
    document.getElementById('myModal1').style.display = "none";
}

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

function registerFunc(){
    var username;
    var password;
    username= document.getElementById("phone_email_field1").value;
    password= document.getElementById("password_field1").value;

}