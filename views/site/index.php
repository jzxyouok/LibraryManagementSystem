<?php

/* @var $this yii\web\View */
use yii\helpers\html;
$this->title = '图书管理系统';
?>
<div class="site-index">

    <div class="jumbotron">

        <h3></h3>

       <?=html::img('http://img.architbang.com/201303/1362466177319158250_1.jpg',['width'=>'460'])?>

      <!--  <p><a class="btn btn-lg btn-success" href="/basic/web/index.php?r=site%2Fquery">图 书 查 询</a></p> -->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>图书查询</h2>

                <p>根据书名、作者、类别、出版社查询</p>

                <p><a class="btn btn-default" href="index.php?r=site/query">查询入口 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>我的借阅</h2>

                <p>查看我的借阅列表</p>

                <p><a class="btn btn-default" href="index.php?r=site/borrow">查询入口 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>关于 </h2>

                <p>关于这个图书管理系统..</p>

                <p><a class="btn btn-default" href="index.php?r=site/about">关于 &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
