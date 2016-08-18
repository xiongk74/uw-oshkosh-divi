// Wordpress uses the 'jQuery' object by default to call jQuery.
//  This wrapping, self-executing function allows us to use the
//  default $ for all of our jQuery calls.
(function ($) {
  $(document).ready(function(){
    // Custom search box
    $("#et_search_icon").click(function(){
      $("#et_top_search div div form").fadeToggle("slow");
    });
  });

  $( window ).load(function() {
    // Turns off the Divi parent theme's event listener
    // (prevents the main menu from dropping down when a sub-menu
    // item is clicked)
    $(".et_pb_fullwidth_section").find("li.menu-item > a").off("click");
  });
}(jQuery));
