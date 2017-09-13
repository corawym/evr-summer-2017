(function($) {

    // var formHtml = '' +
    // '<div class="email-popup">' +
    //     '<div class="popup-header">' +
    //         '<h1>Newsletter</h1>' +
    //         '<div class="close-popup">' +
    //         '</div>' +
    //     '</div>' +
    //     '<div class="popup-content">' +
    //         '<h2>Get on the list today!</h2>' +
    //         '<p>Sign up with your email address for exclusive events and products</p>' +
    //         '<form class="subscribe-form" action="subscribe">' +
    //             '<input class="email" type="email" name="usremail" placeholder="Enter Email">' +
    //             '<button class="sign-up" type="submit">Sign Up</button>' +
    //         '</form>' +
    //     '</div>' +
    // '</div>';

    setTimeout(function(){ 
        $('#email-popup').css('display', 'block');
    }, 2000);

    $('#close-popup').click(function() {
        console.log('heyheyhey');
        $('#email-popup').fadeOut(300);
    });
})(jQuery);