<?php
/**
 * Created by PhpStorm.
 * User: xiaomo
 * Date: 2016/11/23
 * Time: 17:31
 */
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '我的借阅';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>查询结果</h1>
<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'bookid',
        [
            'label'=>'书名',
            'value'=>'books.bookname',
        ],
        //'categoryid'
        # 'email:email',
        [
            'attribute' => 'dateborrow',
            'format' =>  ['date', 'php:Y-m-d'],
        ],
        [
            'attribute' => 'datereturn',
            'format' =>  ['date', 'php:Y-m-d'],
        ],
        [
            'label'=>'状态',
            'content' => function($dataProvider) {
                return $dataProvider['loss'] === null ? '<B><font color=#A52A2A>未归还</font></B>' : ($dataProvider['loss'] == 1 ? '已丢失' : '已归还');
            }
        ]


    ],
]); ?>

