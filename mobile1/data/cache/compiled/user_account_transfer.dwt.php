<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>转账</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/mui.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/Transferfriend.css">
    <script src="__PUBLIC__/js/jquery-1.11.3.js"></script>
    <script src="__PUBLIC__/js/mui.js"></script>
</head>
<body>
<header>
    <div class="mui-row headerBox">
        <a href="recharge.html">
            <div class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></div>
        </a>
        <div class="">
            转账
        </div>
        <div class="jilu">
            <img class="Gd" src="themes/default/images/gengduo.png" alt="">
        </div>
    </div>
    <div class="mui-backdrop">
        <img class="sanjiao" src="themes/default/images/sanjiao.jpg" alt="">
    </div>
    <a href="<?php echo url('user/account_transferecord');?>">
        <div class="TransferRecord">转账记录</div>
    </a>
</header>
<div class="section">
    <span class="Location-boxOne">
        <img src="themes/default/images/search.png" alt="">
    </span>
    <input class="CommodityName" type="text" name="username" placeholder="搜索">
</div>
<ul class="mui-table-view">
    <li class="mui-table-view-cell mui-media">
        <a href="<?php echo url('user/account_transfer_myfirend');?>">
            <img class="mui-media-object mui-pull-left" src="themes/default/images/pengyou.png">
            <div class="mui-media-body">
                <p class='mui-ellipsis'>转账给我的朋友</p>
            </div>
        </a>
    </li>
    <li class="mui-table-view-cell mui-media">
        <a href="<?php echo url('user/account_transfer_account');?>">
            <img class="mui-media-object mui-pull-left" src="themes/default/images/zhanghu.png">
            <div class="mui-media-body">
                <p class='mui-ellipsis'>转账到账户</p>
            </div>
        </a>
    </li>
    <li class="mui-table-view-cell mui-media">
        <a href="Gonumber.html">
            <img class="mui-media-object mui-pull-left" src="themes/default/images/dianhua.png">
            <div class="mui-media-body">
                <p class='mui-ellipsis'>转账到电话</p>
            </div>
        </a>
    </li>
</ul>
<p class="text">最近</p>
<ul class="mui-table-view">
    <li class="mui-table-view-cell mui-media">
        <a href="javascript:;">
            <img class="mui-media-object mui-pull-left" src="themes/default/images/touxiang.png">
            <div class="mui-media-body">
                小郭（郭芙蓉）
                <p class='mui-ellipsis'>168***6849</p>
            </div>
        </a>
    </li>
</ul>
<script>
    $(function(){
        $('.jilu').click(function(){
            $('.mui-backdrop').fadeIn(200);
            $('.TransferRecord').fadeIn(200);
            $('.sanjiao').fadeIn(200);
        });
        $('.mui-backdrop').click(function(){
            $(this).fadeOut(200);
            $('.TransferRecord').fadeOut(200);
            $('.sanjiao').fadeOut(200);
        });
        $('.TransferRecord').click(function(){
            $('.mui-backdrop').fadeOut(200);
            $('.sanjiao').fadeOut(200);
            $(this).fadeOut(200);
        })
    })

</script>
</body>
</html>