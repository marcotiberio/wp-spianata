jQuery(document).ready(function ($) {
    var duration = 120000;
    $('.move-left .marquee').marquee({
        duration: duration,
        gap: 10,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true
    });
    $('.move-right .marquee').marquee({
        duration: duration,
        gap: 10,
        delayBeforeStart: 0,
        direction: 'right',
        duplicated: true
    });
});