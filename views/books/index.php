<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '图书信息管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if(Yii::$app->getSession()->hasFlash('success')):?>
    <div class="flash-notice">
        <?php echo Alert::widget([
            'options' => [
                'class' => 'alert-success', //这里是提示框的class
            ],
            'body' => Yii::$app->getSession()->getFlash('success'), //消息体
        ]);?>
    </div>
<?php endif?>
<?php if(Yii::$app->getSession()->hasFlash('fail')):?>
    <div class="flash-notice">
        <?php echo Alert::widget([
            'options' => [
                'class' => 'alert-warning', //这里是提示框的class
            ],
            'body' => Yii::$app->getSession()->getFlash('fail'), //消息体
        ]);?>
    </div>
<?php endif?>
<div class="books-index">

    <h2><?= Html::encode('图书信息管理') ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加图书', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bookid',
            'bookname',
            'author',
            'publishing',
            'categoryid',
            [
                'label'=>'类别',
               // 'attribute'=>'categoryid',
                'value'=>'category.category',
            ],
             'price',
            // 'datein',
            // 'quantity_in',
            // 'quantity_out',
            // 'quantity_loss',

            [
                'header' => '操作',
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{borrow}',
                'buttons' => [
                    'borrow' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-saved"></span>', $url, [
                            'title' => '借阅',
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
