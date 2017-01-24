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
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/recharge.css">
	<script type="text/javascript" src="__PUBLIC__/js/mui.min.js"></script>
</head>
<body>
	<div id="all">
		<header>
	        <div class="mui-row headerTop">
	            <a href="javascript:window.history.back(-1);"><div class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></div></a>
	            <div class="mui-col-xs-8">
	                余额
	            </div>
	            <div class="mui-col-xs-2">
	            	<a href="recharge4.html">明细</a>
	            </div>
	        </div>
	        <div class="headerBot">
	        	<p>余额账户（元）<br/>
	        	  <?php $_from = $this->_var['user_money']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user_money_0_99758400_1484890751');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['user_money_0_99758400_1484890751']):
        $this->_foreach['no']['iteration']++;
?>
				       <span> <?php echo $this->_var['user_money_0_99758400_1484890751']['user_money']; ?></span>
				   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
	        		
	        	</p>
	        </div>
  		</header>
		<section>
			<div class="sectionTop">
				<div class="mui-row sectionTop_center">
					<a href="<?php echo url('user/my_xuanzhezhifufangshi');?>">
						<div class=" mui-col-xs-10">
							<img src="themes/default/images/recharge.png" alt="">充值
						</div>
					</a>
					<div class="mui-icon mui-icon-arrowright mui-icon-right-nav mui-pull-right mui-col-xs-2"></div>
				</div>
			</div>
			<div class="sectionBot">
				<div class="mui-row sectionBot_center">
					<a href="<?php echo url('user/account_transfer');?>">
						<div class=" mui-col-xs-10">
							<img src="themes/default/images/transfer.png" alt="">转账
						</div>
					</a>
					<div class="mui-icon mui-icon-arrowright mui-icon-right-nav mui-pull-right mui-col-xs-2"></div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>