<?php
/**
 * Created by PhpStorm.
 * User: xiaomo
 * Date: 2016/11/18
 * Time: 17:03
 */

/* @var $this yii\web\View */

$this->title = '图书信息查询';
$this->params['breadcrumbs'][] = $this->title;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin([
    'id' => 'query-form',
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]); ?>

    <?= $form->field($model, 'bookname')->label("书名") ?>
    <?= $form->field($model, 'categoryid')->dropDownList(ArrayHelper::map($data,'categoryid', 'category'),['prompt' => '请选择类别'])->label("类别"); ?>

    <?= $form->field($model, 'author')->label("作者") ?>
    <?= $form->field($model, 'publishing')->label("出版社") ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('查询', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>