<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <title><?php echo $this->_var['page_title']; ?> 触屏版</title>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/mui.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/getpassword.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/font-awesome.min.css"/>
    <style type="text/css">
        .btnstr{
                width: 100%;
                color: #FFF!important;
                font-size: 1.1em!important;
                background: #ccc!important;
                border: 0!important;
                font-family: "微软雅黑";
        }
    </style>
    <script type="text/javascript">
        <?php $_from = $this->_var['lang']['profile_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
</head>
<body>
    <header>
        <div class="mui-row headerBox">
            <a href="javascript:window.history.back(-1);"><div class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></div></a>
            
            <div class="mui-col-xs-12">
                找回密码
            </div>
        </div>
    </header>
    <section>
        <div class="mui-row box">
            <div class="mui-col-xs-1"></div>
            <div class="mui-col-xs-10 code">
                设置新的登录密码
            </div>
            <div class="mui-col mui-col-xs-1"></div>
        </div>
        <form action="<?php echo url('user/my_getpassword_last_email');?>" method="post" name="getPassword2" onSubmit="return submitPwd()">
        <div class="mui-row box">
            <div class=" mui-col-xs-1"></div>
            <div class="mui-col-xs-10 mycont">
                <div class="mui-input-row">
                    <input type="password" class="mui-input-password" name="new_password" placeholder="<?php echo $this->_var['lang']['new_password']; ?>" maxlength = "20">
                </div>
            </div>
            <div class="mui-col-xs-1"></div>
        </div>

        <div class="mui-row box">
            <div class=" mui-col-xs-1"></div>
            <div class="mui-col-xs-10 mycont">
                <div class="mui-input-row">
                    <input type="password" class="mui-input-password" name="confirm_password" placeholder="<?php echo $this->_var['lang']['confirm_password']; ?>" maxlength = "20">
                </div>
            </div>
            <div class="mui-col-xs-1"></div>
        </div>
        
        <div class="mui-row box">
            <div class="mui-col-xs-1"></div>
            <div class="mui-col-xs-10 wenzi">
                <p>
                    备注 : 请将密码设置为6-20位，并且由字母，数字和符号两种以上组合，<br><br>
                    不能与旧密码相同
                </p>
            </div>
            <div class="mui-col mui-col-xs-1"></div>
        </div>
        <div class="mui-row box">
            <div class="mui-col-xs-1"></div>
            <div class="mui-col-xs-10 content">
                <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
                <?php if ($this->_var['code']): ?>
                <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
                <?php endif; ?> 
                <?php if ($this->_var['mobile']): ?>
                <input type="hidden" name="mobile" value="<?php echo $this->_var['mobile']; ?>" />
                <?php endif; ?> 
                <?php if ($this->_var['question']): ?>
                <input type="hidden" name="question" value="<?php echo $this->_var['question']; ?>" />
                <?php endif; ?>
                <input name="Submit" type="submit" class="mui-mui-col-xs-12 mytext text_two btnstr" value="完成">
            </div>
            <div class="col-xs-1"></div>
        </div>
        </form>
        <div class="mui-row box">
            <div class="mui-col-xs-1"></div>
            <div class="mui-col-xs-10 kefu">
                <p>
                    遇到问题？你可以<a href="">联系客服</a>
                </p>
            </div>
            <div class="mui-col-xs-1"></div>
        </div>
    </section>
    <script src="__PUBLIC__/js/mui.js"></script>
</body>
</html>