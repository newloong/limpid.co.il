export default {
  init() {
    var $container = $('.portfolio-container');
    $container.isotope({
      filter: '*',
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false,
      },
    });

    $('.portfolio-filter a').click(function(event) {
      event.preventDefault();
      $('.portfolio-filter .current').removeClass('current');
      $(this).addClass('current');

      var selector = $(this).attr('data-filter');
      $container.isotope({
        filter: selector,
          animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
          },
        });
        return false;
    });
  },
};
