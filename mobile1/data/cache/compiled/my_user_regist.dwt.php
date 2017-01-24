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
          <a href="javascript:">
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
      <form action="<?php echo url('user/my_regist3');?>" method="post">
        <div class="form_top">
          <select>
            <option>+86</option>
          </select>
          <input id="tp"  class="text" type="text" placeholder="请输入手机号" name="mobile" maxlength="11" onkeyup="this.value=this.value.replace(/\D/g,'')" />
          <div id="tiSi"></div>
        </div>
        <div class="form_cen">
          <input id="tm" class="text" type="text" name="code" placeholder="请输入验证码">
          <input class="btn" id="huoqu" type="button" value="获取手机验证码" onClick="sendSms();">
          <div id="yztisi"></div>
        </div>

        <div class="form_bot">
          <p>
            <input type="checkbox" checked>同意熹善用户注册协议
          </p>
          <!-- <a id="sub" href="" class="disabled">下一步</a> -->
          <input type="submit" value="下一步" id="sub">
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
    obj.setAttribute("disabled", true);
    obj.value="重新发送(" + countdown + ")";
    countdown--;
  }
}

  // var tisi=document.getElementById('tiSi');
  // if(tisi.value!=''){ 
  //     var obj=document.getElementById('huoqu');
  //     obj.setAttribute("disabled", true);      
  //   }
  // if(tisi.value==''){
    // obj.removeAttribute("disabled");
    function sendSms(){
      $.post("<?php echo url('user/my_regist2');?>",{mobile:jQuery.trim($('#tp').val())},function(data,status){
        
      });
      daojishiTimer=setInterval(dianji,1000); 
    }   
  // }    
</script>
<script type="text/javascript">

</script>
