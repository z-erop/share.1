<?php
	require './page.php';
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="css_index1/header.css" type="text/css" />
		<script src="js_index1/jquery-1.11.0.min.js"></script>
		<script src="js_index1/index.js"></script>
		<script src="js_index1/aj.js"></script>
	</head>

	<body>
	
		<header id="header">
			<div class="content">
				<div class="nav">
					<div id='logo'><a href="#"></a></div>
					<ul id='nav-list'>
						<li>
							<a href="../article/article.php">文章</a>
						</li>
						<li>
							<a href="../image/imagelist.php">美图</a>
						</li>
						<li>
							<a href="../about/juewei.html">关于</a>
						</li>
						<li>
							<a href="../about/liuyan.html">留言</a>
						</li>
					</ul>
					<div id='search'>
						<form method='get' action=''>
							<span class='search-icon sicon1'><img src="img_index/search.png"/></span>
							<span class='input'>
							<div class="search-input-wrapper">
								<span class='search-icon'><img src="img_index/search.png"/></span>
							<span class='input'>
									<input type="hidden"/>
								<input type="search"  class='search-input' name='' />
								<button type='submit' class='sbtn'></button>
								<!--<div class="close"><img src="img_index/close.png" alt="" /></div>
								</span>-->

					</div>
					</form>
				</div>

				<div class="user">
					<div class='login'>
						<a href="javascript:;">登录</a>
					</div>
					<div class='reg'>
						<a href="javascript:;">注册</a>
					</div>
					<div class="my hide">
					<div class="user_admin">我的<img src="" alt="" /></div>
					<div class="user_img"><img src="" alt="" width='30' height='30'/></div>
						<div class="user_panel">
							<a href=""></a>
							<a href="">发布文章</a>
							<a href="">上传美图</a>
							<a href="">编辑资料</a>
							<a href="./exit.php">退出账号</a>
						</div>
					</div>
				</div>

			</div>
			</div>
			</div>
		</header>
