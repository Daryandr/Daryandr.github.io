var slideIndex = 1;
var sl1,sl2,sl3,sl4,sl5,sl6,sl7,sl8,sl9,sl10;
var d1,d2,d3,d4,d5,d6,d7,d8,d9,d10;

function start() {
    sl1 = document.querySelectorAll("#sl1");
    sl2 = document.querySelectorAll("#sl2");
    sl3 = document.querySelectorAll("#sl3");
    sl4 = document.querySelectorAll("#sl4");
    sl5 = document.querySelectorAll("#sl5");
    sl6 = document.querySelectorAll("#sl6");
    sl7 = document.querySelectorAll("#sl7");
    sl8 = document.querySelectorAll("#sl8");
    sl9 = document.querySelectorAll("#sl9");
    sl10 = document.querySelectorAll("#sl10");
    d1 = document.querySelectorAll("#sld1");
    d2 = document.querySelectorAll("#sld2");
    d3 = document.querySelectorAll("#sld3");
    d4 = document.querySelectorAll("#sld4");
    d5 = document.querySelectorAll("#sld5");
    d6 = document.querySelectorAll("#sld6");
    d7 = document.querySelectorAll("#sld7");
    d8 = document.querySelectorAll("#sld8");
    d9 = document.querySelectorAll("#sld9");
    d10 = document.querySelectorAll("#sld10");
    def(1, slideIndex);
    def(2, slideIndex);
    def(3, slideIndex);
    def(4, slideIndex);
    def(5, slideIndex);
    def(6, slideIndex);
    def(7, slideIndex);
    def(8, slideIndex);
    def(9, slideIndex);
    def(10, slideIndex);
}

function plusSlide(n) {
    def(n, slideIndex += 1);
}

function minusSlide(n) {
    def(n, slideIndex -= 1);
}

function def(n,k) {
    switch (n) {
        case 1: showSlides(k, sl1, d1);
            break;
        case 2: showSlides(k, sl2, d2);
            break;
        case 3: showSlides(k, sl3, d3);
            break;
        case 4: showSlides(k, sl4, d4);
            break;
        case 5: showSlides(k, sl5, d5);
            break;
        case 6: showSlides(k, sl6, d6);
            break;
        case 7: showSlides(k, sl7, d7);
            break;
        case 8: showSlides(k, sl8, d8);
            break;
        case 9: showSlides(k, sl9, d9);
            break;
        case 10: showSlides(k, sl10, d10);
            break;
    }
}

function currentSlide(n, n2) {
    def(n2, slideIndex = n);
}

function showSlides(n,slides,dots) {
    var i;
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}