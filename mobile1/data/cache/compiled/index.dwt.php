

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" /> 
    <meta charset="UTF-8">
    <meta name = "viewport" content="user-scalable=0"/>
    <meta name="viewport" content="maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <title>首页</title>
     <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/modeil.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/css/bootstrap.min.css">
      <script src="__PUBLIC__/js/jquery-3.1.1.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.js"></script>
    <script src="__PUBLIC__/js/swiper.min.js"></script>

    <style>
        #city_1{
            margin-top: 40px;
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
    <div class="row zindex">
        <div class="col-xs-2 Location" id="city_1">
            <select class="prov"></select>
            <select class="city"></select>
        </div>
        <div class="col-xs-8 paddingnone">
              <form action="<?php echo url('category/index');?><?php if ($this->_var['id']): ?>&id=<?php echo $this->_var['id']; ?><?php endif; ?>"  method="post" >
            <span class="glyphicon glyphicon-search Location-boxOne" ></span>
            <input type="search" class="CommodityName" name="keywords" placeholder="<?php echo $this->_var['lang']['no_keywords']; ?>">
             </form>
        </div>
        <div class="col-xs-1">
            <span class="Location-box-one" style="margin-left: 15px">
                <img class="click" src="themes/default/images/Navigation_home_icon2.png" alt="">
            </span>
        </div>
    </div>
    <div class="swiper-container swiper1">
        <div class="swiper-wrapper">
           
        <?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </div>
        
        <div class="swiper-pagination swiper-pagination1"></div>
        
    </div>
