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
