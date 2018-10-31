jQuery(document).ready(function($) {
  $.backstretch(
    "http://localhost/Wordpress/wp/wp-content/themes/vryzas/imgs/back.jpg",
    {
      centeredX: false
    }
  );

  // Centers album's image
  $("img").addClass("mx-auto d-block");

  $(".section-right").addClass("text-center");
});
