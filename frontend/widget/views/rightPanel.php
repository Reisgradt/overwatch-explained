<?php
    use yii\helpers\Url;
?>


<div class="right-aside">
        <aside class="right-panel">
            <div class="right-panel-item">
                <header class="right-panel-item-header">
                    Популярные публикации
                </header>
                <div class="right-panel-item-content">
                    <?php
                        foreach ($topNews as $news) {
                            echo '<a href="'. Url::to(['/site/article', 'id' => $news->id]) .'">'.$news->header.'</a>';
                        }
                    ?>
                </div>
            </div>

            <div class="right-panel-item">
                <header class="right-panel-item-header">
                    Советы
                </header>
                <div class="right-panel-item-content">
                    <div class="tips">
                        <div class="tips_idea">
                            <img src="<?= Yii::$app->params['pathPrefix']?>img/tips/lamp.PNG">
                        </div>
                        <div class="tips_text">
                            <?= $tip->tips_content ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="right-panel-item">
                <header class="right-panel-item-header">
                    Потасовка недели
                </header>
                <div class="right-panel-item-content">

                        <div class="scrimmage">
                            <div class="scrimmage_icon"><div class="scrimmage_icon_border"><img width="200px" height="300px" src="<?= Yii::$app->params['pathPrefix'] ?>img/scrimmage/<?= $scrimmage->SM_ICON ?>"></div></div>
                            <div class="scrimmage_title"><strong><?= $scrimmage->SM_NAME ?></strong></div>
                            <div class="scrimmage_description">"<?= $scrimmage->SM_DESCRIPTION ?>"
                                    <br>
                                    <button class="scrimmage_rules_btn  scrimmage_button">Правила</button>
                                    <button class="scrimmage_review_btn  scrimmage_button">Рецензия</button>
                            </div>

                            <ul class="scrimmage_rules hidden">
                                <?php
                                    if ($scrimmage->SM_HEROES != NULL):
                                ?>
                                    <li class="scrimmage_rules_heroes">
                                        Герои: <?= $scrimmage->SM_HEROES ?>
                                    </li>
                                <?php
                                    endif;
                                    if ($scrimmage->SM_HEALTH != NULL):
                                ?>
                                    <li class="scrimmage_rules_health">
                                        <?= $scrimmage->SM_HEALTH ?>% здоровья
                                    </li>
                                <?php
                                    endif;
                                    if ($scrimmage->SM_RECOVERY != NULL):
                                ?>
                                    <li class="scrimmage_rules_spells">
                                       <?= $scrimmage->SM_RECOVERY ?>% к восстановлению способностей
                                    </li>
                                <?php
                                    endif;
                                    if ($scrimmage->SM_POWER != NULL):
                                ?>
                                    <li class="scrimmage_rules_superspells">
                                        <?= $scrimmage->SM_POWER ?>% к зарядке суперспособностей
                                    </li>
                                <?php
                                    endif;
                                    if ($scrimmage->SM_MAPS != NULL):
                                ?>
                                    <li class="scrimmage_rules_maps">Поле боя:
                                        <?= $scrimmage->SM_MAPS ?>
                                    </li>
                                <?php
                                    endif;
                                    if ($scrimmage->SM_MEMBERS != NULL):
                                 ?>
                                    <li class="scrimmage_rules_members">
                                        Размер команды: <?= $scrimmage->SM_MEMBERS ?>
                                    </li>
                                <?php
                                   endif;
                                   if ($scrimmage->SM_TIME != NULL):
                                ?>
                                    <li class="scrimmage_rules_time">
                                        Длительность матча в минутах: <?= $scrimmage->SM_TIME ?>
                                    </li>
                                <?php
                                    endif;
                                    if ($scrimmage->SM_MORE_INFO != NULL):
                                ?>
                                    <li class="scrimmage_rules_more_info">
                                        Дополнительное условие: <?= $scrimmage->SM_MORE_INFO ?>
                                    </li>
                                <?php
                                   endif;
                                ?>
                            </ul>

                            <div class="scrimmage_review hidden">
                                <p>
                                    <?= $scrimmage->SM_REVIEW ?>
                                </p>
                            </div>
                        </div>
                </div>
            </div>

        </aside>
    </div>
