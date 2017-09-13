(function ($) {
    $(document).ready(function () {
        if($('.home').length){
            var $subscribeForm = '' +
            '<div class="popup-overlay" id="popup-overlay"><div id="email-popup" class="email-popup">' +
                '<div class="popup-header">' +
                    '<h1>Newsletter</h1>' +
                    '<a id="close-popup" class="close-popup"></a>' +
                '</div>' +
                '<div class="popup-content">' +
                    '<h2>Get on the list today!</h2>' +
                    '<p>Sign up with your email address for exclusive events and products</p>' +
                    '<form class="subscribe-form" action="https://eastvanroasters.us16.list-manage.com/subscribe/post" method="POST">' +
                        '<input type="hidden" name="u" value="97bc113ec28f7d8d5d890eaaa">' +
                        '<input type="hidden" name="id" value="7156395ad4">' +
                        '<input class="email" type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" placeholder="Enter Email">' +
                        '<button class="sign-up" type="submit">Sign Up</button>' +
                    '</form>' +
                '</div>' +
            '</div></div>';

            $('html').append($subscribeForm);
        }
        var $popupOverlay = $('#popup-overlay');
        // if (localStorage.getItem('popState') !== 'shown') {
            $popupOverlay.delay(2000).fadeIn().focus();
            $('html').css('overflow', 'hidden');
            // localStorage.setItem('popState', 'shown');
        // }
        $('#close-popup').click(function () {
            $popupOverlay.fadeOut(100); 
            $('html').css('overflow', '');
        });
        $popupOverlay.click(function() {
            $(this).fadeOut(100); 
            $('html').css('overflow', '');
        });
    });
})(jQuery);