<?php
ini_set('display_errors', "On");
require_once($_SERVER['DOCUMENT_ROOT'] . '/system/must.php');
getHeader('blog');
?>
            <div class="mySection" id="blog_">
                <div class="mySectionInner">
                    <img class="flower" src="../img/flower.svg" >
                    <h1>BLOG</h1>
                    <h2>ブログ</h2>
                    <div class="happiness">
                        <img  src="/img/Happiness_Today.png">
                    <p>今日のハピネス</p>
                    </div>
                    <div class="article">
                        <h3>最新の記事</h3>

                        <div class="img2back"></div>
                        <div class="img2"></div>

                        <div class="detail2">

                            <p class="summary">ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                            <p class="lasting">続きを読む(他サイトに移ります)</p>
                        </div>
                </div>
            </div>
            </div>
<?php getFooter(); ?>;