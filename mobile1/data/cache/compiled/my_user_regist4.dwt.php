<!doctype html>
<html>
<head>
<meta name="Generator" content="ECTouch 1.0" />
	<title><?php echo $this->_var['page_title']; ?> 触屏版</title>
	<meta name = "viewport" content="user-scalable=0"/>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/regist4.css">
	<script src="__PUBLIC__/js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/regist4.js" type="text/javascript"></script>
</head>
<body>
	<div id="all">
		<div id="header">
			<div class="top">
				<div class="top_left">
					<a href="javascript:window.history.back(-1);">
						<img src="themes/default/images/back.png" alt="">
					</a>
				</div>
				<div class="top_center">
					<p>手机快速注册</p>
				</div>
				<div class="top_right">
				</div>
			</div>
		</div>
		<div id="content">
			<div class="con_top">
				<p>请设置登录密码</p>
			</div>
			<form action="<?php echo url('user/my_regist5');?>" method="post">
				<div class="form_top">
					<input class="psw" type="password" placeholder="请输入6-20位字符" name="password" minlength="20" maxlength="20" onkeyup="this.value=this.value.replace(/\W/g,'')" />
				</div>
				<div class="form_bot">
					<p>
						<input type="checkbox">密码可见
					<p class="ptwo">密码由6-20位字母、数字或半角符号组成、不能是10以下纯数字/字母/半角符号/字母需区分大小写</p>
					<!-- <a id="sub" href="regist5.html" class="disabled">下一步</a> -->
					<input type="submit" value="下一步" id="sub">
					<span>遇到问题？您可以<a href="javascript:">联系客服</a>。</span>
				</div>
			</form>
		</div>
	</div>

</body>
</html>