(function ($) {
    $(document).ready(function () {
        // if (localStorage.getItem('popState') !== 'shown') {
            $('#email-popup').delay(2000).fadeIn().focus();
            // localStorage.setItem('popState', 'shown');
        // }
        $('#close-popup').click(function () {
            $('#email-popup').fadeOut(100); 
        });
        $('#email-popup').blur(function() {
            $('#email-popup').fadeOut(100); 
        });
    });
})(jQuery);