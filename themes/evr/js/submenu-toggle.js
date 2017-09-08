(function($) {
  var windowWidth = $(window).width();

  $(window).resize(function() {
    windowWidth = $(window).width();
    if (windowWidth < 800) {
      $('#primary-menu').addClass('hide-menu');
    } else {
      $('#primary-menu').removeClass('hide-menu');
    }
  });

  if (windowWidth < 800) {
    $('#primary-menu').addClass('hide-menu');
    $('#menu-item-37 > .sub-menu').addClass('hide-sub-menu');
    
    $('#menu-item-37').hover(function() {
      event.preventDefault();
    })

    $('#hamburger').click(function() {
      if ( $('#primary-menu').hasClass('hide-menu') ) {
        $('#primary-menu').removeClass('hide-menu');
      } else {
        $('#primary-menu').addClass('hide-menu');
      }
    })

    $('#menu-item-37').click(function() {
      var subMenu = $(this).children('.sub-menu');
      if ( $(subMenu).hasClass('hide-sub-menu') ) {
        $(subMenu).removeClass('hide-sub-menu');
      } else {
        $(subMenu).addClass('hide-sub-menu');
      }
    });
  } else {
    $('#primary-menu').removeClass('hide-menu');
  }
})(jQuery);