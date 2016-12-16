<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Alert;

/* @var $this yii\web\View */
/* @var $model app\models\Borrow */

$this->title = $model->bid;
$this->params['breadcrumbs'][] = ['label' => '借阅管理', 'url' => ['index']];
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
<div class="borrow-view">



    <p>
        <?= Html::a('更新信息', ['update', 'id' => $model->bid], ['class' => 'btn btn-primary']) ?>
        <?php Html::a('Delete', ['delete', 'id' => $model->bid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bid',
            'readerid',
            'bookid',
            'dateborrow',
            'datereturn',
            'loss',

        ],
    ]) ?>

</div>
