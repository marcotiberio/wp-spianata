jQuery(document).ready(function ($) {
    $('.hamburger').click(function (event) {
       $(this).toggleClass('is-active');
       $('body').toggleClass('mobile-menu-active');
    });
});