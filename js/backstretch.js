jQuery(document).ready(function($) {
  // $.backstretch(
  //   "http://localhost/Wordpress/wp/wp-content/themes/vryzas/imgs/back.jpg",
  //   {
  //     centeredX: false
  //   }
  // );

  // Centers album's image
  $("img").addClass("mx-auto d-block");

  $(".section-right").addClass("text-center");

  $("#menu-item-8").click(function(event) {
    event.preventDefault();
    console.log("NEWS Clicked");

    var url =
      "http://localhost/Wordpress/wp/wp-content/themes/vryzas/news-page.php";

    $.ajax({
      type: "GET",
      url: url,
      success: function(response) {
        $("article").empty();
        $("article").html(response);
        return false;
      }
    });

    return false;
  });

  $("#menu-item-11").click(function(event) {
    event.preventDefault();
    console.log("About Clicked");

    var post_id = $(".trick").attr("rel");
    var post_url = $(".trick").attr("href");
    console.log("LINK: " + post_id);
    console.log(" URL: " + post_url);

    var url =
      "http://localhost/Wordpress/wp/wp-content/themes/vryzas/about-page.php";

    $.ajax({
      type: "POST",
      url: url,
      data: { action: "load-content", post_id: post_id },
      success: function(response) {
        $("article").empty();
        $("article").html(response);

        return false;
      }
    });

    return false;
  });

  $("#menu-item-14").click(function(event) {
    event.preventDefault();
    console.log("Contact Clicked");

    var post_id = $(".trick").attr("rel");
    var post_url = $(".trick").attr("href");
    console.log("LINK: " + post_id + " URL: " + post_url);

    var url =
      "http://localhost/Wordpress/wp/wp-content/themes/vryzas/contact-page.php";

    $.ajax({
      type: "GET",
      url: url,
      success: function(response) {
        $("article").empty();
        $("article").html(response);
        return false;
      }
    });

    return false;
  });
});
