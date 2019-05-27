$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    items: 1,
    dots: true,
    loop: true,
    autoplay : 2000,
  });
});


$('.main-nav').stellarNav({
    position: 'left',
    closeLabel: 'Fermer',
    breakpoint: 991,
  });
