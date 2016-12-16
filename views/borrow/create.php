<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Borrow */

$this->title = '借阅图书';
$this->params['breadcrumbs'][] = ['label' => '借阅管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="borrow-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
