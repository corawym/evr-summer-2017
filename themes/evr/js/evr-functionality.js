(function($) {
  var width = $(window).width();

  window.addEventListener( 'resize' ,function() {
    var windowWidth = $(window).width();
    if (width === windowWidth ) {
      return;
    }
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
  if (width < 785) {
    $('#primary-menu').addClass('hide-menu');
    $('#menu-item-37 > .sub-menu').addClass('hide-sub-menu');
    if ( !$('body').is('.single, .home') ) {
      $('#mobile-header').removeClass('mobile-header-title-hidden');
    }
    $('#menu-item-37').click(function() {
      var subMenu = $(this).children('.sub-menu');
      $(subMenu).toggleClass('hide-sub-menu');
      $(subMenu).animate({
        scrollTop: subMenu.offset().top
      }, 300);
    });
  } else {
    $('#primary-menu').removeClass('hide-menu');
  }

  $('#hamburger').click(function() {
    $('#primary-menu').toggleClass('hide-menu')
  })


  // Bean details show hide
  $('.more-details').click(function() {
    $(this).next().toggleClass('show-bean-info');
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