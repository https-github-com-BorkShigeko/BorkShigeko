<?php

function getHeader($mode)
{
    $headerStatus = [
        'top' =>
            [
                'title' => 'TOP',
                'keywords' => 'A,B,C',
                'description' => '詳細が入ります。',
                'css' => '<link rel="stylesheet" href="/css/slick.css">',
                'noindex' => '<meta name="robots" content="noindex">'
            ],
        'about' =>
            [
                'title' => 'ABOUT',
                'keywords' => 'A,B,C',
                'description' => '詳細が入ります。',
                'css' => '<link rel="stylesheet" href="/css/about.css">',
                'noindex' => '<meta name="robots" content="noindex">'
            ],
        'book' =>
            [
                'title' => 'BOOK',
                'keywords' => 'A,B,C',
                'description' => '詳細が入ります。',
                'css' => '<link rel="stylesheet" href="/css/book.css">',
                'noindex' => '<meta name="robots" content="noindex">'
            ],
        'event' =>
            [
                'title' => 'EVENT',
                'keywords' => 'A,B,C',
                'description' => '詳細が入ります。',
                'css' => '<link rel="stylesheet" href="/css/event.css">',
                'noindex' => '<meta name="robots" content="noindex">'
            ],
        'press' =>
            [
                'title' => 'PRESS',
                'keywords' => 'A,B,C',
                'description' => '詳細が入ります。',
                'css' => '<link rel="stylesheet" href="/css/press.css">',
                'noindex' => '<meta name="robots" content="noindex">'
            ],
        'blog' =>
            [
                'title' => 'BLOG',
                'keywords' => 'A,B,C',
                'description' => '詳細が入ります。',
                'css' => '<link rel="stylesheet" href="/css/blog.css">',
                'noindex' => '<meta name="robots" content="noindex">'
            ],
    ];
    echo '
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
   ' . $headerStatus[$mode]['noindex'] . '
        <!--<link rel="shortcut icon" href="/img/favicon.ico">-->
    <title>' . $headerStatus[$mode]['title'] . '</title>
    <meta name="keywords" content=" ' . $headerStatus[$mode]['keywords'] . '">
    <meta name="description" content=" ' . $headerStatus[$mode]['description'] . '">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/slick-theme.css">
    <link rel="stylesheet" href="/css/slide.css">
    <link rel="stylesheet" href="/css/my.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/myAnimation.css">
     ' . $headerStatus[$mode]['css'] . '
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body class="show">
<div class="wrapper">
    <div class="main container show">
        <header>
            <div class="topHeader">
                <div class="hamburger myBack">
                    <div class="container">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="topLogo">
                    <img src="/img/top_logo.png" alt="Shigeko Bork">
                </div>
                <div class="forMember">
                    <a href="...">
                        <p>有料会員ページ</p>
                    </a>
                </div>
            </div>

        </header>
        <nav class="myGlobalNav myBack">
            <div class="container mySection myBack">
                <div class="mySectionInner" id="menu">
                <div class="menuSideBar">
                    <img src="/img/menu_bar.png">
                </div>
                    <div class="mySectionTitle">
                      <h2>MENU</h2>
                    </div>
                    <ul class="en">
                        <li><a href="/"><p class="english">TOP</p>
                        <p class="japanese">トップ</p></a></li>
                        
                        <li><a href="/about"><p class="english">ABOUT</p>
                        <p class="japanese">自己紹介</p></a></li>
                        
                        <li><a href="/book"><p class="english">BOOK</p>
                        <p class="japanese">著書</p></a></li>
                        
                        <li><a href="/event"><p class="english">EVENT</p>
                        <p class="japanese">イベント・講演会</p></a></li>
                        
                        <li><a href="..."><p class="english">MEMBER PAGE</p>
                        <p class="japanese">有料会員ページ</p></a></li>
                        
                        <li><a href="/#press"><p class="english">PRESS</p>
                        <p class="japanese">プレス</p></a></li>
                        <li><a href="/blog"><p class="english">BLOG</p>
                        <p class="japanese">ブログ</p></a></li>
                    </ul>
                    
                    <div class="menuIcon">
                    <a href="..."><img src="/img/menu_facebook.png"></a>
                    <a href="..."><img src="/img/menu_instagram.png"></a>
                    <a href="..."><img src="/img/menu_twitter.png"></a>
                    <a href="..."><img src="/img/menu_youtube.png"></a>
                    </div>
                    <div class="copyright"><p>&copyCOPYRIGHT XXXXXXXXXX</p></div>
                </div>
            </div>
        </nav>

        <main>
';
}

function getFooter()
{
    echo '
     </main>
        <footer>

                <img class="footerLogo" src="/img/footerShigekoBork.png">
                <div class="footerSns">
                    <a href="..."><img src="/img/about_facebook.png"></a>
                    <a href="..."><img src="/img/about_instagram.png"></a>
                    <a href="..."><img src="/img/about_twitter.png"></a>
                    <a href="..."><img src="/img/about_youtube.png"></a>
                </div>
                <div class="footerMenu">
                    <a class="top" href="..."><p>TOP</p></a>
                    <div class="footerMenu1">
                        <a class="about" href="..."><p>ABOUT</p></a>
                        <a class="book" href="..."><p>BOOK</p></a>
                        <a class="event" href="..."><p>EVENT</p></a>
                    </div>
                    <div class="footerMenu2">
                        <a class="member" href="..."><p>MEMBER PAGE</p></a>
                        <a class="press" href="..."><p>PRESS</p></a>
                        <a class="blog" href="..."><p>BLOG</p></a>
                    </div>
                </div>
                <div class="copyRight"><p>&copyCOPYRIGHT XXXXXXXXXX</p></div>

        </footer>
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js"></script>
<script src="/js/jquery.inview.min.js"></script>
<script src="/js/hamburger.js"></script>
<script src="/js/vh.js"></script>
<script src="/js/accordion.js"></script>
<script src="/js/slide.js"></script>
<script src="/js/main.js"></script>
<script src="/js/tab.js"></script>
<script src="/js/colorBox.js"></script>
<script src="/js/myAnimation.js"></script>
<script src=\'https://www.google.com/recaptcha/api.js\'></script>

</body>
</html>
';
}

?>