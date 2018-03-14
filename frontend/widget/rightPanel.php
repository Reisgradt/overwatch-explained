<?php
    namespace frontend\widget;

    use yii\base\Widget;
    //use yii\helpers\Html;
    use common\models\News;
    use common\models\Tips;
    use common\models\Scrimmages;

class rightPanel extends Widget {

    public function run() {
        $topNews = News::find()->orderBy(['views' => SORT_DESC])->limit(5)->all();

        $tip = Tips::getRandomTip();

        $scrimmage = Scrimmages::find()->where(['current' => 1])->one();

        return $this->render('rightPanel', [
            'topNews' => $topNews,
            'tip' => $tip,
            'scrimmage' => $scrimmage
        ]);
    }
}
