//menu toggle //


// Begin: ScrollReveal //
ScrollReveal().reveal('#first-section-home h2', {
    origin: 'right',
    delay: 375,
    duration: 500,
    reset: true,
    easing: 'ease-in-out',
    distance: '120px',
});

ScrollReveal().reveal('.headline', {
    origin: 'top',
    delay: 300,
    duration: 500,
    reset: true,
    easing: 'ease-in',
    distance: '120px',
});

ScrollReveal().reveal('.subheadline', {
    origin: 'right',
    delay: 800,
    duration: 850,
    reset: true,
    easing: 'ease-in',
    distance: '150px',
});

ScrollReveal().reveal('.btn-primary', {
    origin: 'left',
    delay: 1000,
    duration: 1000,
    reset: true,
    easing: 'ease-in',
    distance: '150px',
});

ScrollReveal().reveal('.section-title h2', {
    origin: 'left',
    delay: 375,
    duration: 500,
    reset: true,
    easing: 'ease-in-out',
    distance: '120px',
});


ScrollReveal().reveal('#about-first h2', {
    origin: 'right',
    delay: 375,
    duration: 700,
    reset: true,
    easing: 'ease-in-out',
    distance: '250px',
});

ScrollReveal().reveal('#about-second h2', {
    origin: 'right',
    delay: 375,
    duration: 700,
    reset: true,
    easing: 'ease-in-out',
    distance: '250px',
});

ScrollReveal().reveal('#about-banner-container img', {
    origin: 'left',
    delay: 350,
    duration: 500,
    reset: true,
    distance: '150px',
});

ScrollReveal().reveal('#about-banner-container h1', {
    origin: 'right',
    delay: 300,
    duration: 500,
    reset: true,
    distance: '150px',
});

ScrollReveal().reveal('.content .main-content .recent-post-title',{
    origin: 'right',
    delay: 375,
    duration: 700,
    reset: true,
    easing: 'ease-in-out',
    distance: '250px',
})

$('.post-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]


});
//End: ScrollReveal  //

document.addEventListener('.fa-chevron-down', function(e) {
  
})