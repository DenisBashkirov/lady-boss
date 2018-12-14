$(document).ready(function () {

   //$('p').hyphenate();

    var isViewportXl = false;
    var isViewportLg = false;
    var isViewportMd = false;
    var isViewportSm = false;

    var viewportWidth = $(window).width()

    if (viewportWidth >= 1170)
        isViewportXl = true;

    if (viewportWidth >= 992)
        isViewportLg = true;

    if (viewportWidth >= 768)
        isViewportMd = true;

    if (viewportWidth >= 600)
        isViewportSm = true;



    /*
    ВСПЛЫВАЮЩЕЕ МЕНЮ С УСЛУГАМИ
     */
    var $navLinkServices = $('.js-nav_link_services');
    var $navServices = $('.js-nav_services');

    if (isViewportXl)
    {
        var linkActive = false;
        var elemActive = false;

        $navLinkServices.on('mouseenter', function () {
            linkActive = true;
        });
        $navLinkServices.on('mouseleave', function () {
            linkActive = false;
        });
        $navServices.on('mouseenter', function () {
            elemActive = true;
        });
        $navServices.on('mouseleave', function () {
            elemActive = false;
        });
        $(document).mousemove(function () {
            if (!linkActive && !elemActive)
            {
                $navServices.fadeOut();
            } else {
                $navServices.fadeIn();
            }
        })
    }


    /*
    STICKY HEADER
     */
    var $header = $('.header');
    var stickyClass = 'header_sticky';

    var headerHeight = $header.height();
    $(window).on('scroll', function () {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > headerHeight)
        {
            $header.addClass(stickyClass);
            $header.slideDown(400);
        } else {
            $header.removeClass(stickyClass);
        }
    });


    /*
    СЛАЙДЕР ДЛЯ СЕКЦИИ ГАЛЕРЕИ
     */
    var $gallerySectionSlider = $('.gallery-section__slider');
    $gallerySectionSlider.slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    /*
    СЛАЙДЕР ДЛЯ СЕКЦИИ ПОПУЛЯРНЫХ ПРОГРАММ
     */
    var $popProgramsSlider = $('.popular-programs__body');
    $popProgramsSlider.slick({
        slidesToShow: 3,
        dots: false,
        arrows: true,

        responsive: [
            {
                breakpoint: 1921,
                settings: 'unslick'

            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: false,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: 'unslick'
            }
        ]
    });

    /*
    СЛАЙДЕР ДЛЯ СЕКЦИИ ОТЗЫВОВ
     */
    var $testimonialsSlider = $('.testimonials-section__body');
    $testimonialsSlider.slick({
        responsive: [
            {
                breakpoint: 1921,
                settings: 'unslick'

            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: false,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slideToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '10px',
                    infinite: false,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });

    /*
    ГАМБУРЕГЕР-МЕНЮ
     */
    var $hamburger = $('.hamburger');
    var $menu = $('.nav-mobile');
    $hamburger.on('click', function () {
        $menu.fadeToggle();
        $hamburger.toggleClass('is-active');
        console.log('click');
    });



    setTimeout(function () {

        /*
       MASONRY
        */

        if (isViewportLg)
        {
            $('.programs__list').masonry({
                gutter: 30,
                horizontalOrder: false
            });
        }

        if (isViewportMd)
        {
            $('.gallery__list').masonry({
                fitWidth: true,
                gutter: 30,
                horizontalOrder: true
            });

            $('.testimonials__list').masonry({
                fitWidth: true,
                gutter: 30,
                horizontalOrder: false
            });
        }


        /*
        AOS
         */
        AOS.init();

    },
        10 // добавлена задержка отработки скрипта, чтобы DOM номрально успевало сформироваться
    );



    /*

     */
    var $btnShowElem = $('.js-action_elem');

    $btnShowElem.on('click', function () {

        var dataTarget = $(this).attr('data-target');
        var target = $('body').find('.' + dataTarget);
        console.log(target);
        var effect = $(this).attr('data-effect');

        target[effect]();

    })


});