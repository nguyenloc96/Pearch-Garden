$(document).ready(function() {
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }

    $('.navbar-nav .nav-item a').click(function(){
        $('.navbar-nav .nav-item a').removeClass('active');
        $(this).addClass('active');

        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 0
        }, 1500);
    });

    $(document).on("scroll", onScroll);

    function onScroll(event){
        var scrollPos = $(document).scrollTop();
        $('.navbar-nav .nav-item a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top < scrollPos+50 && refElement.position().top + refElement.height() >= scrollPos-50) {
                $('.navbar-nav .nav-item a').removeClass('active');
                currLink.addClass('active');
            }
            else{
                currLink.removeClass('active');
            }
        });
    }

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $(".sticky").addClass("nav-sticky");
            $('.logo-black').addClass('d-none');
            $('.logo-white').removeClass('d-none');
        } else {
            $(".sticky").removeClass("nav-sticky");
            $('.logo-black').removeClass('d-none');
            $('.logo-white').addClass('d-none');
        }

        if (scroll > 300) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });

    $('#back-to-top').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });
});