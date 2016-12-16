<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Readers */

$this->title = '更新信息: ' . $model->readername;
$this->params['breadcrumbs'][] = ['label' => 'Readers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->readerid, 'url' => ['view', 'id' => $model->readerid]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="readers-update">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
