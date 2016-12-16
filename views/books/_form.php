<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(['id' => 'create-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],],]); ?>

    <?= $form->field($model, 'bookid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bookname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publishing')->textInput(['maxlength' => true]) ?>

    <?php $form->field($model, 'categoryid')->textInput() ?>
    <?= $form->field($model, 'categoryid')->dropDownList(\yii\helpers\ArrayHelper::map($data,'categoryid', 'category'),['prompt' => '请选择类别'])->label("类别"); ?>
    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'datein')->textInput() ?>

    <?= $form->field($model, 'quantity_in')->textInput() ?>

    <?= $form->field($model, 'quantity_out')->textInput() ?>

    <?= $form->field($model, 'quantity_loss')->textInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
             <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
