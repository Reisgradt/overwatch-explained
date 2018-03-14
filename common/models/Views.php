<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "views".
 *
 * @property integer $views_id
 * @property string $user_ip
 * @property integer $news_id
 * @property string $views_date
 */
class Views extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'views';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_ip', 'views_date'], 'required'],
            [['user_ip', 'news_id'], 'integer'],
            [['views_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'views_id' => 'Views ID',
            'user_ip' => 'User Ip',
            'news_id' => 'News ID',
            'views_date' => 'Views Date',
        ];
    }
}
