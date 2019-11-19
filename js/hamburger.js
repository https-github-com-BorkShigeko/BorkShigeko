$(function () {
    console.log('hello');
    var $hum = $('.hamburger'),
        $nav = $('.myGlobalNav');
    $hum.click(function () {
        console.log('クリック');
        if ($hum.hasClass('show')) {
            $hum.removeClass('show');
            $nav.removeClass('show');
            setTimeout(function () {
                $nav.css('display',"none");
            },500);
        } else {
            $hum.addClass('show');
            $nav.css('display',"inherit");
            setTimeout(function () {
                $nav.addClass('show');
            },10);
        }
    });
});