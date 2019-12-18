<?php
ini_set('display_errors', "On");
require_once($_SERVER['DOCUMENT_ROOT'] . '/system/must.php');
getHeader('event');
?>
<div class="mySection" id="event_">
    <div class="mySectionInner">
        <img class="arrowR" src="/img/arrowRight.svg">
        <img class="arrowL" src="/img/arrowLeft.svg">
        <div class="mySectionTitle">
            <img class="flower" src="../img/flower.svg" >
            <h1>EVENT</h1>
            <h2>講演会・イベント・ワークショップ</h2>
        </div>
        <div class="opening">
            <p>
                非認知能力を育む子育て・自分育てを中心に、非認知能力を高める入り口であるパッション、女性活躍時代の女性の生き方、キャリア構築、目標達成スキルなどについて講演会やワークショップを開催しています。講演会の主催ご希望の方はコンタクトからご連絡くださいね。強い心と人間力を育むために、チーム重子（講演会やイベントの主催者さま）になっていただけたら嬉しいです。
                幸せを奪う不満を解消して自分史上最高に幸せになる手帳の使い方ワークショップも開催しています。
            </p>
        </div>
        <div class="content">
            <div class="content1">
                <div class="img1back1"></div>
                <div class="img1"><img src="/img/event_pic1.png"></div>
                <div class="circles">
                    <img src="/img/circlePink.svg">
                    <img src="/img/circlePink.svg">
                    <img src="/img/circlePink.svg">
                    <img src="/img/circleWhitePink.svg">
                    <img src="/img/circlePink.svg">
                    <img src="/img/circlePink.svg">
                    <img src="/img/circlePink.svg">
                </div>
                <div class="detail1">
                    <p>
                        過去のイベントの内容・様子が入ります。<br>
                        あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</p>
                </div>

                <div class="img2">
                    <img class="front" src="/img/event_pic2.png">
                    <img class="back" src="/img/event_pic2_back.png">
                </div>

            </div>

        </div>
    </div>
</div>

<div class="mySection" id="near_">
    <div class="mySectionInner">
        <div class="nearDay">
            <h2>近日開催!!</h2>
        </div>
        <div class="schedule">
            <ul>
                <li>
                    <a href="...">
                        <time datetime="2020-01-01">2020.1.1</time>
                        <h3>ああああああああああああ</h3>
                        <p class="summary">あああああああああああああああああああああ</p>
                        <p class="apply">参加方法:あああああああああ</p>
                    </a>
                </li>
                <li>
                    <a href="...">
                        <time datetime="2020-02-02">2020.2.2</time>
                        <h3>ああああああああああああ</h3>
                        <p class="summary">あああああああああああああああああああああ</p>
                        <p class="apply">参加方法:あああああああああ</p>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>

<div class="mySection" id="log_">
    <div class="mySectionInner">
        <div class="achievement">
            <h2>実績</h2>
        </div>
        <div class="logList">
            <ul>
                <li>
                    <h3>2016</h3>
                    <p>xxxxxxxx/xxxxxxxxxxxxxx/xxxxxxxxxx/xxxxxxxxxx<br>
                        Xxxxxxxx/xxxxxxxxxxxx/xxxxxx/xxxxxxxxxx<br>
                        Xxxxxxx/xxxxxxxxxxx/xxxxxxx/xxxxxxxxxx</p>
                </li>
                <li>
                    <h3>2017</h3>
                    <p>xxxxxxxx/xxxxxxxxxxxxxx/xxxxxxxxxx/xxxxxxxxxx<br>
                        Xxxxxxxx/xxxxxxxxxxxx/xxxxxx/xxxxxxxxxx<br>
                        Xxxxxxx/xxxxxxxxxxx/xxxxxxx/xxxxxxxxxx</p>
                </li>
                <li>
                    <h3>2018</h3>
                    <p>xxxxxxxx/xxxxxxxxxxxxxx/xxxxxxxxxx/xxxxxxxxxx<br>
                        Xxxxxxxx/xxxxxxxxxxxx/xxxxxx/xxxxxxxxxx<br>
                        Xxxxxxx/xxxxxxxxxxx/xxxxxxx/xxxxxxxxxx</p>
                </li>
                <li>
                    <h3>2019</h3>
                    <p>xxxxxxxx/xxxxxxxxxxxxxx/xxxxxxxxxx<br>
                        Xxxxxxxx/xxxxxxxxxxxx/xxxxxx<br>
                        Xxxxxxx/xxxxxxxxxxx/xxxxxxx</p>
                </li>
                <li>
                    <h3>2020</h3>
                    <p>Xxxxxxx/xxxxxxxxxxx/xxxxxxx</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php getFooter(); ?>