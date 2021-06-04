$(document).ready(function() {
 
  $('form.login-form').submit(function (e) {
        e.preventDefault();
        var url = $(this).attr("action");
        var data = $('form.login-form').serialize();
        $.ajax({
            type: 'POST',
            url: url,
            data: data

        }).done(function (res) {
            console.log(res);
            location.reload();
        }).fail(function (res) {
          console.log(res);
            console.log(res.responseJSON.errors);
            // $('.order-login .valid').addClass('error');
            // $('.order-login span.error').text(res.responseJSON.errors.email[0]);
        });
    });
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

$(function() {
      var $posts = $(".lessons");
      var $ul = $("ul.pagination");
      $ul.hide(); // Prevent the default Laravel paginator from showing, but we need the links...

      $(".more").click(function(e) {
          e.preventDefault();
          $.get($ul.find("a[rel='next']").attr("href"), function(response) {
            const url = new URL($ul.find("a[rel='next']").attr("href"));
                // console.log(url.searchParams.get('page'));
                // if(url.searchParams.get('page') === )
               $posts.append(
                   $(response).find(".lessons").html()
               );
          });
      });

    /* Razriyat filter for lesson */
    $('select#nicer-select-id').on('change', function(){
        var current_runk = $(this).val();

        $.post('/filter-with-runk',{ 'runk': current_runk}, function(response){
            $('.lessons').html(response);
        });

    });

    });

})
/******************************CAPTCHA**************************************/