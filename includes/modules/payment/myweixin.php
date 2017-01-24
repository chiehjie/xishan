<?php

/**
 * ECSHOP 支付宝插件
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: myweixin.php 17217 2011-01-19 06:29:08Z liubo $
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/myweixin.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'myweixin_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = '铭翼开发中心';

    /* 网址 */
    $modules[$i]['website'] = 'http://www.mingyie.com';

    /* 版本号 */
    $modules[$i]['version'] = '2.0.0';

    /* 配置信息 */
    $modules[$i]['config']  = array(
        array('name' => 'myweixin_userid',           'type' => 'text',   'value' => ''),
        array('name' => 'myweixin_secret',               'type' => 'text',   'value' => ''),
    );

    return;
}

/**
 * 类
 */
class myweixin
{

    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */
    function myweixin()
    {
    }

    function __construct()
    {
        $this->myweixin();
    }

    /**
     * 生成支付代码
     * @param   array   $order      订单信息
     * @param   array   $payment    支付方式信息
	 * $wappc 1为PC 2为手机
     */
    function get_code($order, $payment)
    {
        if (!defined('EC_CHARSET'))
        {
            $charset = 'utf-8';
        }
        else
        {
            $charset = EC_CHARSET;
        }
		
		$money = $order['order_amount'] * 100;//将元转换为分单位
		$order_sn = $order['order_sn'];//商户订单号
		$sign =  md5(md5($money.return_url(basename(__FILE__, '.php')).$order_sn.'1').$payment['myweixin_secret']);//签名
		
		$param = array (
		'type' => 'Weixin',//支付别名
		'money' => $money,//支付金额以分为单位
		'return_url' => return_url(basename(__FILE__, '.php')),//回调地址(支付成功后会跳转到改地址)
		'notify_url' => return_url(basename(__FILE__, '.php')),//异步通知地址(支付成功后会向改地址发送POST处理结果请求)
		'order_sn' => $order_sn,//商户订单号
		'wappc' => '1',//微信支付统一为1
		'user_id' => $payment['myweixin_userid'],//铭翼开发中心会员ID
		'sign'=>$sign,//签名
		);
		$url = 'https://www.mingyie.com/api/pay/';
		$returnz = $this->request_post($url,$param);
		
		//订单查询以便支付成功后自动跳转
		
		$cxsign = md5(md5($payment['myweixin_userid'].$order_sn).$payment['myweixin_secret']);
		$html = '<script type="text/javascript" src="/js/transport.js"></script>';
		$html .= '<script type="text/javascript">';
		$html .='setInterval(ajaxstatus,3000);
		
		function ajaxstatus()
		{
			order_sn    = "'.$order_sn.'";
			user_id     = "'.$payment['myweixin_userid'].'";
			sign        = "'.$cxsign.'";
			
			Ajax.call("wx_mingyi_pay.php", "order_sn=" + "'.$order_sn.'" + "&user_id=" + "'.$payment['myweixin_userid'].'" + "&sign=" + "'.$cxsign.'", returnfhz, "POST", "JSON");
		}
		
		function returnfhz(obj){
			
			if(obj == 10106){
				
				alert("支付成功");location.href="/user.php";
			}
			
		}';
		
		$html .='</script>';
		
		
		
        $button = '<div style="text-align:center;height: 350px;width: 320px;">'.$returnz.'</div>'.$html;

        return $button;
    }

    /**
     * 响应操作
     */
    function respond()
    {
		
		$payment  = get_payment('myweixin');
		$order_sn = $_POST['order_sn'];
		/* 检查支付的金额是否相符 */
        if (!check_money($order_sn, $_POST['money']))
        {
            return false;
        }
		
		//验证签名是否正确
		$signa = md5(md5($order_sn.$_POST['money'].$_POST['trade_no'].$payment['myweixin_userid']).$payment['myweixin_secret']);
		if($signa != $_POST['sign']){
			
			return false;
		}
		
		
		if($signa == $_POST['sign'] && $_POST['trade_status'] == 10000){
			
			/* 改变订单状态 */
            order_paid($order_sn, 2);

            return true;
			
		}else
        {
            return false;
        }
    }
	
	//POST请求
	function request_post($url,$param) {
	
	
        if (empty($url) || empty($param)) {
            return false;
        }
        
        $postUrl = $url;
        $curlPost = $param;
        $ch = curl_init();//初始化curl
        curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); // 从证书中检查SSL加密算法是否存在
        curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
        $data = curl_exec($ch);//运行curl
        curl_close($ch);
        
        return $data;
	}
}

?>