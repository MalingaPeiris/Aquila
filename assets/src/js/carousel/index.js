(function ($) {
  class SlickCarousel {
    constructor() {
      this.initiateCarousel();
    }
    initiateCarousel() {
        $(".posts-carousel").slick({
            autoplay: true,
            autoplaySpeed:1000,
      });
    }
  }
  new SlickCarousel();
})(jQuery);
