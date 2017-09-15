(function($) {
  var width = $(window).width();

  window.addEventListener( 'resize' ,function() {
    var windowWidth = $(window).width();
    if (width === windowWidth ) {
      return;
    } else if  (windowWidth < 800) {
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
  if (width < 800) {
    $('#primary-menu').addClass('hide-menu');
    $('#menu-item-37 > .sub-menu').addClass('hide-sub-menu');
    if ( !$('body').is('.single, .home') ) {
      $('#mobile-header').removeClass('mobile-header-title-hidden');
    }
    $('#menu-item-37').click(function() {
      var subMenu = $(this).children('.sub-menu');
      $(subMenu).toggleClass('hide-sub-menu show-sub-menu');
      $(subMenu)[0].scrollIntoView(false);
    });
  } else {
    $('#primary-menu').removeClass('hide-menu');
  }

  $('#hamburger').click(function() {
    $('#primary-menu').toggleClass('hide-menu show-menu');
  })

  // Bean details show hide
  $('.more-details').click(function() {
    $(this).next().toggleClass('show-bean-info');
  })

  $('a.hero-button').click(function() {
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

if( $('.home').length ) {
  var spectragramComplete = function() {
    $(window).on('load', function() {
      $('.owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        autoplay:true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive:{
          0:{
              items:2
          },
          800:{
              items:4
          }
        }
      });
      $('.instagram-follow').show();
    });
  }

  var Spectra = {
    instaToken: '25918619.602e4eb.ea174df8724d42448ddb073cbe04bba5',
    instaID: ' 602e4eb7188e4898a3cf5a7afc6b1570',
    
    init: function () {
      $.fn.spectragram.accessData = {
        accessToken: this.instaToken,
        clientID: this.instaID
      };
      
      $('.owl-carousel').spectragram('getUserFeed',{
        max: 12,
        size: 'big',
        query: 'eastvanroasters',
        wrapEachWith: '<div class="igram-wrapper content-image">',
        complete: spectragramComplete(),
      });
    }
  }
  Spectra.init();
}



})(jQuery);