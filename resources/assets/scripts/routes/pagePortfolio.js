export default {
  init() {
    var $container = $('.portfolio-container');

    $('.portfolio-filter a').click(function(){
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
  },
};
