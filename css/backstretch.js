jQuery(document).ready(function($) {
  $.backstretch(
    "http://unshapedahead.com/wp-content/themes/vryzas/imgs/back.jpg",
    {
      centeredX: false
    }
  );

  // Centers album's image
  $("img").addClass("mx-auto d-block");

  $(".section-right").addClass("text-center");
});
