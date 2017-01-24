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
		 $.post("{:url('user/my_getpassword_sms')}",{mobile:jQuery.trim($('#tp').val())},function(data,status){
        if(status=="success"){
        	
        };
      });
		 daojishiTimer=setInterval(dianji,1000);
	 })
});