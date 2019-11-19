$(function () {
    var $height = $(window).height(),
        $width = $(window).width(),
        $aspect = $height/$width*100;

    $('.paradox div').css('paddingBottom',$aspect+'%');

    var $target = $('.myMvSection');

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        $target.each(function () {
            var top = $(this).offset().top - scroll,
                height = $(this).height()+200;
            if (top+height < 0) {
                $(this).find('.myMvSectionBack').css('height','0px');
            } else {
                $(this).find('.myMvSectionBack').css('height',top+height+'px');
            }
        });
    });
});