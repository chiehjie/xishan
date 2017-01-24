<!doctype html>
<html>
<head>
<meta name="Generator" content="ECTouch 1.0" />
  <title><?php echo $this->_var['page_title']; ?> 触屏版</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/regist.css">
  <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/mui.css"/>
  <script src="__PUBLIC__/js/jquery-1.11.3.js" type="text/javascript"></script>
  <script src="__PUBLIC__/js/mui.js" type="text/javascript"></script>
</head>
<body>
  <header>
    <div class="mui-row headerBox">
      <div class="mui-action-back mui-icon mui-icon-left-nav "></div>
      <div class="mui-col-xs-12">
        手机快速注册
      </div>
    </div>
  </header>
  <form action="<?php echo url('user/my_regist3');?>" method="post">
    <div class="mui-row first_row">
      <div class="mui-col-xs-1"></div>
      <div class="mui-col-xs-2">
        <select class="mySelect">
          <option>+86</option>
        </select>
      </div>
      <div class="mui-col-xs-8">
        <input id="tp"  class="text" type="text" name="mobile" placeholder="请输入手机号"  maxlength="11"/>
      </div>
      <div class="mui-col-xs-1">
        <div id="tiSi"></div>
      </div>
    </div>
    <div class="mui-row two_row">
      <div class="mui-col-xs-1"></div>
      <div class="mui-col-xs-7">
        <input id="tm" class="text" type="text" name="code" placeholder="请输入验证码">
      </div>
      <div class="mui-col-xs-3">
        <input class="btn" id="huoqu" type="button" value="获取验证码" >
      </div>
      <div class="mui-col-xs-1"></div>
    </div>
    <div class="mui-row two_row">
      <div class="mui-col-xs-1"></div>
      <div class="mui-col-xs-1">
        <input type="checkbox" checked class="mycheck"/>
      </div>
      <div class="mui-col-xs-10 ss" >同意熹善用户注册协议</div>
    </div>
    <div class="mui-row two_row">
      <div class="mui-col-xs-1"></div>
      <div class="mui-col-xs-10">
        <input type="submit" value="下一步" id="sub"/>
      </div>
      <div class="mui-col-xs-1"></div>
    </div>
    <div class="mui-row two_row">
      <div class="mui-col-xs-1"></div>
      <div class="mui-col-xs-11 kefu">
        遇到问题？您可以<a href="">联系客服</a>。
      </div>
    </div>
  </form>
</body>

</html>
<script type="text/javascript"> 
$(function(){
  var countdown=60;
  var daojishiTimer;
  var tp=document.getElementById('tp');
  var reg = /^1[34578]\d{9}$/;
  var huoqu=document.getElementById('huoqu');
  var tm=document.getElementById('tm');
  var sub=document.getElementById('sub');
  if(tp.value==""){
    huoqu.disabled = true;
  }
  tp.onkeyup = function(){
    if(reg.test(tp.value)){
      huoqu.disabled = false;
    }else{
      huoqu.disabled = true;
    }
  }
  function dianji(){
    var obj=document.getElementById('huoqu');
    if (countdown == 0) {
      obj.removeAttribute("disabled");
      countdown = 60;
      obj.value="获取手机验证码";
      clearInterval(daojishiTimer);
      return;
    } else {
      obj.setAttribute("disabled", true);
      obj.value="重新发送(" + countdown + ")";
      countdown--;
    }
  }
  tm.onkeyup = function(){
    if(tm.value != ''){
      sub.disabled = false;
      sub.style.backgroundColor = '#d32727';
      sub.style.color = 'white';
    }else{
      sub.disabled = true;
    }
  };
   $('#huoqu').click(function(){
     $.post("<?php echo url('user/my_regist2');?>",{mobile:jQuery.trim($('#tp').val())},function(data,status){
       if(status=="success"){
       
       };
     });
     daojishiTimer=setInterval(dianji,1000);
   })
});  
</script>