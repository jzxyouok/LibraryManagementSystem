<?php

/* @var $this yii\web\View */

$this->title = '后台管理';
?>
<div class="site-index">

    <div class="jumbotron">
        <br>
        <h2>后台管理入口 </h2>
        <br>
        <p class="lead"></p>

        <p>
            <a class="btn btn-lg btn-success" href="index.php?r=books">图书管理</a>
            <a class="btn btn-lg btn-success" href="index.php?r=borrow">借阅管理</a>

         </p>

    </div>


    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h2>借阅列表</h2>

                <h4>列出当前及历史借阅记录<br>未归还的图书优先显示 </h4>

                <p><a class="btn btn-default" href="index.php?r=admin/borrowlist">借阅列表 &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>读者管理</h2>

                <h4>根据读者姓名或者读者号<br>查询信息或维护信息</h4>

                <p><a class="btn btn-default" href="index.php?r=reader">管理入口 &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>借阅证办理</h2>

                <h4>填写详细信息，自动分配ID<br>使用ID登录，密码与ID相同</h4>

                <p><a class="btn btn-default" href="index.php?r=admin/reguser">借阅证办理 &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>挂失办理</h2>

                <h4>图书挂失处理<br>借阅证挂失处理</h4>

                <p>
                    <a class="btn btn-default" href="index.php?r=borrow">图书挂失 &raquo;</a>
                    <a class="btn btn-default" href="index.php?r=admin/queryuser">借阅证挂失 &raquo;</a>
                </p>
            </div>
        </div>

    </div>
</div>

