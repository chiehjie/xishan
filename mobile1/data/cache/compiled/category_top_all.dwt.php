<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/category.css"/>
    <style>
        #city_1{
            vertical-align: middle;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        input{
            border: none;
            outline: none;
        }
        select{
            width: 50%;
            font-size: .5em;
            float: left;
            border: none;
            outline: none;
            background-color: rgba(255,255,255,0);
            /*去掉倒三角*/
            /*appearance:none;*/
            /*-moz-appearance:none;*/
            /*-webkit-appearance:none;*/
        }
    </style>
</head>
<body>
<header id="header">
    <div class="row myRow">
        <div class="col-xs-2 location" id="city_1">
            <!--<span id="atCity">定位</span>-->
            <select class="prov"></select>
            <select class="city"></select>
        </div>
        <div class="col-xs-8 mySearch">
        <form action="<?php echo url('category/index');?><?php if ($this->_var['id']): ?>&id=<?php echo $this->_var['id']; ?><?php endif; ?>"  method="post" >
            <span class="glyphicon glyphicon-search"></span>
            <input type="search" class="myInput" name="keywords" placeholder="<?php echo $this->_var['lang']['no_keywords']; ?>">
            </form>
        </div>
        <div class="col-xs-2 myImg">
            <img  src="themes/default/images/category_03.png" alt="">
        </div>
    </div>
</header>
<div class="row myBody" style="padding-bottom:30%">
    <div class="col-xs-3">
    <?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
        <a href="<?php echo url('category/index',array('id'=>$this->_var['cat']['id']));?>"><div class="box"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></div></a>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
    </div>
    <div class="col-xs-9 content" style="display: block">
        <div class="myContent"><img src="themes/default/images/bannar_03.png" alt=""/></div>
     <!--    <div class="myLable">热卖</div> -->
        <div class="myContainer">
        
          <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <?php if ($this->_var['goods']['goods_id']): ?>
            <div class="myBox">
                <div class="myBox_img">
                     <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt=""/></a>
                </div>
                <p><?php echo $this->_var['goods']['goods_name']; ?></p>
            </div>
            <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        </div>
    </div>
   
 </div>
 
<?php echo $this->fetch('library/footer.lbi'); ?> 
<script src="__PUBLIC__/js/jquery-1.11.3.js"></script>
<script src="__PUBLIC__/js/category.js"></script>
<script type="text/javascript" src="__PUBLIC__/jquery.cityselect.js"></script>
<script type="text/javascript" src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js"></script>
<script>
    $(function(){
        var province = remote_ip_info['province'];//当前省
        var city = remote_ip_info['city'];//当前市
        var district = remote_ip_info['district'];//当前区/县

        $("#city_1").citySelect({
            prov: province,
            city: city
        });
        //纯真IP库
        $.get("ajax.php", function(data) {
            $("#city_2").html(data);
        })
    });
</script>
</body>
</html>