<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <title><?php echo $this->_var['page_title']; ?> 触屏版</title>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/me.css"/>
</head>
<body>
<div class="col-xs-12 myNav">
    <p>个人中心</p>
</div>
<div class="col-xs-12 bgImg">
    <img src="themes/default/images/g.png" alt=""/>
</div>
<div class="col-xs-12 myBody">
    <div class="userName">
        <div class="col-xs-12 touxiang">
            <div class="myimg"><img src="themes/default/images/touxiang.jpg" alt=""/></div>
        </div>
        <a href="<?php echo url('user/profile');?>">
        <div class="username"><h4><?php echo $this->_var['info']['username']; ?> </a>| <a href="<?php echo url('user/logout');?>" class="ect-colorf"><?php echo $this->_var['lang']['label_logout']; ?></a></h4></div>
        <div id="idBox">
            <p>实名认证</p>
        </div>
        <div class="myMoney moneyFirst">
            <div class="contant">
                <a href="<?php echo url('user/not_pay_order_list');?>">
                    <p class="money"><?php echo $this->_var['lang']['not_pay_list']; ?></p>
                    <div class="money xi">
                       <img src="themes/default/images/kaihu/daifukuan.png" alt=" "/>
                    </div>
                </a>
            </div>
            
            <div class="fenge"></div>
            <div class="contant">
                <a href="<?php echo url('user/order_list');?>">
                    <p class="money"><?php echo $this->_var['lang']['order_list_lnk']; ?></p>
                    <div class="money shou">
                        <img src="themes/default/images/kaihu/gouwuche.png" alt=" "/>
                    </div>
                </a>
            </div>
            <div class="fenge"></div>
            <div class="contant">
                <p class="money">待评价</p>
                <div class="money">
                    <img src="themes/default/images/kaihu/daipingjia.png" alt=" "/>
                </div>
            </div>
            <div class="fenge"></div>
            <div class="contant">
                <p class="money">退货</p>
                <div class="money shang">
                    <img src="themes/default/images/kaihu/tuihuo.png" alt=" "/>
                </div>
            </div>
        </div>
        <div class="myMoney moneybox">
            <div class="contant">
                <p class="money">货款金额</p>
                <div class="money">0.00</div>
            </div>
            <div class="fenge"></div>
            <div class="contant">
                <p class="money">信用额度</p>
                <div class="money">0.00</div>
            </div>
            <div class="fenge"></div>
            <div class="contant">
               <a href="<?php echo url('user/account_detail');?>"> <p class="money">熹币中心</p></a>
                 <?php $_from = $this->_var['user_money']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user_money_0_35906600_1485046570');if (count($_from)):
    foreach ($_from AS $this->_var['user_money_0_35906600_1485046570']):
