import $ from 'jquery';

window.$ = window.jQuery = $;
import Swiper from 'swiper/dist/js/swiper.min';
import 'bootstrap/dist/js/bootstrap';


$(document).ready(function () {


    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 120) {
            $('header').addClass('sticky');
            $('body.simple-page').addClass('sticky-active');
        } else {

            if($('.mobile-menu').hasClass('active')){
            }else{
                $('header').removeClass('active');
            }
        }
        if ($(window).scrollTop() == 0){
            $('body.simple-page').removeClass('sticky-active');
            $('header').removeClass('sticky');
        }



    });

    var title = $("title").text();
    console.log(title + " is ready.");

    //$('.collapse').collapse();





    var swiperPortfolio = new Swiper('.JS--portfolio-slider.swiper-container', {
        slidesPerView: 3,
        loop: true,
        navigation: {
            nextEl: '.JS--portfolio-next',
            prevEl: '.JS--portfolio-prev',
        },
        pagination: {
            el: '.JS--portfolio-pagination',
            clickable: true,
        },
        breakpoints: {
            600: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 30
            }
        }

    });

    var swiperFeedback = new Swiper('.JS--feedback-slider.swiper-container', {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 15,
        navigation: {
            nextEl: '.JS--feedback-next',
            prevEl: '.JS--feedback-prev',
        },
        pagination: {
            el: '.JS--feedback-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            767: {
                slidesPerView: 1,
                spaceBetween: 20
            },
           1200: {
                slidesPerView: 2,
                spaceBetween: 15
            }
        }

    });





    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        // var headerHeight = $('header').outerHeight();
        var headerHeight = 100;

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - headerHeight
        }, 1000);

    });


    //Mobile menu

    $('.mobile-menu-btn').click(function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('header').removeClass('active');
            $('.mobile-menu').removeClass('active');
        } else {
            $(this).addClass('active');
            $('.mobile-menu').addClass('active');
            $('header').addClass('active');
        }
    });


    $('.mobile-menu a').click(function(){
        $('header').removeClass('active');
        $('.mobile-menu').removeClass('active');
        $('.mobile-menu-btn').removeClass('active');
    });


});
