<?php

namespace common\models;


use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "tips".
 *
 * @property integer $tips_id
 * @property string $tips_content
 * @property integer $tips_source
 */
class Tips extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tips';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tips_source'], 'integer'],
            [['tips_content'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tips_id' => 'Tips ID',
            'tips_content' => 'Tips Content',
            'tips_source' => 'Tips Source',
        ];
    }

    public static function getRandomTip() {
        $tip = Tips::find()->orderBy(new Expression('rand()'))->one();
        return $tip;
    }
}