</header>
<section id="section">
    <div class="row Secontent">
        <div class="swiper-container swiper2" style="height: 245px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <ul>
                        <a href="<?php echo url('user/account_deposit');?>">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/Sub_menu_icon_icon2.png" alt=""></span>
                                <dl>充值</dl>
                            </li>
                        </a>
                        <a href="<?php echo url('user/account_transfer');?>">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon3.png" alt=""></span>
                                <dl>转账</dl>
                            </li>
                        </a>
                        <a href="<?php echo url('user/my_loan');?>">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon4.png" alt=""></span>
                                <dl>贷款</dl>
                            </li>
                        </a>
                        <a href="<?php echo url('user/my_openaccount');?>">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon5.png" alt=""></span>
                                <dl>开户</dl>
                            </li>
                        </a>
                        <a href="#">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon11.png" alt=""></span>
                                <dl>宽带</dl>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="swiper-slide">
                    <ul>
                        <a href="#">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon12.png" alt=""></span>
                                <dl>银行卡</dl>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row Secontent">
        <div class="swiper-container swiper2" style="height: 245px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <ul>
                        <a href="<?php echo url('user/order_list');?>">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon6.png" alt=""></span>
                                <dl>订单查询</dl>
                            </li>
                        </a>
                        <a href="#">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon7.png" alt=""></span>
                                <dl>商品收藏</dl>
                            </li>
                        </a>
                        <a href="#">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon8.png" alt=""></span>
                                <dl>智慧社区</dl>
                            </li>
                        </a>
                        <a href="#">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon9.png" alt=""></span>
                                <dl>客服服务</dl>
                            </li>
                        </a>
                        <a href="#">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon10.png" alt=""></span>
                                <dl>智慧城市</dl>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="swiper-slide">
                    <ul>
                        <a href="#">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon14.png" alt=""></span>
                                <dl>证劵</dl>
                            </li>
                        </a>
                        <a href="#">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon15.png" alt=""></span>
                                <dl>加油服务</dl>
                            </li>
                        </a>
                        <a href="#">
                            <li class="col-xs-2">
                                <span><img src="themes/default/images/icon2.png" alt=""></span>
                                <dl>商城</dl>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sectionTwo">
    <h1 style="text-align: center;font-size: 2.8em;font-weight: bold">热卖·活动</h1>
    <span><img src="themes/default/images/_44.png" alt=""></span>
    <div class="row">
    <?php $_from = $this->_var['goods_all2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?> 
        <div class="col-xs-5">
            <a href="<?php echo url('goods/index');?>&id=<?php echo $this->_var['goods']['goods_id']; ?>"><img class="img-responsive height" src="../<?php echo $this->_var['goods']['goods_img']; ?>" alt=""></a>
        </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
    <!--     <div class="col-xs-7">
            <a href="#"><img class="img-responsive heightOne" src="themes/default/images/Home_products2.png" alt=""></a>
            <a href="#"><img class="img-responsive heightOne" src="themes/default/images/Home_products3.png" alt="" style="margin-top: 25px"></a>
        </div> -->
    </div>
</section>
<section id="sectionThree">
    <h1>精选·活动</h1>
    <span><img src="themes/default/images/_44.png" alt=""></span>
    <div class="row myRow" style="padding: 20px 0;">
                  
                    <?php $_from = $this->_var['goods_all3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?> 
                    <div class="col-xs-4">
                        <span><a href="<?php echo url('goods/index');?>&id=<?php echo $this->_var['goods']['goods_id']; ?>"><img src="../<?php echo $this->_var['goods']['goods_img']; ?>" alt=""></a></span>
                        <dl style="font-weight: bold"><?php echo $this->_var['goods']['goods_name']; ?></dl>
                        <!-- <dl>暖心和暖胃</dl> -->
                    </div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    
    </div>
</section>


<!--   <ul id="J_ItemList">
    <li class="single_item">
    </li>
     <a href="javascript:;" style="text-align:center" class="get_more"></a>
  </ul> -->


<section id="sectionFour">
    <h1>所有商品</h1>
    <span><img src="themes/default/images/_44.png" alt=""></span>
</section>
<section id="sectionFive" style="padding-bottom:162px">
    <div class="row">
    <?php $_from = $this->_var['goods_all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?> 
        <div class="col-xs-6 active">
            <div class="TextLeft">
                <p><?php echo $this->_var['goods']['goods_name']; ?></p>
            </div>
            <div class="RightLeft">
                <a href="<?php echo url('goods/index');?>&id=<?php echo $this->_var['goods']['goods_id']; ?>"><img src="../<?php echo $this->_var['goods']['goods_img']; ?>" alt=""></a>
            </div>
        </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <div class="row">
        <div class="col-xs-6"></div>
        <div class="col-xs-6"></div>
    </div>
</section>
<?php echo $this->fetch('library/footer.lbi'); ?> 
<div class="positionfixd">
    <img src="themes/default/images/man.png" alt="">
</div>
<div class="mask">
    <ul>
        <li class="one">
            <img src="themes/default/images/icon1(1).png" alt="">
        </li>
        <li class="one1">
            <img src="themes/default/images/images/icon2.png" alt="">
        </li>
        <li class="one2">
            <img src="themes/default/images/images/icon3.png" alt="">
        </li>
        <li class="one3">
            <img src="themes/default/images/images/icon4.png" alt="">
        </li>
        <li class="one4">
            <img src="themes/default/images/images/icon5.png" alt="">
        </li>
        <li class="one5">
            <img src="themes/default/images/images/icon6.png" alt="">
        </li>
    </ul>
</div>


<script type="text/javascript" src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js"></script>

<script>
    var swiper1 = new Swiper('.swiper1', {
        autoplay: 3000,
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        spaceBetween: 30,
    });
    var swiper2 = new Swiper('.swiper2', {
        pagination: '.swiper-pagination2',
        paginationClickable: true,
        spaceBetween: 30,
    });
    var swiper3 = new Swiper('.swiper3', {
        pagination: '.swiper-pagination3',
        paginationClickable: true,
        spaceBetween: 30,
    });
</script>

<script type="text/javascript" src="__PUBLIC__/js/jquery.cityselect.js"></script>
<script type="text/javascript">
    $(function() {
        var province = remote_ip_info['province'];//当前省
        var city = remote_ip_info['city'];//当前市
        var district = remote_ip_info['district'];//当前区/县

        $("#city_1").citySelect({
            prov: province,
            city: city
        });
        //纯真IP库
        $.get("<?php echo url('index/dingwei');?>", function(data) {
            $("#city_2").html(data);
        })

    });
    $(function(){
        $('.mask').hide();
        $('.positionfixd').click(function(){
            $('.mask').fadeToggle(200);
        })
    });
</script>
<!-- </body>
</html> -->
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">
get_asynclist("<?php echo url('index/ajax_goods', array('type'=>'best'));?>" , '__TPL__/images/loader.gif');
</script>
</body></html> 