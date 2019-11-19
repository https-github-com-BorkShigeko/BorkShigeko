$(function () {
    $('.parent').click(function() {
        // メニュー表示/非表示
        $(this).find('ul').slideToggle('fast');
        if (!$(this).hasClass('show')){
            $(this).addClass('show');
        } else  {
            $(this).removeClass('show');
        }
    });
});