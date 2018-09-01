export default {
  init() {
    $('#customers').owlCarousel({
      rtl: true,
      loop:true,
      margin:10,
      nav:true,
      responsive:{
        0:{
          items:1,
        },
        600:{
          items:5,
        },
        1000:{
          items:5,
        },
      },
    });

    var $container = $('.portfolio-container');

    $('.portfolio-filter a').click(function() {
      $('.portfolio-filter .current').removeClass('current');
      $(this).addClass('current');

      var selector = $(this).attr('data-filter');
      $container.isotope({
        isOriginLeft: false,
        filter: selector,
        animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false,
        },
      });
      return false;
    });

    $('.portfolio-filter a:first-child').trigger('click');
    $('.portfolio-filter a:first-child').trigger('click');
  },
  finalize() {
    var $container = $('.portfolio-container');

    $('.portfolio-filter a').click(function() {
      $('.portfolio-filter .current').removeClass('current');
      $(this).addClass('current');

      var selector = $(this).attr('data-filter');
      $container.isotope({
        isOriginLeft: false,
        filter: selector,
        animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false,
        },
      });
      return false;
    });

    $('.portfolio-filter a:first-child').trigger('click');
    $('.portfolio-filter a:first-child').trigger('click');
  },
};
