document.addEventListener('DOMContentLoaded', function(){
    (function($) {
        $(function() {
            var $header = $('header');
            // Nav Fixed
            $(window).scroll(function() {
                if ($(window).scrollTop() > 100) {
                    $header.addClass('fixed');
                } else {
                    $header.removeClass('fixed');
                }
            });
        });
    })(jQuery);
});