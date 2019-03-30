(function ($) {



    /* ---------------------------------------------- /*
 * Carousel bootstrap
 /* ---------------------------------------------- */

    $('#coffee, #coffee-machines').carousel({
        interval: 12000,
        pause: "hover"
    });
    /* ---------------------------------------------- /*
     * Preloader
     /* ---------------------------------------------- */
    $(window).load(function () {
        $('#status').fadeOut();
        $('#preloader').fadeOut('slow');
    });
})(jQuery);


$(function () {

    var carouselIndicators = function (name) {
        var $indicators = $('#' + name + '-indicators');
        var $el = $('#' + name + '-slides');
        $.each($el.children(), function (index, value){
            if ($(value).children().length === 0) {
                $(value).remove();
            }
        });

        var length = $el.children().length;
        if (length > 1) {
            for (var i = 1; i < length; i++) {
                $indicators.append(['<li data-target="#', name, '" data-slide-to="', i, '" class=""></li>'].join(''));
            }
        }
    };

    $('.item.odd.last').remove(); // remove empty slider item

    var cI = ['coffee', 'coffee-machines'];
    for (var it = 0; it < cI.length; it++) {
        carouselIndicators(cI[it]);
    }



    /* ---------------------------------------------- /*
     * Smooth Scroll
     /* ---------------------------------------------- */

    $('a[href*=#]').bind("click", function (e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 100);
        e.preventDefault();
    });

    /* ---------------------------------------------- /*
     * Background image
     /* ---------------------------------------------- */

    /* $('#intro').backstretch(['assets/images/bg4.jpg']);*/

    /* ---------------------------------------------- /*
     * WOW Animation When You Scroll
     /* ---------------------------------------------- */

    wow = new WOW({
        mobile: false
    });
    wow.init();

    /* ----------------------------------------------- /*
     * Count to number
     /* ----------------------------------------------- */

    $('#stats, #phone-numbers').waypoint(function () {
        $('.timer').each(function () {
            counter = $(this).attr('data-count'),
                $(this).delay(3000).countTo({
                    from: 0,
                    to: counter,
                    speed: 2000,// Stats Counter Speed
                    refreshInterval: 20
                });
        });
    }, {offset: '90%', triggerOnce: true});



    /* ---------------------------------------------- /*
     * Rotate
     /* ---------------------------------------------- */

    $(".rotate").textrotator({
        animation: "dissolve",
        separator: "|",
        speed: 3000
    });
});
