<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BorrowSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '借阅表管理';
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
<div class="borrow-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <h4> * 输入 借书日期 及 应还日期 可查询截至日期前借阅记录</h4>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('借阅图书', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('逾期邮件提醒', ['mailto'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'readerid',
            [
                'label'=>'姓名',
                'attribute'=>'readername',
                'value'=>'readers.readername',
            ],

            [
                'attribute'=>'bookid',
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

            [
                'label'=>'借书日期',
                'attribute'=>'dateborrow',
            ],
            'datereturn',
            [
                'header'=>'状态',
                'content'=>function($dataProvider){
                    $content='未归还';
                    if (strtotime(date('Y-m-d'))>strtotime($dataProvider['datereturn']))
                        $content='逾期未还';
                    return $dataProvider['loss'] === null ? '<B><font color=#A52A2A>'.$content.'</font></B>' : ($dataProvider['loss'] == 1 ? '已丢失' : '已归还');
                 }
            ],
            //'loss',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作',
                'template' => '{return} {loss}',
                'buttons' => [
                    'loss' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-remove-sign"></span>', $url, [
                            'title' => '图书挂失',
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ]);
                    },
                    'return' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, [
                            'title' => '图书归还',
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ]);
                    },
                    'mail' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-envelope"></span>', $url, [
                            'title' => '邮件提醒',
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ]);
                    },
                ],

            ],
        ],
    ]); ?>
</div>
