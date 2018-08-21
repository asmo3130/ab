<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\models\Content;

$menu_botoom = Content::find()->where(['in_menu' => 'body'])->all();
$menu_header = Content::find()->where(['in_menu' => 'header'])->all();
$menu_left = Content::find()->where(['in_menu' => 'left'])->all();

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php $this->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/x-icon',
        'href' => '/frontend/web/img/favicon.png',
    ]);?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

    

<?php $this->beginBody() ?>
<div class="page">
<div class="page-header">
    <div class="header">
                    <div class="header__inner">
                        <div class="header__top">
                            <a href="/" ><img src="/img/logo1.png" alt=""></a>
                            <div class="header__content header-content">
                                <div class="header-content__top header-content-top">
                                    <div class="header-links">
                                        <?
                                        foreach ($menu_header as $item) {
                                         ?>
                                            <span class="header-links__item"><a href="/<?=$item['url']?>"><?=$item['name']?></a></span>
                                            <?
                                        }?>
                                    </div>
                                    <div class="header-links" style="padding-top: 10px">
                                        <span class="header-links__item"><a href="/markets/spravka">Стать участником торгов</a></span>
                                        <span class="header-links__item"><a href="#">Электронная система</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blocks-list__item hidden-xs">
                            <div class="marquee"><span>WHTE SPOT 150.69 € ↓ -0.69 % WHTA SPOT 147.18 € ↑ 0.22 % WHTB SPOT 142.33 € ↑ 1.23 % WHTF SPOT 132.67 € ↓ -0.49 % CRNF SPOT 143.08 € ↓ -0.09 % BRLS SPOT 187.19 € ↑ 2.11 % BRLF SPOT 131.60 € ↓ -0.89 % RYEA SPOT 135.00 € ↑ 1.25 % SNF SPOT 326.00 € ↑ 2.40 % RPS SPOT 348.03 € ↑ 1.25 %</span></div>
                        </div>
                        <div class="header__bottom">
                            <nav class="header-menu">
                                <?
                                foreach ($menu_botoom as $item) {
                                    ?>
                                    <span class="header-menu__item"><a href="/<?=$item['url']?>" class="header-menu__link"><?=$item['name']?></a></span>
                                    <?
                                }
                                ?>

                            </nav>
                            <div class="header__content header-content nonemunu" id="nonemenu" style="display: none;">
                                <div class="header-content__top header-content-top">
                                    <div class="header-links">
                                        <span class="header-links__item"><a class="hiddenMe" href="/" style="    padding: 8px 99px;"><img
                                                        src="/img/lll.png" alt=""></a></span>
                                        <?
                                        foreach ($menu_header as $item) {
                                         ?>
                                            <span class="header-links__item"><a class="hiddenMe" href="/<?=$item['url']?>"><?=$item['name']?></a></span>
                                            <?
                                        }?>
                                        <span class="header-links__item"><a href="/markets/spravka">Стать участником торгов</a></span>
                                        <span class="header-links__item"><a href="#">Электронная система</a></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <?= $content ?>

        <div class="page-header"  style="margin-top: 10px;">
                    <div class="header">
                            <div class="header__inner">
                                <div class="header__top">
                                    <a href="/" ><img src="/img/logo1.png" alt=""></a>
                                    <div class="header__content header-content">
                                        <div class="header-content__top header-content-top">
                                            <div class="header-links">
                                                <span class="header-links__item"><a href="#"><img src="/img/yt.png" alt=""></a></span>  <span class="header-links__item"><a href="#"><img src="/img/fb.png" alt=""></a></span>  <span class="header-links__item"><a href="/s10">О&nbsp;бирже</a></span><span class="header-links__item"><a href="/s565/">Пресс-центр</a></span><span class="header-links__item"><a href="/ru/news">Ответы на вопросы</a></span><span class="header-links__item"><a href="/ru/events/">Контакты</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
           </div>

<?php $this->endBody() ?>
<script type="text/javascript">
$(function(){
    $(window).scroll(function() {
        if($(this).scrollTop() >= 128) {
            $('nav.header-menu').addClass('stickytop');
            $('#nonemenu').removeAttr('style');
        }
        else{
            $('nav.header-menu').removeClass('stickytop');
             $('#nonemenu').attr('style', 'display: none;');
        }
    });
});
</script>

</body>
</html>
<?php $this->endPage() ?>
