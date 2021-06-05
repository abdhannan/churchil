(function ($) {
  $(".slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: $(".prev-event"),
    nextArrow: $(".next-event"),
  });
})(jQuery);

(function ($) {
  $(".slider-news").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: $(".prev-news"),
    nextArrow: $(".next-news"),
  });
})(jQuery);
