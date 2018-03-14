<?php
    namespace frontend\models;

    use yii\base\Model;
    use common\models\News;

class searchForm extends Model {
    public $q;

    public function rules() {
        return [
            ['q', 'string']
        ];
    }
}
