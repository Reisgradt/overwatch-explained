<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widget\rightPanel;
use yii\widgets\ActiveForm;
use frontend\models\searchForm;

AppAsset::register($this);

$search = new searchForm();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="main-block">
            <nav class="left-panel" id="main-nav-js">

                <div class="left-panel-list hidden" id="nav-list-js">
                    <div class="btn-nav btn-home">
                        <a href="<?= 'http://'.$_SERVER['HTTP_HOST'] . Yii::$app->params['pathPrefix'] ?>"></a>
                    </div>

                    <div class="btn-nav btn-search"></div>
                    <div class="btn-content btn-content-search hidden">
                        <div class="btn-content-search-text">
                            Что ищем?
                        </div>
                        <?php $form = ActiveForm::begin(['options' => ['class' => 'search-form']]); ?>
                            <?= $form->field($search, 'q')->label('')->textInput(['class' => 'nav-search']) ?>
                        <?php ActiveForm::end(); ?>
                    </div>

                    <div class="btn-nav btn-heroes"></div>
                    <div class="btn-content btn-content-heroes hidden">
                        <div class="btn-content-heroes-text">
                            Герои Overwatch
                        </div>
                        <ul class="heroes-list">

                            <li class="heroes-item_1">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/genji.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Гэндзи
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_2">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/reaper.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Жнец
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_3">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/makkri.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Маккри
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_4">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/soldier-76.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Солдат-76
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_5">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/tracer.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Трейсер
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_6">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/farra.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Фарра
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_7">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/bastion.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Бастион
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_8">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/krysavchik.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Крысавчик
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_9">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/mehj.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Мэй
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_10">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/rokovaya_vdova.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Роковая вдова
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_11">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/torborn.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Торбьорн
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_12">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/hanzo.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Хандзо
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_13">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/dva.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        D.Va
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_14">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/zarya.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Заря
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_15">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/rajnhardt.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Райнхардт
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_16">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/turbosvin.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Турбосвин
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_17">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/uinston.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Уинстон
                                    </div>
                                </a>
                            </li>


                             <li class="heroes-item_18">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/ana.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Ана
                                    </div>
                                </a>
                            </li>

                            <li class="heroes-item_19">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/angel.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Ангел
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_20">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/dzenyatta.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Дзенъятта
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_21">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/lusio.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Лусио
                                    </div>
                                </a>
                            </li>


                            <li class="heroes-item_22">
                                <a href=""><img src="<?= Yii::$app->params['pathPrefix'] ?>img/menu_heroes/simmetra.PNG" width="60" height="60" />
                                    <div class="heroes-name">
                                        Симметра
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="btn-nav btn-tournamets"></div>
                    <div class="btn-content btn-content-tournamets hidden">
                         <div class="btn-content-heroes-text">
                             Турниры
                        </div>
                        На данный момент никаких игр нет.
                    </div>
                    <div id="updown"></div>
                    <div class="btn-login"></div>
                    <div class="btn-content btn-content-tournamets hidden"></div>

                </div>
            </nav>

            <div class="content-wrapper">
                <header class="main-header">
                <div class="main-header-name"><a href="<?= $_SERVER['HTTP_HOST'].Yii::$app->params['pathPrefix'] ?>"><img src="<?= Yii::$app->params['pathPrefix'] ?>img/header/Overwatch-Explained.png" width="500" height="125"/></a></div>
                <div class="twitch-header">
                    <script src="http://player.twitch.tv/js/embed/v1.js"></script>
                    <div id="{PLAYER_DIV_ID}" class="twitch_player"></div>
                    <script type="text/javascript">
                        var options = {
                            width: 345,
                            height: 194,
                            channel: "{tressongz}",
                            autoplay: false
                            //video: "{VIDEO_ID}"
                        };
                        var player = new Twitch.Player("{PLAYER_DIV_ID}", options);
                        player.setVolume(0);
                    </script>
                </div>
                </header>
                <div class="content-zone">

        <?= Alert::widget() ?>
        <div class="news-section">
            <?= $content ?>
        </div>
        <?= rightPanel::widget() ?>

    </div>

    <!--Подвал сайта-->
    <footer class="main-footer">

        <div class="main-footer-item main-footer-login">
               <?php
                //if (!isset($_SESSION['user_id']) && empty($_SESSION['user_id'])) {
            ?>
            <a class="button-footer" href="">Войти</a>
            <a class="button-footer" href="">Регистрация</a>
            <?php
                //} else {
            ?>
<!--
            <a class="button-footer" href="">Профиль</a>
            <a class="button-footer" href="">Выйти</a>
-->
            <?php
                //}
            ?>
        </div>

        <div class="main-footer-item">
            Разделы сайта
            <ul>
                <li class="link-pager"><a href="">Герои</a></li>
                <li class="link-pager"><a href="">Карты</a></li>
                <li class="link-pager"><a href="">Статьи</a></li>
            </ul>
        </div>

        <div class="main-footer-item main-footer-about">
            О сайте
            <p class="footer-text">На сайте находится полезная информация по игре Overwatch, а также интересные новости, статьи и обзоры новинок.</p>
            <p class="footer-text">По вопросам и сотрудничеству можете обращаться по адрессу: support@overwatch-explained.ru</p>
            <p class="footer-text">Спасибо за инонки дизайнеру <a  class="footer-autor" href="http://www.flaticon.com/authors/freepik/2">Freepik</a>.</p>
        </div>


        <div class="main-footer-item">
            Мы также здесь:
            <div class="footer-icons">
                <a href="http://vk.com/overwatch_explained" class="vk-link"></a>
                <a href="https://www.youtube.com/channel/UCG0YFWhcw6DZfdlc5hq-0aA" class="youtube-link"></a>
                <a href="https://twitter.com/OW_Explained" class="twitter-link"></a>
                <a href="https://www.twitch.tv/tressongz" class="twitch-link"></a>
            </div>
        </div>

        <!--LiveInternet counter-->
        <div class="main-footer-item main-footer-stats">
            <script type="text/javascript">
                document.write("<a href='//www.liveinternet.ru/click' " +
                    "target=_blank><img src='//counter.yadro.ru/hit?t44.6;r" +
                    escape(document.referrer) + ((typeof (screen) == "undefined") ? "" :
                        ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
                            screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
                    ";" + Math.random() +
                    "' alt='' title='LiveInternet' " +
                    "border='0' width='31' height='31'><\/a>");
            </script>
        </div>
        <!--/LiveInternet-->


    </footer>

    </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
