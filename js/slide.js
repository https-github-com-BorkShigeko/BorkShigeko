$(function () {
   $('.slide').slick({
       infinite: true,
       dots:false,
       slidesToShow: 1,
       slidesToScroll: 1,
       autoplay: true,
       autoplaySpeed: 4000,
       speed: 500,
       arrows: false,
       cssEase: 'linear',
       pauseOnHover:false,
       pauseOnFocus: false,
       pauseOnDotsHover: false,
       fade:true
   });

   $('.thumbnails').each(function () {
       var $thumbnail = $(this).find('.thumbnail'),
           $thumbnailThumb = $(this).find('.thumbnailThumb');
       $thumbnail.slick({
           infinite: true, //スライドのループ有効化
           arrows: false, //矢印非表示
           fade: true, //フェードの有効化
           draggable: false //ドラッグ操作の無効化
       });

       $thumbnailThumb.each(function () {
           var num = $(this).find('.mySlideItem').length;
           $(this).slick({
               infinite: true, //スライドのループ有効化
               slidesToShow: num, //表示するスライドの数
               focusOnSelect: true, //フォーカスの有効化
               asNavFor: $thumbnail, //thumbnailクラスのナビゲーション
           });
       });
   });
});