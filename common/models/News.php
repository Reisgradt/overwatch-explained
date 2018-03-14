<?php

namespace common\models;

use Yii;
use common\models\Ribbons;
use yii\helpers\Url;
/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $header
 * @property string $tags
 * @property integer $ribbon
 * @property string $main_picture
 * @property string $content
 * @property string $post_date
 * @property integer $views
 * @property integer $likes
 */
class News extends \yii\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public $r_value;
    public $r_value_css;
    public $path_main_picture;
    public $tagsLink;
    public $rus_date;

    public static function tableName()
    {
        return 'news';
    }

    private function rdate($param, $time=0) {
        if (intval($time) == 0)
            $time = time();
        $MonthNames = array("Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря");
        if (strpos($param, 'M') === false)
            return date($param, $time);
        else
            return date(str_replace('M', $MonthNames[date('n', $time) - 1], $param), $time);
    }

    public function afterFind() {
        $ribbons = Ribbons::find()->where(['ribbons_id' => $this->ribbon])->all();
        $this->r_value = $ribbons[0]->value;
        $this->r_value_css = $ribbons[0]->value_css;

        $this->path_main_picture = Yii::$app->params['pathPrefix'].'img/content/' . $this->main_picture;

        $this->rus_date = $this->rdate('d M Y', $this->post_date);

        $arr_tags = explode(", ", $this->tags);
        $this->tagsLink = '';
        foreach ($arr_tags as $tag) {
            if ($tag == end($arr_tags)) {
                $this->tagsLink .= '<a href="'.Url::to(['/site/search', 'q' => $tag]).'">'.$tag.'</a>';
            } else {
                $this->tagsLink .= '<a href="'.Url::to(['/site/search', 'q' => $tag]).'">'.$tag.'</a>, ';
            }
        }
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ribbon', 'views', 'likes'], 'integer'],
            [['content'], 'string'],
            [['post_date'], 'safe'],
            [['header', 'tags'], 'string', 'max' => 100],
            [['main_picture'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header' => 'Header',
            'tags' => 'Tags',
            'ribbon' => 'Ribbon',
            'main_picture' => 'Main Picture',
            'content' => 'Content',
            'post_date' => 'Post Date',
            'views' => 'Views',
            'likes' => 'Likes',
        ];
    }

    public function deleteAllImgs() {
        return strip_tags($this->content, '<p><a><br>');
    }

}
