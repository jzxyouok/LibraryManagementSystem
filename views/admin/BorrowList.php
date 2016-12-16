<?php
/**
 * Created by PhpStorm.
 * User: xiaomo
 * Date: 2016/11/19
 * Time: 0:29
 */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '图书借阅列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>查询结果</h1>

<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'readerid',
        [
            'label'=>'姓名',
            'attribute'=>'readername',
            'value'=>'readers.readername',
        ],
        [
            'label'=>'书号',
            'format'=>'raw',
            'value' => function($dataProvider){
                $url = "index.php?r=books/view&id=".$dataProvider['bookid'];
                return Html::a($dataProvider['bookid'], $url, ['title' => '详细信息']);

            }
        ],
        [
            'label'=>'书名',
            'attribute'=>'bookname',
            'value'=>'books.bookname',
        ],

        'dateborrow',
        'datereturn',
        [
            'label'=>'状态',
            'format'=>'raw',
            'content' => function($dataProvider) {
                $content='未归还';
                if (strtotime(date('Y-m-d'))>strtotime($dataProvider['datereturn']))
                    $content=$content.'（逾期）';
                return $dataProvider['loss'] === null ? '<B><font color=#A52A2A>'.$content.'</font></B>' : ($dataProvider['loss'] == 1 ? '已丢失' : '已归还');
            }
        ],





        # 'email:email',


    ],
]);
?>
