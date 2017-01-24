<!DOCTYPE html>
<!-- saved from url=(0055)http://115.29.176.130/restaurant/Admin/Admin/index.html -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="styles/pintuer.css">
    <link rel="stylesheet" href="styles/admin.css">
    <script src="js/jquery.js"></script>
  <script src="js/pintuer.js"></script> 
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
<?php $_from = $this->_var['admin_name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
  <div class="logo margin-big-left fadein-top">
    <h1><img src="../data/admin_head/<?php echo $this->_var['list']['admin_head']; ?>" class="radius-circle rotate-hover" height="50" alt="">后台管理中心</h1>
  </div>
    <div class="head-l">

    <a class="button button-little bg-green" href="javascript:void(0)" target="_blank"><?php echo $this->_var['list']['admin_name']; ?></a> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     &nbsp;&nbsp;<a class="button button-little bg-red" href="privilege.php?act=logout"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
</body>
</html>