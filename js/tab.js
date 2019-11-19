$(function () {
    var $article = $('#article'),
        $sokyoken = $('#sokyoken'),
        $articleArchive = $('#articleArchive'),
        $sokyokenArchive = $('#sokyokenArchive'),
        $articlePage = $('#articlePage'),
        $sokyokenPage = $('#sokyokenPage');

    $article.click(function () {
        if (!$(this).hasClass('show'))  {
            $sokyoken.removeClass('show');
            $sokyokenArchive.removeClass('show');
            $sokyokenPage.removeClass('show');
            $article.addClass('show');
            $articleArchive.addClass('show');
            $articlePage.addClass('show');
        } else {
            $article.removeClass('show');
            $articleArchive.removeClass('show');
            $articlePage.removeClass('show');
            $sokyoken.addClass('show');
            $sokyokenArchive.addClass('show');
            $sokyokenPage.addClass('show');
        }
    });

    $sokyoken.click(function () {
        if (!$(this).hasClass('show'))  {
            $article.removeClass('show');
            $articleArchive.removeClass('show');
            $articlePage.removeClass('show');
            $sokyoken.addClass('show');
            $sokyokenArchive.addClass('show');
            $sokyokenPage.addClass('show');
        } else {
            $sokyoken.removeClass('show');
            $sokyokenArchive.removeClass('show');
            $sokyokenPage.removeClass('show');
            $article.addClass('show');
            $articleArchive.addClass('show');
            $articlePage.addClass('show');
        }
    });
});