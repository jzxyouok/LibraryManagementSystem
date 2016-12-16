<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Books */

$this->title = '添加图书';
$this->params['breadcrumbs'][] = ['label' => '图书管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
        'data'=>$data,
    ]) ?>

</div>
