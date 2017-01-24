<!doctype html>
<html>
<head>
<meta name="Generator" content="ECTouch 1.0" />
	<title>账户余额</title>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/mui.min.css">
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/recharge.css">
	<script type="text/javascript" src="__PUBLIC__/js/mui.min.js"></script>
</head>
<body>
	<div id="all">
		<header>
	        <div class="mui-row headerTop">
	            <div class="mui-icon mui-action-back mui-icon-left-nav mui-pull-left mui-col-xs-2"></div>
	            <div class="mui-col-xs-7">
	                余额
	            </div>
	            <div class="mui-col-xs-3">
	            	<a href="<?php echo url('user/account_transferdetail');?>">明细</a>
	            </div>
	        </div>
	        <div class="headerBot">
	        	<p>余额账户（元）<br/>
	        	<?php $_from = $this->_var['money']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'infro');if (count($_from)):
    foreach ($_from AS $this->_var['infro']):
?> 
	        		<span> <?php echo $this->_var['infro']['user_money']; ?></span>
	        	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	        	</p>
	        </div>
  		</header>
		<section>
			<a href="<?php echo url('user/recharge_method');?>">
				<div class="sectionTop">
					<div class="mui-row sectionTop_center">
						<div class=" mui-col-xs-10 chongzhi">
							<img src="themes/default/images/recharge.png" alt="">充值
						</div>
						<div class="mui-icon mui-icon-arrowright mui-icon-right-nav mui-pull-right mui-col-xs-2"></div>
					</div>
				</div>
			</a>
			<a href="<?php echo url('user/account_transfer');?>">
				<div class="sectionBot">
					<div class="mui-row sectionBot_center">
						<div class=" mui-col-xs-10 chongzhi">
							<img src="themes/default/images/transfer.png" alt="">转账
						</div>
						<div class="mui-icon mui-icon-arrowright mui-icon-right-nav mui-pull-right mui-col-xs-2"></div>
					</div>
				</div>
			</a>
		</section>
	</div>
</body>
</html>