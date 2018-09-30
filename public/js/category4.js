var slideIndex3 = 1;
showSlides3(slideIndex3);

function plusSlides3(n3) {
    showSlides3(slideIndex3 += n3);
}

function currentSlide3(n3) {
    showSlides3(slideIndex3 = n3);
}

function showSlides3(n3) {
    var i3;
    var slides3 = document.getElementsByClassName("mySlides3");
    if (n3 > slides3.length) {
        slideIndex3 = 1
    }
    if (n3 < 1) {
        slideIndex3 = slides3.length
    }
    for (i3 = 0; i3 < slides3.length; i3++) {
        slides3[i3].style.display = "none";
    }
    slides3[slideIndex3 - 1].style.display = "block";
}