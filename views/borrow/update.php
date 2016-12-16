<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Borrow */

$this->title = '更新借阅信息: ' . $model->bid;
$this->params['breadcrumbs'][] = ['label' => '借阅管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bid, 'url' => ['view', 'id' => $model->bid]];
$this->params['breadcrumbs'][] = '更新借阅信息';
?>
<div class="borrow-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
