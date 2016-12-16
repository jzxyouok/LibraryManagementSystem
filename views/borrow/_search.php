<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BorrowSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="borrow-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bid') ?>

    <?= $form->field($model, 'readerid') ?>

    <?= $form->field($model, 'bookid') ?>

    <?= $form->field($model, 'dateborrow')->hint('输入查询截至日期') ?>

    <?= $form->field($model, 'datereturn') ?>

    <?php // echo $form->field($model, 'loss') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
