(function($) {
  var windowWidth = $(window).width();

  window.addEventListener( 'resize' ,function() {
    windowWidth = $(window).width();
    if (windowWidth < 785) {
      $('#primary-menu').addClass('hide-menu');
      if ( !$('body').is('.single, .home') ) {
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
    if ( !$('body').is('.single, .home') ) {
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

  $('#more-details-1').click(function() {
    if ( $('#hidden-bean-info-1').hasClass('show-bean-info') ) {
      $('#hidden-bean-info-1').removeClass('show-bean-info');
    } else {
      $('#hidden-bean-info-1').addClass('show-bean-info');
    }
  })

  $('#more-details-2').click(function() {
    if ( $('#hidden-bean-info-2').hasClass('show-bean-info') ) {
      $('#hidden-bean-info-2').removeClass('show-bean-info');
    } else {
      $('#hidden-bean-info-2').addClass('show-bean-info');
    }
  })

  $('#more-details-3').click(function() {
    if ( $('#hidden-bean-info-3').hasClass('show-bean-info') ) {
      $('#hidden-bean-info-3').removeClass('show-bean-info');
    } else {
      $('#hidden-bean-info-3').addClass('show-bean-info');
    }
  })

  $('#more-details-4').click(function() {
    if ( $('#hidden-bean-info-4').hasClass('show-bean-info') ) {
      $('#hidden-bean-info-4').removeClass('show-bean-info');
    } else {
      $('#hidden-bean-info-4').addClass('show-bean-info');
    }
  })

  $('.hero-banner a.hero-button').click(function() {
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top-131
            }, 750);
            return false;
        }
    }
});


})(jQuery);