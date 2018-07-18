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
  },
  finalize() {
  },
};
