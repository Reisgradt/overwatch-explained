<?php

/* @var $this yii\web\View */
    $this->registerCssFile(Yii::$app->params['pathPrefix'].'css/single_news.css');
    $this->title = 'Overwatch-explained';
?>
<article class="news">
            <header class="news-header">
                <h3>
                       <?= $post->header ?>

                    </h3>
                <div class="news-header-tags">
                           <?= $post->tagsLink ?>
                </div>
                <div class="tag-ribbon tag-ribbon__<?= $post->r_value_css ?>">
                    <?= $post->r_value ?>
                </div>
            </header>
            <div class="news-content">
                <div class="news-content-mainImg">
                    <img src="<?= $post->path_main_picture ?>" alt="<?= $post->header ?>">
                </div>
                <div class="news-content-html">
                    <?= $post->content ?>
                </div>
            </div>
            <footer class="news-footer">

                    <div class="news-footer-date news-footer-item">
                        <div class="news-footer-date-img"></div>
                        <div class="news-footer-text">
                            <?= $post->rus_date ?>
                        </div>
                    </div>
                    <div class="news-footer-views news-footer-item">
                        <div class="news-footer-views-img"></div>
                        <div class="news-footer-text">
                            <?= $post->views ?>
                        </div>
                    </div>
                    <div class="news-footer-likes news-footer-item">
                        <div class="news-footer-likes-img"></div>
                        <div class="news-footer-text">
                            <?= $post->likes ?>
                        </div>
                    </div>
                </footer>
        </article>
