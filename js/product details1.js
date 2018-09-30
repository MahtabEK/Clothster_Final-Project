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