?> 
                <div class="money"><?php echo $this->_var['user_money_0_35906600_1485046570']['user_money']; ?></div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
            <div class="fenge"></div>
            <div class="contant">
                <p class="money">购物车</p>
                <div class="money">0.00</div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 myIcon linefirst">
        <div class="fontImg">
            <a href="<?php echo url('user/my_recharge2');?>">
            <img src="themes/default/images/icon1.png" alt=""/>
            <p>充值</p>
            </a>
        </div>
        <div class="fontImg">
        <a href="#">
            <img src="themes/default/images/icon2.png" alt=""/>
            <p>商城</p>
            </a>
        </div>
        <div class="fontImg">
        <a href="<?php echo url('user/account_transfer');?>">
            <img src="themes/default/images/icon3.png" alt=""/>
            <p>转账</p>
            </a>
        </div>
        <a href="<?php echo url('user/my_loan');?>">
            <div class="fontImg">
                <img src="themes/default/images/icon4.png" alt=""/>
                <p>贷款</p>
            </div>
        </a>
        <a href="<?php echo url('user/my_OpenAccount');?>">
            <div class="fontImg">
                <img src="themes/default/images/icon5.png" alt=""/>
                <p>开户</p>
            </div>
        </a>
    </div>
    <div class="col-xs-12 myIcon">
        <div class="fontImg">
            <img src="themes/default/images/icon6.png" alt=""/>
            <p>订单查询</p>
        </div>
        <div class="fontImg">
            <img src="themes/default/images/icon7.png" alt=""/>
            <p>商品商城</p>
        </div>
        <div class="fontImg">
            <img src="themes/default/images/icon8.png" alt=""/>
            <p>社区服务</p>
        </div>
        <div class="fontImg">
            <img src="themes/default/images/icon9.png" alt=""/>
            <p>客服服务</p>
        </div>
        <div class="fontImg">
            <img src="themes/default/images/icon10.png" alt=""/>
            <p>城市服务</p>
        </div>
    </div>
    <div class="col-xs-12 myIcon">
        <div class="fontImg">
            <img src="themes/default/images/icon11.png" alt=""/>
            <p>宽带</p>
        </div>
        <div class="fontImg">
            <img src="themes/default/images/icon12.png" alt=""/>
            <p>银行卡</p>
        </div>
        <div class="fontImg">
            <img src="themes/default/images/icon13.png" alt=""/>
            <p>出行</p>
        </div>
        <div class="fontImg">
            <img src="themes/default/images/icon14.png" alt=""/>
            <p>证卷</p>
        </div>
        <div class="fontImg">
            <img src="themes/default/images/icon15.png" alt=""/>
            <p>加油服务</p>
        </div>
    </div>
    <div class="myline firstLine"></div>
    <div class="col-xs-12 myList">
	<a href="#">
        <div class="listing">
            <img src="themes/default/images/me_1.png" alt=""/>
            <span>我的会员</span>
            <img src="themes/default/images/icon24.png">
        </div>
	</a>
        <div class="line"></div>
         <a href="<?php echo url('user/share');?>"><div class="listing">
            <img src="themes/default/images/me_2.png" alt=""/>
            <span>我要赚钱</span>
            <img src="themes/default/images/icon24.png">
        </div></a>
        <div class="line"></div>
        <div class="listing">
            <img src="themes/default/images/me_3.png" alt=""/>
            <span>我的收藏</span>
            <img src="themes/default/images/icon24.png">
        </div>
        <div class="line"></div>
        
		<a href="<?php echo url('user/edit_password');?>">
		<div class="listing">
		<img src="themes/default/images/icon19.png" alt=""/>
            <span>修改密码</span>
            <img src="themes/default/images/icon24.png">
			</div>
		</a>
            
        
        <div class="line"></div>
		<a href="#">
        <div class="listing">
            <img src="themes/default/images/icon20.png" alt=""/>
            <span>关于我们</span>
            <img src="themes/default/images/icon24.png">
        </div>
		</a>
        <div class="line"></div>
		<a href="#">
        <div class="listing">
            <img src="themes/default/images/icon21.png" alt=""/>
            <span>提交建议</span>
            <img src="themes/default/images/icon24.png">
        </div>
		</a>
        <div class="line"></div>
		<a href="#">
        <div class="listing">
            <img src="themes/default/images/icon22.png" alt=""/>
            <span>检查更新</span>
            <img src="themes/default/images/icon24.png">
        </div>
		</a>
        <div class="line"></div>
		<a href="#">
        <div class="listing lat">
            <img src="themes/default/images/icon23.png" alt=""/>
            <span>退&nbsp;&nbsp;出</span>
            <img src="themes/default/images/icon24.png">
        </div>
		</a>
        <div class="line"></div>
    </div>
</div>
<div class="footer"  style="position:fixed;bottom:0;z-index:111;width:100%;background:#eee">
    <a href="<?php echo url('index/index');?>">
        <div class="myFooter">
            <img src="themes/default/images/images/icon7.png" alt=""/>
            <p>首页</p>
        </div>
    </a>
    <a href="<?php echo url('category/index');?>">
        <div class="myFooter">
            <img src="themes/default/images/images/icon12.png" alt=""/>
            <p>分类</p>
        </div>
    </a>
    <a href="<?php echo url('goodnews/index');?>">
        <div class="myFooter">
            <img src="themes/default/images/icon13.png" alt=""/>
            <p>熹讯</p>
        </div>
    </a>
    <a href="<?php echo url('zhineng/index');?>">
        <div class="myFooter">
            <img src="themes/default/images/menu_icon4.png" alt=""/>
            <p>智能</p>
        </div>
    </a>

    <a href="<?php echo url('user/index');?>">
        <div class="myFooter">
            <img src="themes/default/images/images/icon11.png" alt=""/>
            <p>我</p>
        </div>
    </a>
</div>  
<script src="__PUBLIC__/js/jquery-1.11.3.js"></script>
<script src="__PUBLIC__/js/bootstrap.js"></script>
</body>
</html>