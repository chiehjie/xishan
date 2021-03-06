<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <meta name = "viewport" content="user-scalable=0"/>
    <title><?php echo $this->_var['page_title']; ?> 触屏版</title>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/mui.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/getpassword.css"/>
</head>
<body>
    <header>
        <div class="mui-row headerBox">
            <div class="top_left">
                    <a href="javascript:window.history.back(-1);">
                        <img src="themes/default/images/back.png" alt="">
                    </a>
                </div>
            <div class="mui-col-xs-12">
                找回密码
            </div>
        </div>
    </header>
    <section>
        <div class="mui-row box">
                <div class="mui-col-xs-1"></div>
                <div class="mui-col-xs-10 prompt">
                    您可通过以下三种方式找回密码
                </div>
                <div class="mui-col-xs-1"></div>
        </div>
        <div class="mui-row box">
                <div class="mui-col-xs-1"></div>
                <div class="mui-col-xs-10 content">
                    <a href="<?php echo url('user/my_getpassword_two');?>">
                        <div class="mui-col-xs-12 mytext">
                            通过手机验证找回密码
                        </div>
                    </a>
                </div>
                <div class="mui-col-xs-1"></div>
        </div>
        <div class="mui-row box">
                <div class="mui-col-xs-1 "></div>
                <div class="mui-col-xs-10 content">
                    <a href="<?php echo url('user/my_getpassword_three');?>">
                        <div class="mui-col-xs-12 mytext">
                            通过邮箱找回密码
                        </div>
                    </a>
                </div>
                <div class="mui-col-xs-1"></div>
        </div>
        <div class="mui-row box">
                <div class="mui-col-xs-1"></div>
                <div class="mui-col-xs-10 content">
                    <a href="<?php echo url('user/my_getpassword_four');?>">
                        <div class="mui-col-xs-12 mytext">
                            通过保密问题找回密码
                        </div>
                    </a>
                </div>
                <div class="mui-col-xs-1"></div>
        </div>
    </section>
<script src="__PUBLIC__/js/mui.js"></script>
<script src="__PUBLIC__/js/jquery-1.11.3.js"></script>
</body>
</html>