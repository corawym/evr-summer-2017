(function ($) {
    $(document).ready(function () {
        // if (localStorage.getItem('popState') !== 'shown') {
            $('#email-popup').delay(2000).fadeIn();
            // localStorage.setItem('popState', 'shown');
        // }
        $('#close-popup, #email-popup').click(function () {
                $('#email-popup').fadeOut(100); 
            });
    });
})(jQuery);