// const topNav = $('#topNav').offset().top;

/* nav固定在上方 */
$(window).scroll(function () {
    if ($(this).scrollTop() > topNav) {  /* 滑動到nav的距離 */
        $('.navbar-brand').removeClass('d-none');
        $('.navbar').addClass('nav_top bg_white shadow-sm');
        $('.nav-link').removeClass('nav_btn');
        $('#navList').removeClass('mx-auto nav_list_bg');
        $('#navList').addClass('ms-auto');
        $('nav .text_dark').hover(function () {
            $(this).css('color', '#e36600');
        }, function () {
            $(this).css('color', '#333333');
        });
    } else {
        $('.navbar-brand').addClass('d-none');
        $('.navbar').removeClass('nav_top bg_white shadow-sm');
        $('.nav-link').addClass('nav_btn');
        $('#navList').addClass('mx-auto nav_list_bg');
        $('#navList').removeClass('ms-auto');
        $('nav .text_dark').hover(function () {
            $(this).css('color', '');
        }, function () {
            $(this).css('color', '');
        });
    }
});

/* 往下滑 */
$('#scrollDown').click(function () {
    const topSec = $('#section1').offset().top - $('.navbar').innerHeight();
    $('html,body').animate({ scrollTop: topSec }, 200);
});

/* lottie animation */
var animation = bodymovin.loadAnimation({
    container: document.getElementById('ferrisWheel'), // Required
    path: '../json/ferrisWheelWithElephant.json', // Required
    animType: 'svg', // Required
    prerender: true,
    loop: true, // Optional
    autoplay: true, // Optional
    name: "Hello World", // Name for future reference. Optional.
})
// $('#ferrisWheel').hover(function () {
//     animation.play();
// }, function () {
//     animation.pause();
// });

/* 啟動wow */
$(function () {
    new WOW().init();
})

/* owlCarousel圖卡輪播 */
$('.owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    // nav: true,
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 2
        },
        768: {
            items: 3
        }
    }
})
