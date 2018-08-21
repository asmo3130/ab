<?php

/* @var $this yii\web\View */
use frontend\models\Content;
use frontend\models\Articles;
use yii\helpers\Html;
use mickgeek\daslider\Widget as DaSlider;
use frontend\models\News;
use frontend\models\MarketsNews;

$news = News::find()->all();
$markets = MarketsNews::find()->all();
$articles = Articles::find()->where(['page' => $content[0]['url']])->asArray()->all();

$this->registerMetaTag([
    'name' => 'description',
    'content' => $content[0]['seo_description']
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $content[0]['seo_keywords']
]);

$this->title = $content[0]['seo_title'];
if ($_SERVER['REQUEST_URI'] == '/markets' || $_SERVER['REQUEST_URI'] == '/markets/birgsale') {

    foreach ($articles as $art) {
        $ar[] = $art;
    }

    list($ar[0], $ar[2]) = array($ar[2], $ar[0]);
    list($ar[3], $ar[1]) = array($ar[1], $ar[3]);
    list($ar[4], $ar[0]) = array($ar[0], $ar[4]);
    list($ar[1], $ar[5]) = array($ar[5], $ar[1]);

    echo "<pre>";
    //    var_dump($ar);
    echo "</pre>";
    $articles = $ar;
}
?>

    <div class="row blocks-list">


        <div class="col-lg-9 _layout blocks-list__item">
            <?
            if (!empty($articles)){
                ?>

                <!-- leftMenu -->
                <div class="blocks-list">

                    <div id="ctl00_frmLeftMenuWrap" class="blocks-list__item">
                        <div class="blocks-list">
                            <div class="blocks-list__item" style="padding-top: 10px;">
                                <div class="blocks-list _columns">
                                    <div class="blocks-list__item _content visible-lg-block">
                                        <div class="sidebar-list _gray _border">
                                            <?

                                            foreach ($articles as $article) {
                                                    if ($article['name'] == 'Зерновые культуры и продукты их переработки' || $article['name'] == 'Газ' || $article['name'] == 'Нефтепродукты'){
                                                        ?>
                                                        <a href="<?="/".$url."/".$article['url']?>" style="padding-left: 20px" class="sidebar-list__item"><div class="sidebar-list__item-inner">
                                                            <span class="sidebar-list__text">
                                                                <div class="sidebar-list__link"><?=$article['name']?></div>
                                                            </span>
                                                            </div>
                                                        </a>
                                                        <?
                                                    }else{
                                                        ?>
                                                        <a href="<?="/".$url."/".$article['url']?>" class="sidebar-list__item"><div class="sidebar-list__item-inner">
                                                            <span class="sidebar-list__text">
                                                                <div class="sidebar-list__link"><?=$article['name']?></div>
                                                            </span>
                                                            </div>
                                                        </a>
                                                        <?
                                                    }

                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?
            }
            ?>
                    <div class="blocks-list">
                    <div class="blocks-list">
                        <div class="blocks-list__item" style="padding-top: 10px;">
                            <div class="blocks-list _columns">
                                <div class="blocks-list__item _content visible-lg-block">
                                    <div class="sidebar-list _gray _border">
                                        <a href="/calc" class="sidebar-list__item">
                                            <div class="sidebar-list__item-inner">
                                                        <span class="sidebar-list__text">
                                                            <div class="sidebar-list__link">Логистический калькулятор</div>
                                                        </span>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blocks-list">
                        <div class="blocks-list__item" style="padding-top: 10px;">
                            <div class="blocks-list _columns">
                                <div class="blocks-list__item _content visible-lg-block">
                                    <div class="sidebar-list _gray _border">
                                        <a href="/markets/spravka" class="sidebar-list__item">
                                            <div class="sidebar-list__item-inner">
                                                        <span class="sidebar-list__text">
                                                            <div class="sidebar-list__link">Справочник</div>
                                                        </span>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="blocks-list">
                            <div class="blocks-list__item" style="padding-top: 10px;">
                                <div class="blocks-list _columns">
                                    <div class="blocks-list__item _content visible-lg-block">
                                        <div class="sidebar-list _gray _border">
                                            <a role="button" class="sidebar-list__item">
                                                <div class="sidebar-list__item-inner">
                                                        <span class="sidebar-list__text">
                                                            <div class="sidebar-list__link">Подписаться</div>
                                                        </span>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="blocks-list">
                        <div class="blocks-list__item" style="padding-top: 10px;">
                            <div class="blocks-list _columns">
                                <div class="blocks-list__item _content visible-lg-block" style="background: none">
                                    <!--Kurs.com.ua main-ukraine 200x130 blue-->
                                    <div id='kurs-com-ua-informer-main-ukraine-200x130-blue-container'><a href="//old.kurs.com.ua/informer" id="kurs-com-ua-informer-main-ukraine-200x130-blue" title="Курс валют информер Украина" rel="nofollow" target="_blank">Информер курса валют</a></div>
                                    <script type='text/javascript'>
                                        (function() {var iframe = '<ifr'+'ame src="//old.kurs.com.ua/informer/inf2?color=blue" width="200" height="130" frameborder="0" vspace="0" scrolling="no" hspace="0"></ifr'+'ame>';var container = document.getElementById('kurs-com-ua-informer-main-ukraine-200x130-blue');container.parentNode.innerHTML = iframe;})();
                                    </script>
                                    <noscript><img src='//old.kurs.com.ua/static/images/informer/kurs.png' width='52' height='26' alt='kurs.com.ua: курс валют в Украине!' title='Курс валют' border='0' /></noscript>
                                    <!--//Kurs.com.ua main-ukraine 200x130 blue-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blocks-list">
                        <div class="blocks-list__item" style="padding-top: 10px;">
                            <div class="blocks-list _columns">
                                <div class="blocks-list__item _content visible-lg-block" style="background: none">
                                    <div class="sidebar-list _gray _border">
                    <div class="container1">
                        <table class="cal">
                            <caption>
                                <span class="prev"><a href="#">←</a></span>
                                <span class="next"><a href="#">→</a></span>
                                January 2012
                            </caption>
                            <thead>
                            <tr>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                                <th>Sun</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="off"><a href="#">26</a></td>
                                <td class="off"><a href="#">27</a></td>
                                <td class="off"><a href="#">28</a></td>
                                <td class="off"><a href="#">29</a></td>
                                <td class="off"><a href="#">30</a></td>
                                <td class="off"><a href="#">31</a></td>
                                <td><a href="#">1</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">2</a></td>
                                <td><a href="#">3</a></td>
                                <td><a href="#">4</a></td>
                                <td><a href="#">5</a></td>
                                <td><a href="#">6</a></td>
                                <td><a href="#">7</a></td>
                                <td><a href="#">8</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">9</a></td>
                                <td><a href="#">10</a></td>
                                <td><a href="#">11</a></td>
                                <td><a href="#">12</a></td>
                                <td><a href="#">13</a></td>
                                <td><a href="#">14</a></td>
                                <td><a href="#">15</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">16</a></td>
                                <td><a href="#">17</a></td>
                                <td><a href="#">18</a></td>
                                <td><a href="#">19</a></td>
                                <td><a href="#">20</a></td>
                                <td><a href="#">21</a></td>
                                <td><a href="#">22</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">23</a></td>
                                <td><a href="#">24</a></td>
                                <td><a href="#">25</a></td>
                                <td><a href="#">26</a></td>
                                <td><a href="#">27</a></td>
                                <td class="active"><a href="#">28</a></td>
                                <td><a href="#">29</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">30</a></td>
                                <td><a href="#">31</a></td>
                                <td class="off"><a href="#">1</a></td>
                                <td class="off"><a href="#">2</a></td>
                                <td class="off"><a href="#">3</a></td>
                                <td class="off"><a href="#">4</a></td>
                                <td class="off"><a href="#">5</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /leftMenu -->

<?
if ($_SERVER["REQUEST_URI"] == '/press'){
    ?>
        </div>

        <div class="_layout blocks-list__item col-lg-39"  style="padding-right: 10px;
    padding-top: 10px;">
            <div class="blocks-list">
                <div class="blocks-list__item _content2">
                    <div class="">

                        <div class="blocks-list__item hidden-xs">
                            <div class="row">
                                <div class="col-sm-28"><ol class="breadcrumb">
                                        <li><a href="/"><span>Главная</span></a></li>
                                        <li><?=$content[0]['name']?></li></ol></div>

                            </div>
                        </div>
                        <div class="text-block"><h1 class="news_title" style="padding-top:0px;"><?=$content[0]['name']?></h1>


                                <div class="blocks-list__item _content">
                                    <div class="blocks-list__item">
                                        <div class="title-block js-tabs">
                                            <div class="title-block__header">
                                                <div class="title-block__header-inner">
                                                    <div class="title-block__title">НОВОСТИ / ПРЕСС-РЕЛИЗЫ</div>
                                                    <div class="title-block__controls">
                                                        <div class="socials">
                                                            <a href="https://www.facebook.com/MSKExchange" target="_blank" class="_fb socials__item"></a>
                                                            <a href="https://vk.com/moscow_exchange" target="_blank" class="_vk socials__item"></a>
                                                            <a href="https://twitter.com/moscow_exchange" target="_blank" class="_tw socials__item"></a>
                                                            <a href="https://www.youtube.com/user/RTSexchange" target="_blank" class="_yt socials__item"></a>
                                                            <a href="https://instagram.com/moscow_exchange/" target="_blank" class="_ig socials__item"></a>
                                                            <a href="http://habrahabr.ru/company/moex/blog/" target="_blank" class="_hb socials__item"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="title-block__content js-tabs-content">
                                                <div class="tabs_box visible"><div class="news-list">

                                                        <?
                                                        foreach ($news as $new) {
                                                            ?>
                                                            <div class="news-list__item">
                                                                <div class="news-list__date">
                                                                    <b><?=$new['date']?></b>
                                                                </div>
                                                                <div class="news-list__content"><a href="<?="/press/".$url."/".$new['url']?>" class="news-list__link"><?=$new['name']?></a></div>
                                                            </div>
                                                            <?
                                                        }
                                                        ?>

                                                    </div></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="blocks-list__item">
                                    <div class="title-block js-tabs">
                                        <div class="title-block__header">
                                            <div class="title-block__header-inner">
                                                <div class="title-block__title">НОВОСТИ РЫНКОВ</div>
                                                <div class="title-block__controls">
                                                    <div class="socials">
                                                        <a href="https://www.facebook.com/MSKExchange" target="_blank" class="_fb socials__item"></a>
                                                        <a href="https://vk.com/moscow_exchange" target="_blank" class="_vk socials__item"></a>
                                                        <a href="https://twitter.com/moscow_exchange" target="_blank" class="_tw socials__item"></a>
                                                        <a href="https://www.youtube.com/user/RTSexchange" target="_blank" class="_yt socials__item"></a>
                                                        <a href="https://instagram.com/moscow_exchange/" target="_blank" class="_ig socials__item"></a>
                                                        <a href="http://habrahabr.ru/company/moex/blog/" target="_blank" class="_hb socials__item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-block__content js-tabs-content">
                                            <div class="tabs_box visible"><div class="news-list">

                                                    <?
                                                    foreach ($markets as $market) {
                                                        ?>
                                                        <div class="news-list__item">
                                                            <div class="news-list__date">
                                                                <b><?=$market['date']?></b>
                                                            </div>
                                                            <div class="news-list__content"><a href="<?=$market['href']?>" class="news-list__link" target="_blank"><?=$market['name']?></a></div>
                                                        </div>
                                                        <?
                                                    }
                                                    ?>

                                                </div></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                <style>
                                    .text-block__ineer div{
                                        display: inline-flex;
                                        width: 35%;
                                    }
                                </style>

                            </div>
                            <hr>
                            <style>
                                .text-block__ineer div{
                                    display: inline-flex;
                                    width: 35%;
                                }
                            </style>
                            <div class="text-block__ineer">
                                <div>
                                    Товарная биржа "Столица" на постоянной основе<br>
                                    проводит биржевые торги в секции газ и нефтепродукты,<br>
                                    а также земельные торги.<br>
                                </div>
                                <div style="float: right;">
                                    адрес: 01024, г.. Киев, ул. Академика Богомольца, 7/14, офис 182,<br>
                                    e-mail: tbstolitsa@gmail.com,<br>телефон: +38 066 615 80 57
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row blocks-list">

    </div>
    <?
}else{
    ?>
        </div>

        <div class="_layout blocks-list__item col-lg-39" style="padding-right: 10px;
    padding-top: 10px;">
            <div class="blocks-list">
                <div class="blocks-list__item _content2">
                    <div class="">

                        <div class="blocks-list__item hidden-xs">
                            <div class="row">
                                <div class="col-sm-28"><ol class="breadcrumb">
                                        <li><a href="/"><span>Главная</span></a></li>
                                        <li><?=$content[0]['name']?></li></ol></div>

                            </div>
                        </div>
                        <div class="text-block"><h1 class="news_title" style="padding-top:0px;"><?=$content[0]['name']?></h1>

                            <?=$content[0]['content']?>
                            <hr>
                            <style>
                                .text-block__ineer div{
                                    display: inline-flex;
                                    width: 35%;
                                }
                            </style>
                            <div class="text-block__ineer">
                                <div>
                                    Товарная биржа "Столица" на постоянной основе<br>
                                    проводит биржевые торги в секции газ и нефтепродукты,<br>
                                    а также земельные торги.<br>
                                </div>
                                <div style="float: right;">
                                    адрес: 01024, г.. Киев, ул. Академика Богомольца, 7/14, офис 182,<br>
                                    e-mail: tbstolitsa@gmail.com,<br>телефон: +38 066 615 80 57
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row blocks-list">

    </div>
    <?
}
?>

