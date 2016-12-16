<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Books */

$this->title = '更新信息: ' . $model->bookid;
$this->params['breadcrumbs'][] = ['label' => '图书管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bookid, 'url' => ['view', 'id' => $model->bookid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="books-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
