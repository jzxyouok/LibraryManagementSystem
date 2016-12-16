<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '读者管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="readers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php Html::a('Create Readers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'readerid',
            'readername',
            'sex',
            'birthday',
            //'phone',
             'mobile',
             'cardname',
             'cardid',
             'level',
             'day',

            [
                'header' => '操作',
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}',

            ],
        ],
    ]); ?>
</div>
