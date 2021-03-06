<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>转账结果</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/mui.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/Transferesult.css">
    <script src="__PUBLIC__/js/jquery-1.11.3.js"></script>
    <script src="__PUBLIC__/js/mui.js"></script>
</head>
<body>
<header>
    <div class="mui-row headerBox">
        <div class="">
            转账结果
        </div>
        <a href="<?php echo url('user/account_recharge');?>">
            <span class="TransferRecord">完成</span>
        </a>
    </div>
</header>
<section>
    <div class="information">
        <div class="mui-row">
            <div class="mui-col-xs-2 list">
                <ul>
                    <li class="mui-icon mui-icon-checkmarkempty radius"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li>￥</li>
                </ul>
            </div>
            <div class="mui-col-xs-10 list-one">
                <p>付款成功，已提交银行处理</p>
                <p>中国工商银行储蓄卡（6952）</p>
                <p>100.00元</p>
                <p>预计03-30 23.59前到账</p>
            </div>
        </div>
        <div class="mui-row" style="display: none">
            <div class="mui-col-xs-2 list">
                <ul>
                    <li class="mui-icon mui-icon-checkmarkempty radius"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li>￥</li>
                </ul>
            </div>
            <div class="mui-col-xs-10 list-one">
                <p>转账成功</p>
                <p>账户余额</p>
                <p>100.00元</p>
                <p>立即到账</p>
            </div>
        </div>
    </div>
</section>
</body>
</html>