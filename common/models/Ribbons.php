<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ribbons".
 *
 * @property integer $ribbons_id
 * @property string $value
 * @property string $value_css
 */
class Ribbons extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ribbons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value', 'value_css'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ribbons_id' => 'Ribbons ID',
            'value' => 'Value',
            'value_css' => 'Value Css',
        ];
    }
}
