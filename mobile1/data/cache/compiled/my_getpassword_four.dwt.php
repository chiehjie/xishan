<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <title><?php echo $this->_var['page_title']; ?> 触屏版</title>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/mui.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/getpassword.css"/>
    <script src="__PUBLIC__/js/jquery-1.11.3.js"></script>
</head>
<body>
    <header>
        <div class="mui-row headerBox">
            <a href="javascript:window.history.back(-1);">
                <div class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></div>
            </a>
            <div class="mui-col-xs-12">
                找回密码
            </div>
        </div>
    </header>
    <form action="<?php echo url('user/my_getpassword_question');?>" method="post">
        <div class="mui-row box">
            <div class="mui-col-xs-1"></div>
            <div class="mui-col-xs-10 mycontent">
                <span>帐号</span>
                <input type="text" name="user_name" id="phone" placeholder="请输入用户名"/>
            </div>
        </div>
        <div class="mui-row box">
            <div class="mui-col-xs-1 "></div>
        </div>

        <div class="mui-row box">
            <div class="mui-col-xs-1"></div>
            <div class="mui-col-xs-10 content">
                    <div class="mui-mui-col-xs-12 mytext text_two">
                        <input type="submit" value="下一步" style="width:100%;height:50px;backgroundColor:#d7d6d6">
                    </div>
            </div>
            <div class="col-xs-1"></div>
        </div>
    </form>
    <script src="__PUBLIC__/js/mui.js"></script>
    <script src="__PUBLIC__/js/getpassword_two.js"></script>
</body>
</html>