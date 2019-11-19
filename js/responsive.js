$(function () {
    var $target = $('.r'),
        $breakPoint = 768,
        windowWidth = window.innerWidth;
    if (windowWidth > $breakPoint) {
        $target.each(function () {
            $(this).addClass('res')
        });
    }
});