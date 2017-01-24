<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>转账金额</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/mui.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/TransferAmount.css">
    <script src="__PUBLIC__//js/jquery-1.11.3.js"></script>
    <script src="__PUBLIC__/js/mui.js"></script>
</head>
<body>
<header>
    <div class="mui-row headerBox">
        <a href="<?php echo url('user/account_transfer_name');?>"><div class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></div></a>
        <div class="">
            转到对方账户
        </div>
        <a href="<?php echo url('user/account_transferecord');?>">
            <span class="TransferRecord">转账记录</span>
        </a>
    </div>
</header>
<section>
    <div class="mui-row">
        <div class="mui-col-xs-12 contet">
            <div class="contHeader">
                <div class="img">
                    <img src="themes/default/images/touxiang.png" alt="">
                </div>
                <?php $_from = $this->_var['check']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'infro');if (count($_from)):
    foreach ($_from AS $this->_var['infro']):
?> 
                <p style="color: #000;font-size: 1em;"><?php echo $this->_var['infro']['user_name']; ?></p>
                <p><?php echo $this->_var['infro']['mobile_phone']; ?></p>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="mountcont">
        <p style="font-size: 1em;color: #000000;">转账金额</p>
        <div class="je">
            <form action="<?php echo url('user/account_result');?>" method="post" id="nameform">
                <div class="mui-row">
                    <div class="mui-col-xs-1">
                        <span>￥</span>
                    </div>
                    <div class="mui-col-xs-11">
                        <input type="text" name="money" class="bottomborder" placeholder="100.00" style="font-size: 2.5em;" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')">
                    </div>
                </div>
                <input type="text"  maxlength="20" class="beizhu" placeholder="添加备注（20字以内）">
            </form>
        </div>
    </div>
</section>
<button type="submit" form="nameform" class="mui-btn mui-btn-danger btn">确认转账</button>
<p class="p">
    使用账户余额付款
    <a href="#"><span class="tab">更换</span></a>
</p>
<div class="mui-backdrop">
    <div class="mask">
        <div class="mode">
            选择付款方式
            <span class="mui-icon mui-icon-closeempty position"></span>
        </div>
        <ul class="mui-table-view">
            <li class="mui-table-view-cell mui-media">
                <a href="javascript:">
                    <div class="mui-row">
                        <div class="mui-col-xs-2">
                            <img class="mui-media-object mui-pull-left" src="themes/default/images/gongshang.png">
                        </div>
                        <div class="mui-col-xs-9">
                            <div class="mui-media-body">
                                中国工商银行储蓄卡（6952）
                            </div>
                            <p class='mui-ellipsis'>可用额度10.000.00元</p>
                        </div>
                        <div class="mui-col-xs-1 active">
                            <span class="mui-icon mui-icon-checkmarkempty"></span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="mui-table-view-cell mui-media">
                <a href="javascript:">
                    <div class="mui-row">
                        <div class="mui-col-xs-2">
                            <img class="mui-media-object mui-pull-left" src="themes/default/images/monuy.png">
                        </div>
                        <div class="mui-col-xs-9">
                            <div class="mui-media-body">
                                账户余额
                                <p class='mui-ellipsis'>可用额度366.00元</p>
                            </div>
                        </div>
                        <div class="mui-col-xs-1 active">
                            <span class="mui-icon mui-icon-checkmarkempty" style="display: none;"></span>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $('.mask ul li').click(function(){
            var index = $(this).index();
            $('.active span').eq(index).addClass('mui-icon mui-icon-checkmarkempty').removeClass('mui-icon mui-icon-checkmarkempty');
        });
        $('.position ').click(function(){
            $('.mui-backdrop').fadeOut(200);
        });
        $('.tab').click(function(){
            $('.mui-backdrop').fadeIn(200);
        })
    })
</script>
</body>
</html>