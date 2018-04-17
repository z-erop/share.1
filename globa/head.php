
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
					<div id='logo'><a href=""></a></div>
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
		<div id="mask">

		</div>

		<div id="login_reg">
			<!--<div class="stage">-->

			<form id="login">
				<div id="register-active"><img src="img_index/开关3.png" alt="" />切换注册</div>
				<h3>登录</h3>
				<p>
					<label class="icon" for="username"></label>
					<input class="input-control" id="username" type="text" placeholder="请输入用户名" name="username" required="" aria-required="true">
					<span></span>
				</p>

				<p>
					<label class="icon" for="password"></label>
					<input class="input-control" id="password" type="password" placeholder="请输入密码" name="passwd" required="" aria-required="true">
					<span></span>
				</p>

				<p class="safe">
					<label class="remembermetext" for="rememberme"><input name="rememberme" type="checkbox" checked="checked" id="rememberme" class="rememberme" value="forever">记住我的登录</label>
					<a class="lost" href="http://www.jiawin.com/wp-login.php?action=lostpassword">忘记密码？</a>
				</p>

				<p>
					<input class="submit" type="button" id='loginbtn'value="登录" name="submit">
				</p>
				<a class="close"></a>
			</form>

			<form id="reg">
				<div id="login-active"><img src="img_index/开关4.png" alt="" />切换登录</div>
				<h3>注册</h3>
				<p>
					<label class="icon" for="user_name"></label>
					<input class="input-control" id="user_name" type="text" placeholder="请输入用户名" name="username" required="" aria-required="true">
					<span></span>
				</p>
				<p>
					<label class="icon" for="password"></label>
					<input class="input-control" id="pass_word" type="password" placeholder="请输入密码" name="passwd" required="" aria-required="true">
					<span></span>
				</p>
				<p>
					<label class="icon" for="repass_word"></label>
					<input class="input-control" id="repass_word" type="password" placeholder="再次输入密码"  required="" aria-required="true">
					<span></span>
				</p>
				<p>
					<input class="submit" type="button" id="regbtn" value="注册" name="submit">
				</p>
				<div class="other-sign">
					<p>您也可以使用第三方帐号快捷注册</p>
					<div>
						<a rel="nofollow" class="qqlogin" href="http://www.jiawin.com/oauth/qq"><i class="fa fa-qq"></i>QQ一键注册</a>
					</div>
				</div>
			</form>
				
			<!--</div>-->
		</div>