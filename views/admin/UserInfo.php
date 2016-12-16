<?php
/**
 * Created by PhpStorm.
 * User: xiaomo
 * Date: 2016/11/25
 * Time: 16:15
 */
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '读者信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>查询结果</h1>
<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'readerid',
        [
            'attribute' => 'readername',
            'content' => function($dataProvider){
                return $dataProvider['readername'];
            },
        ],

        'sex',
        'birthday',
        'phone',
        'mobile',
        'cardname',
        'cardid',
        'level',
        'day',

        [
            'class' => 'yii\grid\ActionColumn',
            'header' => '挂失',
            'template' => '{loss}',

            'buttons' => [
                'loss' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-edit"></span>', $url, [
                        'title' => '挂失',
                        'data-method' => 'post',
                        'data-pjax' => '0',
                    ]);
                },
            ],
        ],

        # 'email:email',


    ],
]);
;?>
