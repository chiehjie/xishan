<!doctype html>
<html>
<head>
<meta name="Generator" content="ECTouch 1.0" />
	<title><?php echo $this->_var['page_title']; ?></title>
	<meta charset="utf-8"/>
	<meta name = "viewport" content="user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/mui.min.css">
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/recharge2.css">
	<script type="text/javascript" src="themes/default/js/mui.min.js"></script>
	<script src="__PUBLIC__/js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/recharge2.js" type="text/javascript"></script>
</head>
<body>
	<div id="all">
		<header>
			<div class="mui-row header_Cen">
	            <div class="mui-icon mui-action-back mui-icon-left-nav mui-pull-left mui-col-xs-2"></div>
	            <div class="mui-col-xs-10">
	                账户充值
	            </div>
			</div>
		</header>

		<section>
			<div class="sectionTop">
				<div class="mui-row sectionTop_center">
					<a href="javascript:">
						<div class="mui-col-xs-10">
							<img src="themes/default/images/icbc.png" alt="">
							<span>中国工商银行
								<p>尾号0715</p>
							</span>
						</div>
						<div class="mui-icon mui-icon-arrowright mui-icon-right-nav mui-pull-right mui-col-xs-2"></div>
					</a>
				</div>
			</div>
			<div class="sectionCen">
				<div>该卡本次最多可充值10.000.00元</div>
			</div>
			<form action="<?php echo url('user/recharge3');?>" method = 'post'>
				<div class="sectionBot">
					<div class="mui-row sectionBot_center">
						<div class="mui-col-xs-2">金额</div>
						<div class="mui-col-xs-10">
							<input id="money" type="text" placeholder="请输入充值金额">
						</div>
						
					</div>
				</div>

				<div class="foot">
					<input type="submit" value="下一步">
				</div>
			</form>
		</section>

		<footer>
			<div class="hide">
				<div class="hideCen">
					<div class="mui-row hideCen_top">
						<div class="mui-icon mui-icon-closeempty mui-col-xs-2"></div>
						<div class="mui-col-xs-8">选择充值方式</div>
						<div class="mui-col-xs-2"></div>
					</div>		
				</div>

				<div class="mui-row hideCen_cen">
					<a href="javascript:">
						<div class="mui-col-xs-10">
							<img src="themes/default/images/icbc.png" alt="">
							<span>中国工商银行储蓄卡（6952）
								<p>可用额度10.000.00元</p>
							</span>
						</div>
						<div class="mui-icon mui-icon-checkmarkempty mui-col-xs-2"></div>
					</a>
				</div>
				<div class="mui-row hideCen_bot">
					<a href="addhankcard.html">
						<div class="mui-col-xs-10">添加银行卡充值</div>
						<div class="mui-icon mui-icon-arrowright mui-icon-right-nav mui-pull-right mui-col-xs-2"></div>
					</a>
				</div>
			</div>
		</footer>



	</div>
</body>
</html>
<script type="text/javascript">
window.onload = function(){
	var my = document.getElementById('money');
	var foot = document.getElementsByClassName('foot')[0];
	var inpt = foot.getElementsByTagName('input')[0];
	var reg = /^(([1-9]\d*)|\d)(\.\d{1,2})?$/;
	my.onkeyup = function(){
		 if(reg.test(my.value)){
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