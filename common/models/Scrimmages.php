<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "scrimmages".
 *
 * @property integer $SM_ID
 * @property string $SM_ICON
 * @property string $SM_NAME
 * @property string $SM_DESCRIPTION
 * @property string $SM_REVIEW
 * @property string $SM_HEROES
 * @property integer $SM_HEALTH
 * @property integer $SM_RECOVERY
 * @property integer $SM_POWER
 * @property string $SM_MAPS
 * @property string $SM_MORE_INFO
 * @property integer $SM_MEMBERS
 * @property integer $SM_TIME
 */
class Scrimmages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scrimmages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SM_HEALTH', 'SM_RECOVERY', 'SM_POWER', 'SM_MEMBERS', 'SM_TIME'], 'integer'],
            [['SM_ICON', 'SM_NAME', 'SM_DESCRIPTION'], 'string', 'max' => 100],
            [['SM_REVIEW'], 'string', 'max' => 200],
            [['SM_HEROES', 'SM_MAPS'], 'string', 'max' => 150],
            [['SM_MORE_INFO'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SM_ID' => 'Sm  ID',
            'SM_ICON' => 'Sm  Icon',
            'SM_NAME' => 'Sm  Name',
            'SM_DESCRIPTION' => 'Sm  Description',
            'SM_REVIEW' => 'Sm  Review',
            'SM_HEROES' => 'Sm  Heroes',
            'SM_HEALTH' => 'Sm  Health',
            'SM_RECOVERY' => 'Sm  Recovery',
            'SM_POWER' => 'Sm  Power',
            'SM_MAPS' => 'Sm  Maps',
            'SM_MORE_INFO' => 'Sm  More  Info',
            'SM_MEMBERS' => 'Sm  Members',
            'SM_TIME' => 'Sm  Time',
        ];
    }
    public static function setScrimmages($id) {
        $lastScr = Scrimmages::findOne()->where(['current' => 1]);
        $lastScr->current = null;
        $lastScr->update();

        $newScr = Scrimmages::findOne()->where(['SM_ID' => $id]);
        $newScr->current = 1;
        $newScr->update();
    }
}
