<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>确认转账</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/mui.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/mui.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/TransBank.css"/>
</head>
<body>
    <header>
        <div class="mui-row headerBox">
		<a href="javascript:history.go(-1)">
            <div class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></div>
		</a>
            <div class="mui-col-xs-12">
                转到银行卡
            </div>
        </div>
    </header>
    <form action="<?php echo url('user/account_transfer_bankthree');?>" method="post">
        <section style="margin-top: 1px;background-color: white">
            <div class="mui-row">
			<!--<foreach from="$data" item="infro">-->
                <div class="mui-col-xs-12 message" style="text-align: center" >
                    <div class="name"><?php echo $this->_var['infro']['u_name']; ?></div>
                    <div class="bank">中国工商银行</div>
                    <div class="money"><?php echo $this->_var['infro']['u_money']; ?></div>
                </div>
			<!--</foreach>-->
            </div>
        </section>
        <section style="margin-top: 1px;background-color: white">
            <div class="mui-row" >
                <div class="mui-col-xs-12" style="color: #DB5656;height: 50px;line-height: 50px;margin-top: 1px;text-align: center;font-size: 0.9em">
                    2小时内到账
                </div>
            </div>
        </section>
        <section style="margin-top: 20px">
            <div class="mui-row" style="background-color: white">
                <div class="mui-col-xs-1"></div>
                <div class="mui-col-xs-2" style="height: 60px;line-height: 60px">备注</div>
                <div class="mui-col-xs-9">
                    <input type="text" placeholder="选填" style="margin-top: 10px;margin-bottom: 10px"/>
                </div>
            </div>
        </section>
        <section>
            <div class="mui-row">
                <div class="mui-col-xs-1"></div>
                <div class="mui-col-xs-10">
                        <input type="submit" value="下一步" class="btn"/>
                </div>
                <div class="mui-col-xs-1"></div>
            </div>
        </section>
    </form>


</body>
</html>