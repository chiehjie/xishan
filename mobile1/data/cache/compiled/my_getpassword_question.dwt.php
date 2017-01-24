<!doctype html>
<html>
<head>
<meta name="Generator" content="ECTouch 1.0" />
	<title><?php echo $this->_var['page_title']; ?> 触屏版</title>
	<meta name = "viewport" content="user-scalable=0"/>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/regist3.css">
	<script src="__PUBLIC__/js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
    <script type="text/javascript" src="__PUBLIC__/js/regist3.js"></script>
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
					<p>问题找回密码</p>
				</div>
				<div class="top_right">
				</div>
			</div>
		</div>
		<div id="content">
			<div class="con_top">
				<p><?php echo $this->_var['lang']['questions']; ?></p>
			</div>
			<!-- <form action="<?php echo url('user/my_getpassword_doemail');?>" method="post">
				<div class="form_top">
					<span><?php echo $this->_var['lang']['question_one']; ?>:</span>
					<select name="sel_question" id="sel">
						<option ><?php echo $this->_var['lang']['sel_question']; ?></option>
						<?php $_from = $this->_var['password_question']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'question');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['question']):
?>
		   					<option value="<?php echo $this->_var['key']; ?>" name="question"><?php echo $this->_var['question']; ?></option>
		                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</select>
					<span><?php echo $this->_var['lang']['passwd_answer']; ?>:</span>
          			<input placeholder="<?php echo $this->_var['lang']['passwd_answer']; ?>" name="passwd_answer" class="text" type="text" value="<?php echo $this->_var['profile']['passwd_answer']; ?>" />
		      	</div>
		      	
				<div class="form_bot">
					<input type="submit" value="下一步" id="sub" />
					<span><?php echo $this->_var['lang']['question_bug']; ?><a href="javascript:"><?php echo $this->_var['lang']['contact_client']; ?></a>。</span>
				</div>
			</form> -->
 <form action="<?php echo url('user/my_getpassword_doemail');?>" method="post" name="getPassword" class="validforms">
  <div class="flow-consignee ect-bg-colorf" id="tabBox1-bd">
  		<div class="form_top">
      <!--   <span><?php echo $this->_var['lang']['username']; ?>:</span>
          <input placeholder="<?php echo $this->_var['lang']['username']; ?>" name="user_name" class="text" type="text" datatype="*" />
          </span>
      	</div> -->
      	<div class="form_top">
      		<span><?php echo $this->_var['lang']['passwd_question']; ?>:</span>
	        <select name="sel_question" id="sel">
	        	<option ><?php echo $this->_var['lang']['sel_question']; ?></option>
	          	<?php $_from = $this->_var['password_question']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'question');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['question']):
?>
					<option value="<?php echo $this->_var['key']; ?>"><?php echo $this->_var['question']; ?></option>
	          	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </select>
        </div>
      <div class="form_top">
      	<span><?php echo $this->_var['lang']['passwd_answer']; ?>:</span>
      	<input placeholder="<?php echo $this->_var['lang']['passwd_answer']; ?>" name="passwd_answer" class="text" type="text" datatype="*"/></span>
      </div>

 	<div class="form_bot">
		<input type="submit" value="下一步" id="sub" />
		<span><?php echo $this->_var['lang']['question_bug']; ?><a href="javascript:"><?php echo $this->_var['lang']['contact_client']; ?></a>。</span>
	</div>
</form>
		</div>
	</div>

</body>
</html>