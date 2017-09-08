(function($) {
  var windowWidth = $(window).width();

  window.addEventListener( 'resize' ,function() {
    windowWidth = $(window).width();
    if (windowWidth < 785) {
      $('#primary-menu').addClass('hide-menu');
      if ( !$('body').hasClass('home') ) {
      $('#mobile-header').removeClass('mobile-header-title-hidden');
      }
    } else {
      $('#primary-menu').removeClass('hide-menu');
      $('#mobile-header').addClass('mobile-header-title-hidden');
    }
  });

  // if set to 800 it doesn't work between 800-815. not sure why this is.
  if (windowWidth < 785) {
    $('#primary-menu').addClass('hide-menu');
    $('#menu-item-37 > .sub-menu').addClass('hide-sub-menu');
    if ( !$('body').hasClass('home') ) {
      $('#mobile-header').removeClass('mobile-header-title-hidden');
    }

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

  $('#hamburger').click(function() {
    if ( $('#primary-menu').hasClass('hide-menu') ) {
      $('#primary-menu').removeClass('hide-menu');
    } else {
      $('#primary-menu').addClass('hide-menu');
    }
  })
})(jQuery);