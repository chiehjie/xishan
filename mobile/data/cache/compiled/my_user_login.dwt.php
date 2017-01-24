<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $this->_var['page_title']; ?> 触屏版</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/mui.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/Land.css">
</head>
<body class="bgImg">
<form class="mui-input-group" action="<?php echo url('user/dologin');?>" method="post">
    <div class="mui-input-row">
        <label><?php echo $this->_var['lang']['username']; ?>：</label>
        <input type="text" class="" placeholder="用户名/邮箱/手机号" name="username">
    </div>
    <div class="mui-input-row">
        <label><?php echo $this->_var['lang']['label_password']; ?>：</label>
        <input type="password" class="input-password" placeholder="请输入密码" name="password">
    </div>
    <div class="ForgetPassword">
        <a href="<?php echo url('user/my_regist');?>"><label class="mui-left">手机快速注册</label></a>
        <a href="<?php echo url('user/my_getpassword_first');?>"><label class="mui-right">忘记密码</label></a>
    </div>
    <div class="mui-button-row">
        <button type="submit" class="mui-btn mui-btn-danger" value="<?php echo $this->_var['lang']['now_landing']; ?>">登录</button>
    </div>
</form>
<div class="mui-row list">
    <div class="mui-col-xs-4 mui-col-sm-4 mui-col-lg-4 mui-col-md-4">
        <a href="#">
            <img src="themes/default/images/wx.png" alt="">
            <label>微信登录</label>
        </a>
    </div>
    <div class="mui-col-xs-4 mui-col-sm-4 mui-col-lg-4 mui-col-md-4">
        <a href="<?php echo url('user/third_login',array('type'=>'sina'));?>">
            <img src="themes/default/images/wb.png" alt="">
            <label>微博登录</label>
        </a>
    </div>
    <div class="mui-col-xs-4 mui-col-sm-4 mui-col-lg-4 mui-col-md-4">
        <a href="<?php echo url('user/third_login',array('type'=>'qq'));?>">
            <img src="themes/default/images/qq.png" alt="">
            <label>QQ登录</label>
        </a>
    </div>
</div>
<script src="__PUBLIC__/js/mui.js"></script>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
</body>
</html>