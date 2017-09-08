(function($) {
  $('#menu-item-37 > .sub-menu').hide();
  
  $('#menu-item-37').hover(function() {
    event.preventDefault();
  })

  $('#menu-item-37').click(function() {
    var submenu = $(this).children('.sub-menu');
    if ( $(submenu).is(':hidden') ) {
      $(submenu).slideDown(200);
    } else {
      $(submenu).slideUp(200);
    }
  });
})(jQuery);

