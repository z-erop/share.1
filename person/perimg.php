﻿<?php 
    isset($_SESSION) || session_start();
    //必须是登录了才能进来
    if(!isset($_SESSION['username']) || !$_SESSION['username']){
      //跳转到登录页面
      header('Location:../admin/login.php');
      exit;
    };
    require '../common/db_connect.php';
    $x = $mydb -> getOneData('user', 'username, photo, usersign, regtime', 'username = "'.$_SESSION['username'].'"');
    $n = strtotime($x['regtime']);
    $m = date('Y年m月', $n);
    $p = $mydb -> getData('image', 'title', 'author = "'.$_SESSION['username'].'" AND status = 1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>觉唯的图片分享</title>
    <!--<link href="css-personal/bootstrap.min.css" rel="stylesheet">-->
    <link href="css-personal/personal.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="fotn">
        <div class="fotnt">
        <img src="<?php echo $x['photo']?>"></div>
    </div>
    <div class="userna"><?php echo $x['username'];?></div>
    <div class="userdes"><?php echo $x['usersign'];?></div>
    <div class="usermeta"><?php echo $m;?>注册</div>
</header>
<div class="index">
    <div class="section">
        <nav>
            <ul class="navul">
                <li><a href="perarticle.php">文章</a></li>
                <li class="navli"><a href="#">图片</a></li>
                <li><a href="perlike.php">喜欢</a></li>
            </ul>
        </nav>
        <article>
        <?php
    if( empty($p[0]) ){
        echo "ta还没发布任何内容";
    }else{
        foreach ($p as $k => $v) {
            echo $v['title'];
            echo "<br>";
        }
    };
    ?>
        </article>
    </div>
    <div class="content">

    </div>
    <footer>
    </footer>
</div>
</body>
</html>