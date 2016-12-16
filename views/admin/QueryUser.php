<?php
/**
 * Created by PhpStorm.
 * User: xiaomo
 * Date: 2016/11/18
 * Time: 17:03
 */

/* @var $this yii\web\View */

$this->title = '读者信息管理';
$this->params['breadcrumbs'][] = $this->title;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\bootstrap\Alert;
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

<?php $form = ActiveForm::begin([
    'id' => 'query-form',
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]); ?>

<?= $form->field($model, 'readerid')->label("读者号") ?>
<?= $form->field($model, 'readername')->label("读者姓名") ?>



    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('查询', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>