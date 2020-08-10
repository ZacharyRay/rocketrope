jQuery(document).ready(function($) {

// ACF elements:

    // Hero

    $('.carousel').flickity({
        // options
        cellAlign: 'center',
        contain: true,
        selectedAttraction: 0.3,
        friction: 0.9,
        prevNextButtons: true,
        lazyLoad: 2,
        autoPlay: true,
        autoPlay: 4000,
        imagesLoaded: true,
      });
    
    // scroll arrow

    $(window).scroll(function() {
      if ($(this).scrollTop() > 0) {
        $('#arrowdown, #scroll').fadeOut();
      } else {
        $('#arrowdown, #scroll').fadeIn();
      }
    });

    // shop

$(document).ready(function () {
  //initialize swiper when document ready
  var swiper = new Swiper ('.swiper-container', {
    // Optional parameters
    effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  slideToClickedSlide: 'true',
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 500,
    modifier: 1,
    slideShadows : true,
  },
  autoplay: {
    delay: 5000,
    

 
  },
  })
});
      
});

