<?php
use yii\data\Pagination;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = 'Overwatch-explained';
$this->registerCssFile('/Overwatch-explained/css/news.css');
?>

<?php
    foreach ($posts as $post) {
        include("article.php");
    }
?>


<?= LinkPager::widget([
        'pagination' => $pagination,
        'firstPageLabel' => 'Начало',
        'lastPageLabel' => 'Конец',
        'prevPageLabel' => '&laquo;'
    ])
?>
