<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Readers */
/* @var $form ActiveForm */
$this->title = '读者注册';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-Reguser">

    <?php $form = ActiveForm::begin([
        'id' => 'reg-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?php if($model['readerid']>0) {echo '<h3>添加成功，请记住读者号，将作为登录用户名，密码默认为读者号</h3>'; echo $form->field($model, 'readerid');} ?>
        <?= $form->field($model, 'readername') ?>

        <?= $form->field($model, 'sex')->dropDownList(ArrayHelper::map([0=>[ 'sexid'=>'男','sex'=>'男' ], 1=>['sexid'=>'女','sex'=>'女'],],'sexid', 'sex')); ?>
        <?= $form->field($model, 'birthday')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => '请选择日期'],
            'pluginOptions' => [
                'autoclose' => true,
                'todayHighlight' => true,
                'format' => 'yyyy-mm-dd',

            ]
        ]); ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'mobile') ?>
        <?= $form->field($model, 'cardname')->dropDownList(ArrayHelper::map([0=>[ 'cardnameid'=>'一卡通','cardname'=>'一卡通' ], 1=>['cardnameid'=>'身份证','cardname'=>'身份证'],],'cardnameid', 'cardname'))->label("证件类型"); ?>
        <?= $form->field($model, 'cardid') ?>
        <?= $form->field($model, 'level')->dropDownList(ArrayHelper::map($data,'level', 'level')); ?>
        <?= $form->field($model, 'day')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'autoclose' => true,
                'todayHighlight' => true,
                'format' => 'yyyy-mm-dd',
            ]
        ]); ?>
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?php if($model['readerid']<=0)
                    echo Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- admin-Reguser -->
