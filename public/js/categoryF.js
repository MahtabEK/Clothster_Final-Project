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


/**/
var slideIndex1 = 1;
showSlides1(slideIndex1);

function plusSlides1(n1) {
    showSlides1(slideIndex1 += n1);
}

function currentSlide1(n1) {
    showSlides1(slideIndex1 = n1);
}

function showSlides1(n1) {
    var i1;
    var slides1 = document.getElementsByClassName("mySlides1");
    if (n1 > slides1.length) {slideIndex1 = 1}
    if (n1 < 1) {slideIndex1 = slides1.length}
    for (i1 = 0; i1 < slides1.length; i1++) {
        slides1[i1].style.display = "none";
    }
    slides1[slideIndex1-1].style.display = "block";
}

/**/
var slideIndex12 = 1;
showSlides12(slideIndex12);

function plusSlides12(n12) {
    showSlides12(slideIndex12 += n12);
}

function currentSlide12(n12) {
    showSlides12(slideIndex12 = n12);
}

function showSlides12(n12) {
    var i12;
    var slides12 = document.getElementsByClassName("mySlides12");
    if (n12 > slides12.length) {slideIndex12 = 1}
    if (n12 < 1) {slideIndex12 = slides12.length}
    for (i12 = 0; i12 < slides12.length; i12++) {
        slides12[i12].style.display = "none";
    }
    slides12[slideIndex12-1].style.display = "block";
}
