<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title></title>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/me.css"/>
</head>
<body>
<div class="mc" >
    <div class="fen_img">
        <div>
            <img src="<?php echo $this->_var['domain']; ?><?php echo url('user/create_qrcode');?>" alt="" class="my_ewm" />

        </div>
        <div class="f_wenzi">
            <p>乐在分享</p>
            <p>分享我的专属二维码，获取会员权益</p>
        </div>
        <div class="d_icon">
            <div id="f_img"><img src="themes/default/images/member/qq.png" alt="" class="f_img"/></div>
            <div><img src="themes/default/images/member/xinlang.png" alt="" class="t_img"/></div>
            <div><img src="themes/default/images/member/weixin.png" alt="" class="z_img"/></div>
            <div><img src="themes/default/images/member/baidu.png" alt="" class="x_img"/></div>
        </div>
        <div>
            <p class="quxiao">
                <a href="<?php echo url('user/index');?>">取消</a>
            </p>
        </div>
    </div>
</div>

</body>
</html>