<?php
ini_set('display_errors', "On");
require_once($_SERVER['DOCUMENT_ROOT'] . '/system/must.php');
getHeader('blog');
?>
    <div class="mySection" id="blog_">
        <div class="mySectionInner">
            <div class="mySectionTitle">
                <img class="flower" src="../img/flower.svg">
                <h1>BLOG</h1>
                <h2>ブログ</h2>
            </div>
            <div class="happiness">
                <img src="/img/Happiness_Today.svg">
                <p>今日のハピネス</p>
            </div>
            <div class="article">
                <h3>最新の記事</h3>

                <div class="pic">
                    <img class="back" src="/img/blog_pic_back.png">
                    <img class="front" src="/img/blog_pic.png">
                </div>

                <div class="detail">
                    <p class="summary">最新のブログ記事の内容が入ります。<br>
                        あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。
                    </p>
                    <p class="lasting">続きを読む(他サイトに移ります)</p>
                </div>
            </div>
        </div>
    </div>
<?php getFooter(); ?>