if (jQuery(window).width() <= 700) {
    jQuery('label[for="tab1"]').after(jQuery("#content1"));
    jQuery('label[for="tab2"]').after(jQuery("#content2"));
    jQuery('label[for="tab3"]').after(jQuery("#content3"));
    jQuery('label[for="tab4"]').after(jQuery("#content4"));
    jQuery('label[for="tab5"]').after(jQuery("#content5"));
}

jQuery(function ($) {


    //
    var $body = $('body'),
        $header = $('header');
    $(document).on('scroll', function () {
        console.log('asdasd');
        var position = $body.scrollTop(),
            block_position = $('#box1').offset().top; // расположение блока, от которого и зависит фиксированность хэдера
        if (position > block_position) { // если позиция скролла страницы больше, то ставим фикс
            $header.addClass('header-fixed');
        } else {
            $header.removeClass('header-fixed');
        }
    });

    $('.go-to a').click(function () {
        var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
            $('html, body').animate({scrollTop: $(scroll_el).offset().top}, 500);
        }
        return false;
    });
//
    $('.slider-our-materials').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 300,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
//
    $('.our-customer').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 300,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
//


    $('.rang-time').change(function () {
        $('.active-tab .obj-item-4').find('[data-range="range-time"]').val(jQuery('.active-tab .rang-time').val());
    });
    $('.rang-loaders').change(function () {
        $('.active-tab .obj-item-3').find('[data-range="range-loaders"]').val(jQuery('.active-tab .rang-loaders').val());
    });

    $('#btn-calculator').click(function () {
        var temp = '.active-tab',
            car = jQuery(temp + ' .obj-item-2').find('.obj-li-active').attr('data-price'),
            loaders = jQuery(temp + ' .obj-item-3').find('[data-range="range-loaders"]').val(),
            time = jQuery(temp + ' .obj-item-4').find('[data-range="range-time"]').val(),
            check = jQuery(temp + ' .obj-item-2 input').prop('checked'),
            cat_h = "";
        if (car == null || check) {
            car = 0
        }
        if (time < 2) time = 2;

        switch (car) {
            case 'cart-1':
                car = 220;
                cat_h = 'Merсedes 1';
                break;
            case 'cart-2':
                car = 220;
                cat_h = ' Merсedes 2';
                break;
            case 'cart-3':
                car = 220;
                cat_h = ' Merсedes 3';
                break;
            case 'cart-4':
                car = 300;
                if (time < 3) time = 3;
                cat_h = ' Man';
                break;
            case 'cart-5':
                car = 500;
                if (time < 5) time = 5;
                cat_h = ' Daf';
                break;
        }
        $('.calculation-price').fadeIn();
        $('#car').html('');
        $('#total-loaders').html('');
        $('#total-time').html('');
        $('#total-price').html(loaders * 140 * time + car * time + ' грн');
        if (car >= 0) jQuery('#car').html(cat_h);
        if (loaders >= 1) jQuery('#total-loaders').html('Грузчики: ' + loaders + ' чел.');
        $('#total-time').html('Время работы: ' + time + ' ч.');
        $('.info-list li').each(function () {
            $(this).html() == 0 ? jQuery(this).hide() : jQuery(this).fadeIn();
        })
    });

    $('ul[date-tabsP] > li').click(function () {
        var tabsP = jQuery(this).parent().attr('date-tabsP');
        var tabs = jQuery(this).attr('date-tabsC');
        $('[date-tabsP="' + tabsP + '"][data-tabsC]').hide();
        $('[date-tabsP="' + tabsP + '"][data-tabsC]').removeClass('active-tab');
        $('.' + tabs).show();
        $('.' + tabs).addClass('active-tab');
        $(this).parent().children().removeClass('active-tab');
        $(this).addClass('active-tab');
    });

    $('.obj-li').click(function () {
        var flag = true;
        if ($(this).hasClass('obj-li-active')) flag = false;
        $(this).parent('ul').children().removeClass('obj-li-active');
        if (flag) $(this).addClass('obj-li-active');
    });

    $('.range-input').change(function () {
        var temp = $(this).val() * 10;
        $(this).next().css('width', temp + '%');
    });

    $(document).on('change', '.active-tab .obj-item-2 input', function () {
        if ($(this).prop('checked')) $('.active-tab .obj-item-2 .obj-li ').removeClass('obj-li-active');
    });

    $('[data-range="range-time').change(function () {
        var temp = $(this).val();
        var width = 5.412;
        switch (temp) {
            case '1'  :
                temp = 0;
                break;
            case '1.5':
                temp = 8;
                break;
            case '2'  :
                temp = 8 + width;
                break;
            case '2.5':
                temp = 8 + width * 2;
                break;
            case '3'  :
                temp = 8 + width * 3;
                break;
            case '3.5':
                temp = 8 + width * 4;
                break;
            case '4'  :
                temp = 8 + width * 5;
                break;
            case '4.5':
                temp = 8 + width * 6;
                break;
            case '5'  :
                temp = 8 + width * 7;
                break;
            case '5.5':
                temp = 8 + width * 8;
                break;
            case '6'  :
                temp = 8 + width * 9;
                break;
            case '6.5':
                temp = 8 + width * 10;
                break;
            case '7'  :
                temp = 8 + width * 11;
                break;
            case '7.5':
                temp = 8 + width * 12;
                break;
            case '8'  :
                temp = 8 + width * 13;
                break;
            case '8.5':
                temp = 8 + width * 14;
                break;
            case '9'  :
                temp = 8 + width * 15;
                break;
            case '9.5':
                temp = 8 + width * 16;
                break;
            case '10' :
                temp = 100;
                break;
        }
        $(this).next().css('width', temp + '%');
    });


//
    $('#goTop').click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
    });
});


jQuery(window).resize(function () {
    if (jQuery(this).width() <= 700) {
        jQuery('label[for="tab1"]').after(jQuery("#content1"));
        jQuery('label[for="tab2"]').after(jQuery("#content2"));
        jQuery('label[for="tab3"]').after(jQuery("#content3"));
        jQuery('label[for="tab4"]').after(jQuery("#content4"));
        jQuery('label[for="tab5"]').after(jQuery("#content5"));
    }
    else {
        jQuery('label[for="tab5"]').after(jQuery("#content1"));
        jQuery("#content1").after(jQuery("#content2"));
        jQuery('#content2').after(jQuery("#content3"));
        jQuery('#content3').after(jQuery("#content4"));
        jQuery('#content4').after(jQuery("#content5"));
    }
});

jQuery('.container-play .play').click(function () {
    jQuery('.container-play video').get(0).play();
    if (jQuery(window).width() > 767) {
        jQuery('.container-play .play').fadeOut();
        jQuery('.container-play .pause').fadeIn();
    }
    else {
        jQuery('.container-play .play').fadeOut();
        jQuery('.container-play .pause').css({'opacity': '0', 'display': 'block'});
    }
});

jQuery('.container-play .pause').click(function () {
    jQuery('.container-play video').get(0).pause();
    jQuery('.container-play .pause').fadeOut();
    jQuery('.container-play .play').fadeIn();
});