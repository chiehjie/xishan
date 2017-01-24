<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>转到对方账户</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/mui.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/Goaccount.css">
    <script src="__PUBLIC__/js/jquery-1.11.3.js"></script>
    <script src="__PUBLIC__/js/mui.js"></script>
</head>
<body>
<header>
    <div class="mui-row headerBox">
        <a href="<?php echo url('user/account_transfer');?>"><div class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></div></a>
        <div class="">
            转到对方账户
        </div>
    </div>
</header>
<form class="mui-input-group" action="<?php echo url('user/account_transfer_name');?>" method="post" id="nameform">
    <div class="mui-input-row">
        <label>对方账户</label>
        <input type="text" name="names" id="name" class="mui-input" placeholder="账户名称">
    </div>
</form>
<p style="padding: 18px;font-size: 1em;">钱将实时转入对方账户，无法退款</p>
<button type="submit" value="Submit" class="mui-btn active" form="nameform">下一步</button>
<script type="text/javascript">
    window.onload = function(){
        var cd = document.getElementsByClassName('mui-input')[0];
        var inpt = document.getElementsByClassName('active')[0];
        cd.onkeyup = function(){
            if(cd.value!=''){
                inpt.disabled = false;
                inpt.style.background = '#d32727';
                inpt.style.color = '#fff';
            }else{
                inpt.disabled = true;
                inpt.style.background = '#e4e4e4';
                inpt.style.color = '#b7b7b7';
            }
        }
    }
</script>
</body>
</html>