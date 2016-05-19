// Wordpress uses the 'jQuery' object by default to call jQuery.
//  This wrapping, self-executing function allows us to use the
//  default $ for all of our jQuery calls.
(function ($) {
  $(document).ready(function(){
    $("#et_search_icon").click(function(){
      $(".et-search-form").fadeToggle("slow");
    });
  });
}(jQuery));
