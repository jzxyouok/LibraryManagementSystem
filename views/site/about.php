<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '关于';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        数据库原理课程设计.<br>
        使用Yii2框架开发.<br>
<?=Html::a('Blog','http://www.xmsec.cc')?>


    </p>


</div>
