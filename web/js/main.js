(function($) {

    // Mobile menu
    $('.mobile-menu-toggle').click(function() {
        $('body').addClass('mobile-menu-opened');
        $('.mobile-menu').addClass('opened');
    });

    $('.mobile-menu, .mobile-menu-toggle').click(function(e) {
        e.stopPropagation();
    });

    $(document).click(function() {
        $('body').removeClass('mobile-menu-opened');
        $('.mobile-menu').removeClass('opened');
    });

    // 
    $('.has-arrow .icon').click(function(){
        $(this).toggleClass('clicked');
        $(this).parents('.has-arrow').siblings('ul').toggle();
    });

    // Main slider
    $('#slider_main').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navContainer: '#slider_main_nav',
        dots: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplaySpeed: 1000,
        dotsSpeed: 1000, 
        navSpeed: 1000,
        autoplayHoverPause: true,
    });

    // Video inside bootstrap modal
    $(document).ready(function() {
        $('#youtubeVideo').on('hidden.bs.modal', function() {
            var $this = $(this).find('iframe'),
            tempSrc = $this.attr('src');
            $this.attr('src', "");
            $this.attr('src', tempSrc);
        });

        $('#html5Video').on('hidden.bs.modal', function() {
            var html5Video = document.getElementById("htmlVideo");
            if (html5Video != null) {
                html5Video.pause();
                html5Video.currentTime = 0;
            }
        });
    });

})(jQuery);