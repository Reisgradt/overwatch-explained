<?php
    use yii\data\Pagination;
    use yii\widgets\LinkPager;

    $this->registerCssFile(Yii::$app->params['pathPrefix'].'css/news.css');
    $this->title = 'Overwatch-explained';
?>

    <?php if ($q == '') { ?>
           <h3 class="news">Вы задали пустой поисковой запрос!</h3>
    <?php } else { ?>
            <h3 class="news">Результаты поиска: <?= $q ?></h3>
        <?php if (!$posts) { ?>
            <p>Ничего не найдено!</p>
        <?php } else {
            foreach ($posts as $post):
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
                    <div class="news-content-imgZone">
                        <img src="<?= $post->path_main_picture ?>" alt="<?= $post->header ?>">
                    </div>
                    <div class="news-content-article">
                        <div class="news-content-article-text">
                            <?= mb_substr(($post->deleteAllImgs()), 0, 500, "UTF-8"); ?>...
                        </div>

                    </div>
                </div>
                <footer class="news-footer">
                    <a href="<?=
                        yii::$app->urlManager->createUrl(['site/news', 'id' => $post->id])
                    ?>" class="readMore">
                                    Читать далее
                                </a>
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
    <?php
           endforeach;
        }
    }
    ?>

    <?= LinkPager::widget([
        'pagination' => $pagination,
        'firstPageLabel' => 'Начало',
        'lastPageLabel' => 'Конец',
        'prevPageLabel' => '&laquo;'
]) ?>
