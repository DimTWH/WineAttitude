/*require('./bootstrap');
$(document).ready(function() {
    $(".menu-icon").on("click", function() {
        $("nav ul").toggleClass("showing");
    });
});
// Scrolling Effect
$(window).on("scroll", function() {
    if($(window).scrollTop()) {
        $('nav').addClass('black');
    }

    else {
        $('nav').removeClass('black');
    }
})


*/

window.addEventListener("scroll", function () {
    var nav = document.querySelector('nav');
    nav.classList.toggle('.black');
});





const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.menu');
    const navlinks = document.querySelectorAll('.menu li')

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
    })
    navlinks.forEach((link, index) => {
        link.style.animation = `navLinkFade 0.3s ease forwards ${index / 7 + 1.15}s`;
    })
}

navSlide();
