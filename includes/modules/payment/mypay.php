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
 * $Id: mypay.php 17217 2011-01-19 06:29:08Z liubo $
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/mypay.php';

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
    $modules[$i]['desc']    = 'mypay_desc';

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
        array('name' => 'mypay_userid',           'type' => 'text',   'value' => ''),
        array('name' => 'mypay_secret',               'type' => 'text',   'value' => ''),
    );

    return;
}

/**
 * 类
 */
class mypay
{

    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */
    function mypay()
    {
    }

    function __construct()
    {
        $this->mypay();
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
		$sign =  md5(md5($money.return_url(basename(__FILE__, '.php')).$order_sn.'1').$payment['mypay_secret']);//签名
		
		
        $button = '<div style="text-align:center"><input type="button" onclick="window.open(\'https://www.mingyie.com/api/pay/?order_sn='.$order_sn.'&money='.$money.'&return_url='.return_url(basename(__FILE__, '.php')).'&user_id='.$payment['mypay_userid'].'&type=Alipay&wappc=1&sign='.$sign.'\')" value="' .$GLOBALS['_LANG']['pay_button']. '" /></div>';

        return $button;
    }

    /**
     * 响应操作
     */
    function respond()
    {
        if (!empty($_POST))
        {
            foreach($_POST as $key => $data)
            {
                $_GET[$key] = $data;
            }
        }
        $payment  = get_payment('mypay');
		$order_sn = $_GET['order_sn'];
		/* 检查支付的金额是否相符 */
        if (!check_money($order_sn,$_GET['money']))
        {
            return false;
        }
		
		//验证签名是否正确
		$signa = md5(md5($order_sn.$_GET['money'].$_GET['trade_no'].$payment['mypay_userid']).$payment['mypay_secret']);
		
		if($signa != $_GET['sign']){
			
			return false;
		}
		
		if($signa == $_GET['sign'] && $_GET['trade_status'] == 10000){
			
			/* 改变订单状态 */
            order_paid($order_sn, 2);

            return true;
			
		}else
        {
            return false;
        }
    }
}

?>