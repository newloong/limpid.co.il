export default {
  init() {
    $('.portal-article').owlCarousel({
      rtl: true,
      loop:true,
      margin:10,
      nav:true,
      dots: false,
      responsive:{
        0:{
          items:1,
        },
        600:{
          items:3,
        },
        1000:{
          items:3,
        },
      },
    });

    $('#featured-article-container').owlCarousel({
      autoplay: true,
      rtl: true,
      loop:true,
      margin:10,
      nav:false,
      responsive:{
        0:{
          items:1,
        },
        600:{
          items:1,
        },
        1000:{
          items:1,
        },
      },
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
