<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BooksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'id' => 'search-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],],
    ]); ?>

    <?= $form->field($model, 'bookid') ?>

    <?= $form->field($model, 'bookname') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'publishing') ?>

    <?= $form->field($model, 'categoryid') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'datein') ?>

    <?php // echo $form->field($model, 'quantity_in') ?>

    <?php // echo $form->field($model, 'quantity_out') ?>

    <?php // echo $form->field($model, 'quantity_loss') ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
