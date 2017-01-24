<!doctype html>
<html>
<head>
<meta name="Generator" content="ECTouch 1.0" />
  <title><?php echo $this->_var['page_title']; ?> 触屏版</title>
  <meta name = "viewport" content="user-scalable=0"/>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/regist.css">
  <script src="__PUBLIC__/js/jquery-1.11.0.min.js" type="text/javascript"></script>
  <script src="__PUBLIC__/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>

  <script type="text/javascript" src="__PUBLIC__/js/regist.js"></script>
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
          <p>密码找回</p>
        </div>
        <div class="top_right">
        </div>
      </div>
    </div>
    <div id="content">
      <form action="<?php echo url('user/my_getpassword_email');?>" method="post">
        <div class="form_top">
          <input id="tp"  class="text" type="text" placeholder="请输入验证码邮箱" name="email"   />
          <div id="tiSi"></div>
        </div>
        <div class="form_cen">
          <input id="tm" class="text" type="text" name="code" placeholder="输入邮箱验证码">
          <input class="btn" id="huoqu" type="button" value="获取邮箱" onClick="sendSms();">
          <div id="yztisi"></div>
        </div>

        <div class="form_bot">
          <p>
            <input type="checkbox" checked>同意熹善用户注册协议
          </p>
          <!-- <a id="sub" href="" class="disabled">下一步</a> -->
          <input type="submit" value="下一步" class="disabled" id="sub">
          <span>遇到问题？您可以<a href="javascript:">联系客服</a>。</span>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
<script type="text/javascript">
var countdown=60; 
var daojishiTimer;
function dianji(){
  var obj=document.getElementById('huoqu');
  if (countdown == 0) {
    obj.removeAttribute("disabled");
    countdown = 60;
    obj.value="获取手机验证码"
    clearInterval(daojishiTimer);
    return;
  } else {
    // obj.setAttribute("disabled", true);
    obj.value="重新发送(" + countdown + ")";
    countdown--;
  }
}
    function sendSms(){
      $.post("<?php echo url('user/my_getpassword_email_sms');?>",{email:jQuery.trim($('#tp').val())},function(data,status){
        if(status=="success"){};
      });
      daojishiTimer=setInterval(dianji,1000); 
    }
</script>
<script type="text/javascript">
  $(function(){
  var tp = document.getElementById('tp');
  var tiSi = document.getElementById('tiSi');
  var tm = document.getElementById('tm');
  var yzCard = document.getElementById('yzCard');
  var yztisi = document.getElementById('yztisi');
  var reg =  /\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,14}/;
  tp.onblur = function(){
    if(reg.test(tp.value)){
      tp.style.color = '#9c9898';
      tiSi.innerHTML="";
    }else{
      tiSi.innerHTML="邮箱格式错误";
    }
  }
  // tm.onblur = function(){
    // if(tm.value != yzCard.innerHTML){
      // yztisi.innerHTML="验证码错误"
    // }
    // else{
      // yztisi.innerHTML=""
    // }
  // }
  $('#tm').focus(function(){
    console.log(tp.value);
    if(tp.value!=""){
      $('#sub').css({'background':'#D32727','color':'#fff'});
    }
  })
  $('#tp').blur(function(){
    $('#tm').blur(function(){
      if(tiSi.innerHTML==""||yztisi.innerHTML==""){
        $('#sub').removeClass('disabled');
      }
    })
  })
});

</script>
