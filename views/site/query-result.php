<?php
/**
 * Created by PhpStorm.
 * User: xiaomo
 * Date: 2016/11/19
 * Time: 0:29
 */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '图书信息查询';
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1>查询结果</h1>
<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'bookid',
        [
            'attribute' => 'bookname',
            'content' => function($dataProvider){
                return $dataProvider['bookname'];
            },
        ],
        'author','publishing',
        [
            'label'=>'类别',
            'attribute'=>'categoryid',
            'value'=>'category.category',
        ]
        //'categoryid'
        ,'price',
       # 'email:email',
        [
            'attribute' => 'datein',
            'format' =>  ['date', 'php:Y-m-d'],
        ],[
            'header' => '现库存',
            'content' => function($dataProvider){
                return $dataProvider['quantity_in']-$dataProvider['quantity_out']-$dataProvider['quantity_loss'];
            },
        ],
        /*[
            'class' => 'yii\grid\ActionColumn',
            'header' => '操作',
            'template' => '{view}{update}{password}{delete}',
            'headerOptions' => ['width' => '128', 'class' => 'padding-left-5px',],
            'contentOptions' => ['class' => 'padding-left-5px'],
            'buttons' => [
                'password' => function ($url, $model, $key) {
                    return Html::a('<span class="glyphicon glyphicon-edit"></span>', $url, [
                        'title' => '修改密码',
                        'data-method' => 'post',
                        'data-pjax' => '0',
                    ]);
                },
            ],
        ],*/
    ],
]); ?>
