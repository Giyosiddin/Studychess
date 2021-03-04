$(document).ready(function() {

    autosize();

    function autosize() {
        var text = $('.autosize');

        text.each(function() {
            $(this).attr('rows', 1);
            resize($(this));
        });

        text.on('input', function() {
            resize($(this));
        });

        function resize($text) {
            $text.css('height', 'auto');
            $text.css('height', $text[0].scrollHeight + 'px');
        }
    }

    var selectricOptions = {
        disableOnMobile: false,
    };

    $(function() {
        $('select').selectric(selectricOptions);
    });

    (function($) {
        $('[data-fancybox]').fancybox({
            closeExisting: true,
            loop: true
        });
    })(jQuery);

    if ($(window).width() < 991) {

        // $('.quotes_text').after($('.quotes_img'))

        $('.right_header .user').after($('header ul'))
        $('.right_header').wrap('<div class="sidebar_menu"></div')

        $(document).on('click', '.animation_burger', function(e) {
            e.preventDefault()
            $('.animation_burger').toggleClass('on')
            $('.sidebar_menu').toggleClass('actived')
            $('body').toggleClass('open_menu_mobile')
        })

        $('body').click(function(e) {
            if (!$(e.target).is('.animation_burger *, .right_header, .right_header *')) {
                $('.animation_burger').removeClass('on')
                $('.sidebar_menu').removeClass('actived')
                $('body').removeClass('open_menu_mobile')
            }
        })

    }

    $(document).on('click', '.drops span', function(e) {
        // e.preventDefault()
        $(this).next().slideToggle()
    })



    var swiper1 = new Swiper('.quotes_swiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        pagination: {
            el: '.quotes_swiper .swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
            1230: {},
            991: {},
            767: {}
        }
    });

    var swiper2 = new Swiper('.news_swiper', {
        slidesPerView: 4,
        spaceBetween: 20,
        // touchRatio: false,
        navigation: {
            nextEl: '.news .swiper-button-next',
            prevEl: '.news .swiper-button-prev',
        },
        loop: true,
        breakpoints: {
            991: {
                spaceBetween: 20,
                slidesPerView: 3,

            },
            767: {
                slidesPerView: 1.8,
                spaceBetween: 10,
                // slidesPerView: 2,
                // spaceBetween: 10,
                // slidesPerColumn: 2,
                // loop: false
            }
        }
    });



})
/******************************CAPTCHA**************************************/