$(function () {
    $(window).on('load resize', function(){
        var windowheight = window.innerHeight;
        $(".vh").css('height', windowheight);

        // var windowWidth = window.innerWidth;
        // if (windowWidth >= 1024 && windowWidth < windowheight) {
        //     //追加
        //     $('#mv').addClass('initial');
        //
        //     $('.myPointView').addClass('pcVh');
        //     $('#mv').addClass('pcVh');
        //     $('#effect').addClass('pcVh');
        //     $('.point').addClass('pcVh');
        //     $('#mv .myImg').addClass('pcVh');
        //     //追加終了
        //     $(".pcVh").css('height', windowWidth*0.57);
        // }
    });
});