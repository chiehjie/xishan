<?php

/**
 * ECSHOP 管理中心菜单数组
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com； 
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: inc_menu.php 17217 2011-01-19 06:29:08Z liubo $
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

// $modules['02_cat_and_goods']['01_goods_list']       = 'goods.php?act=list';         // 商品列表
// $modules['02_cat_and_goods']['02_goods_add']        = 'goods.php?act=add';          // 添加商品
// $modules['02_cat_and_goods']['03_category_list']    = 'category.php?act=list';
// $modules['02_cat_and_goods']['05_comment_manage']   = 'comment_manage.php?act=list';
// $modules['02_cat_and_goods']['06_goods_brand_list'] = 'brand.php?act=list';
// $modules['02_cat_and_goods']['08_goods_type']       = 'goods_type.php?act=manage';
// $modules['02_cat_and_goods']['11_goods_trash']      = 'goods.php?act=trash';        // 商品回收站
// $modules['02_cat_and_goods']['12_batch_pic']        = 'picture_batch.php';
// $modules['02_cat_and_goods']['13_batch_add']        = 'goods_batch.php?act=add';    // 商品批量上传
// $modules['02_cat_and_goods']['14_goods_export']     = 'goods_export.php?act=goods_export';
// $modules['02_cat_and_goods']['15_batch_edit']       = 'goods_batch.php?act=select'; // 商品批量修改
// $modules['02_cat_and_goods']['16_goods_script']     = 'gen_goods_script.php?act=setup';
// $modules['02_cat_and_goods']['17_tag_manage']       = 'tag_manage.php?act=list';
// $modules['02_cat_and_goods']['50_virtual_card_list']   = 'goods.php?act=list&extension_code=virtual_card';
// $modules['02_cat_and_goods']['51_virtual_card_add']    = 'goods.php?act=add&extension_code=virtual_card';
// $modules['02_cat_and_goods']['52_virtual_card_change'] = 'virtual_card.php?act=change';
// $modules['02_cat_and_goods']['goods_auto']             = 'goods_auto.php?act=list';


$modules['03_promotion']['02_snatch_list']          = 'snatch.php?act=list';
$modules['03_promotion']['04_bonustype_list']       = 'bonus.php?act=list';
$modules['03_promotion']['06_pack_list']            = 'pack.php?act=list';
$modules['03_promotion']['07_card_list']            = 'card.php?act=list';
$modules['03_promotion']['08_group_buy']            = 'group_buy.php?act=list';
$modules['03_promotion']['09_topic']                = 'topic.php?act=list';
$modules['03_promotion']['10_auction']              = 'auction.php?act=list';
$modules['03_promotion']['12_favourable']           = 'favourable.php?act=list';
$modules['03_promotion']['13_wholesale']            = 'wholesale.php?act=list';
$modules['03_promotion']['14_package_list']         = 'package.php?act=list';
//$modules['03_promotion']['ebao_commend']            = 'ebao_commend.php?act=list';
$modules['03_promotion']['15_exchange_goods']       = 'exchange_goods.php?act=list';


$modules['04_order']['02_order_list']               = 'order.php?act=list';
$modules['04_order']['03_order_query']              = 'order.php?act=order_query';
$modules['04_order']['04_merge_order']              = 'order.php?act=merge';
$modules['04_order']['05_edit_order_print']         = 'order.php?act=templates';
$modules['04_order']['06_undispose_booking']        = 'goods_booking.php?act=list_all';
//$modules['04_order']['07_repay_application']        = 'repay.php?act=list_all';
$modules['04_order']['08_add_order']                = 'order.php?act=add';
$modules['04_order']['09_delivery_order']           = 'order.php?act=delivery_list';
$modules['04_order']['10_back_order']               = 'order.php?act=back_list';

$modules['05_banner']['ad_position']                = 'ad_position.php?act=list';
$modules['05_banner']['ad_list']                    = 'ads.php?act=list';

$modules['06_stats']['flow_stats']                  = 'flow_stats.php?act=view';
$modules['06_stats']['searchengine_stats']          = 'searchengine_stats.php?act=view';
$modules['06_stats']['z_clicks_stats']              = 'adsense.php?act=list';
$modules['06_stats']['report_guest']                = 'guest_stats.php?act=list';
$modules['06_stats']['report_order']                = 'order_stats.php?act=list';
$modules['06_stats']['report_sell']                 = 'sale_general.php?act=list';
$modules['06_stats']['sale_list']                   = 'sale_list.php?act=list';
$modules['06_stats']['sell_stats']                  = 'sale_order.php?act=goods_num';
$modules['06_stats']['report_users']                = 'users_order.php?act=order_num';
$modules['06_stats']['visit_buy_per']               = 'visit_sold.php?act=list';

$modules['07_content']['03_article_list']           = 'article.php?act=list';
$modules['07_content']['02_articlecat_list']        = 'articlecat.php?act=list';
$modules['07_content']['vote_list']                 = 'vote.php?act=list';
$modules['07_content']['article_auto']              = 'article_auto.php?act=list';
//$modules['07_content']['shop_help']                 = 'shophelp.php?act=list_cat';
//$modules['07_content']['shop_info']                 = 'shopinfo.php?act=list';


// $modules['08_members']['03_users_list']             = 'users.php?act=list';
// $modules['08_members']['04_users_add']              = 'users.php?act=add';
// $modules['08_members']['05_user_rank_list']         = 'user_rank.php?act=list';
// $modules['08_members']['06_list_integrate']         = 'integrate.php?act=list';
// $modules['08_members']['08_unreply_msg']            = 'user_msg.php?act=list_all';
// $modules['08_members']['09_user_account']           = 'user_account.php?act=list';
// $modules['08_members']['10_user_account_manage']    = 'user_account_manage.php?act=list';

// $modules['10_priv_admin']['admin_logs']             = 'admin_logs.php?act=list';
// $modules['10_priv_admin']['admin_list']             = 'privilege.php?act=list';
// $modules['10_priv_admin']['admin_role']             = 'role.php?act=list';
// $modules['10_priv_admin']['agency_list']            = 'agency.php?act=list';
// $modules['10_priv_admin']['suppliers_list']         = 'suppliers.php?act=list'; // 供货商

$modules['11_system']['01_shop_config']             = 'shop_config.php?act=list_edit';
// $modules['11_system']['shop_authorized']             = 'license.php?act=list_edit';
$modules['11_system']['02_payment_list']            = 'payment.php?act=list';
$modules['11_system']['03_shipping_list']           = 'shipping.php?act=list';
$modules['11_system']['04_mail_settings']           = 'shop_config.php?act=mail_settings';
$modules['11_system']['05_area_list']               = 'area_manage.php?act=list';
//$modules['11_system']['06_plugins']                 = 'plugins.php?act=list';
$modules['11_system']['07_cron_schcron']            = 'cron.php?act=list';
$modules['11_system']['08_friendlink_list']         = 'friend_link.php?act=list';
$modules['11_system']['sitemap']                    = 'sitemap.php';
$modules['11_system']['check_file_priv']            = 'check_file_priv.php?act=check';
$modules['11_system']['captcha_manage']             = 'captcha_manage.php?act=main';
$modules['11_system']['ucenter_setup']              = 'integrate.php?act=setup&code=ucenter';
$modules['11_system']['flashplay']                  = 'flashplay.php?act=list';
$modules['11_system']['navigator']                  = 'navigator.php?act=list';
$modules['11_system']['file_check']                 = 'filecheck.php';
//$modules['11_system']['fckfile_manage']             = 'fckfile_manage.php?act=list';
$modules['11_system']['021_reg_fields']             = 'reg_fields.php?act=list';


$modules['12_template']['02_template_select']       = 'template.php?act=list';
$modules['12_template']['03_template_setup']        = 'template.php?act=setup';
$modules['12_template']['04_template_library']      = 'template.php?act=library';
$modules['12_template']['05_edit_languages']        = 'edit_languages.php?act=list';
$modules['12_template']['06_template_backup']       = 'template.php?act=backup_setting';
$modules['12_template']['mail_template_manage']     = 'mail_template.php?act=list';


$modules['13_backup']['02_db_manage']               = 'database.php?act=backup';
$modules['13_backup']['03_db_optimize']             = 'database.php?act=optimize';
$modules['13_backup']['04_sql_query']               = 'sql.php?act=main';
//$modules['13_backup']['05_synchronous']             = 'integrate.php?act=sync';
$modules['13_backup']['convert']                    = 'convert.php?act=main';
$modules['13_backup']['clear']                      = 'database.php?act=clear';


//$modules['14_sms']['02_sms_my_info']                = 'sms.php?act=display_my_info';
// $modules['14_sms']['03_sms_send']                   = 'sms.php?act=display_send_ui';
// $modules['14_sms']['04_sms_sign']                   = 'sms.php?act=sms_sign';
//$modules['14_sms']['04_sms_charge']                 = 'sms.php?act=display_charge_ui';
//$modules['14_sms']['05_sms_send_history']           = 'sms.php?act=display_send_history_ui';
//$modules['14_sms']['06_sms_charge_history']         = 'sms.php?act=display_charge_history_ui';

$modules['15_rec']['affiliate']                     = 'affiliate.php?act=list';
$modules['15_rec']['affiliate_ck']                  = 'affiliate_ck.php?act=list';

$modules['16_email_manage']['email_list']           = 'email_list.php?act=list';
$modules['16_email_manage']['magazine_list']        = 'magazine_list.php?act=list';
$modules['16_email_manage']['attention_list']       = 'attention_list.php?act=list';
$modules['16_email_manage']['view_sendlist']        = 'view_sendlist.php?act=list';



// $modules['18_lead_manage']['lead']        = 'lead.php?act=list';//移动版全民分销开通引导页



$modules['25_order']['02_order_list']               = 'order.php?act=list';
$modules['25_order']['03_order_query']              = 'order.php?act=order_query';
$modules['25_order']['04_merge_order']              = 'order.php?act=merge';
$modules['25_order']['05_edit_order_print']         = 'order.php?act=templates';
$modules['25_order']['06_undispose_booking']        = 'goods_booking.php?act=list_all';
//$modules['25_order']['07_repay_application']        = 'repay.php?act=list_all';
$modules['25_order']['08_add_order']                = 'order.php?act=add';
$modules['25_order']['09_delivery_order']           = 'order.php?act=delivery_list';
$modules['25_order']['10_back_order']               = 'order.php?act=back_list';


/*二次开发*/

/*管理员管理*/
$modules['20_priv_admin']['my_admin_list']             = 'privilege.php?act=list';//管理员列表
$modules['20_priv_admin']['my_admin_add']              = 'privilege.php?act=add';//添加管理员

/*会员管理*/
$modules['21_members']['my_users_list']             = 'users.php?act=list';//会员列表
$modules['21_members']['my_users_alist']             = 'users.php?act=alist';//无商家会员列表
$modules['21_members']['unreply_msg']            = 'user_msg.php?act=list_all';
$modules['21_members']['user_account']           = 'user_account.php?act=list';
$modules['21_members']['user_account_manage']    = 'user_account_manage.php?act=list';
// $modules['21_members']['user_rank_list']         = 'user_rank.php?act=list';
$modules['21_members']['user_rank_add']         = 'user_account.php?act=add';
$modules['21_members']['my_payee_list']         = 'my_payee.php?act=list';
$modules['21_members']['my_payee_add']         = 'my_payee.php?act=add';
$modules['21_members']['my_pusher_list']         = 'my_pusher.php?act=list';
$modules['21_members']['my_pusher_add']         = 'my_pusher.php?act=add';


/*角色管理*/
$modules['23_priv_admin']['my_admin_role']             = 'role.php?act=list';
$modules['23_priv_admin']['my_admin_role_add']             = 'role.php?act=add';
 
/*菜品管理*/
$modules['24_dishes']['01_my_dishes_list']       = 'goods.php?act=list';  // 菜品列表
$modules['24_dishes']['02_my_dishes_add']        = 'goods.php?act=add';//添加菜品

$modules['24_dishes']['my_dishes_class_list']       = 'category.php?act=list';//菜品分类列表
$modules['24_dishes']['my_dishes_class_add']        = 'category.php?act=add';//添加菜品分类
$modules['24_dishes']['05_comment_manage']   = 'comment_manage.php?act=list';
// $modules['24_dishes']['06_goods_brand_list'] = 'brand.php?act=list';
$modules['24_dishes']['08_goods_type']       = 'goods_type.php?act=manage';
$modules['24_dishes']['11_goods_trash']      = 'goods.php?act=trash';        // 商品回收站
$modules['24_dishes']['12_batch_pic']        = 'picture_batch.php';
$modules['24_dishes']['13_batch_add']        = 'goods_batch.php?act=add';    // 商品批量上传
$modules['24_dishes']['14_goods_export']     = 'goods_export.php?act=goods_export';
$modules['24_dishes']['15_batch_edit']       = 'goods_batch.php?act=select'; // 商品批量修改
$modules['24_dishes']['16_goods_script']     = 'gen_goods_script.php?act=setup';
$modules['24_dishes']['17_tag_manage']       = 'tag_manage.php?act=list';
$modules['24_dishes']['50_virtual_card_list']   = 'goods.php?act=list&extension_code=virtual_card';
$modules['24_dishes']['51_virtual_card_add']    = 'goods.php?act=add&extension_code=virtual_card';
$modules['24_dishes']['52_virtual_card_change'] = 'virtual_card.php?act=change';
$modules['24_dishes']['goods_auto']             = 'goods_auto.php?act=list';
/*促销管理*/
// $modules['27_promotion']['02_snatch_list']          = 'snatch.php?act=list';
// $modules['27_promotion']['04_bonustype_list']       = 'bonus.php?act=list';
// $modules['27_promotion']['06_pack_list']            = 'pack.php?act=list';
// $modules['27_promotion']['07_card_list']            = 'card.php?act=list';
// $modules['27_promotion']['08_group_buy']            = 'group_buy.php?act=list';
// $modules['27_promotion']['09_topic']                = 'topic.php?act=list';
// $modules['27_promotion']['10_auction']              = 'auction.php?act=list';
// $modules['27_promotion']['12_favourable']           = 'favourable.php?act=list';
// $modules['27_promotion']['13_wholesale']            = 'wholesale.php?act=list';
// $modules['27_promotion']['14_package_list']         = 'package.php?act=list';
// //$modules['27_promotion']['ebao_commend']            = 'ebao_commend.php?act=list';
// $modules['27_promotion']['15_exchange_goods']       = 'exchange_goods.php?act=list';
// /* 积分兑换管理 */
// $_LANG['15_exchange_goods'] = '积分商城商品';
// $_LANG['15_exchange_goods_list'] = '积分商城商品列表';
// $_LANG['exchange_goods_add'] = '添加新商品';
// /*广告管理*/
// $modules['28_banner']['ad_position']                = 'ad_position.php?act=list';
// $modules['28_banner']['ad_list']                    = 'ads.php?act=list';

// /*报表统计*/
// $modules['29_stats']['flow_stats']                  = 'flow_stats.php?act=view';
// $modules['29_stats']['searchengine_stats']          = 'searchengine_stats.php?act=view';
// $modules['29_stats']['z_clicks_stats']              = 'adsense.php?act=list';
// $modules['29_stats']['report_guest']                = 'guest_stats.php?act=list';
// $modules['29_stats']['report_order']                = 'order_stats.php?act=list';
// $modules['29_stats']['report_sell']                 = 'sale_general.php?act=list';
// $modules['29_stats']['sale_list']                   = 'sale_list.php?act=list';
// $modules['29_stats']['sell_stats']                  = 'sale_order.php?act=goods_num';
// $modules['29_stats']['report_users']                = 'users_order.php?act=order_num';
// $modules['29_stats']['visit_buy_per']               = 'visit_sold.php?act=list';
// $modules['30_content']['03_article_list']           = 'article.php?act=list';
// $modules['30_content']['02_articlecat_list']        = 'articlecat.php?act=list';
// $modules['30_content']['vote_list']                 = 'vote.php?act=list';
// $modules['30_content']['article_auto']              = 'article_auto.php?act=list';
// $modules['31_system']['01_shop_config']             = 'shop_config.php?act=list_edit';
// // $modules['31_system']['shop_authorized']             = 'license.php?act=list_edit';
// $modules['31_system']['02_payment_list']            = 'payment.php?act=list';
// $modules['31_system']['03_shipping_list']           = 'shipping.php?act=list';
// $modules['31_system']['04_mail_settings']           = 'shop_config.php?act=mail_settings';
// $modules['31_system']['05_area_list']               = 'area_manage.php?act=list';
// //$modules['31_system']['06_plugins']                 = 'plugins.php?act=list';
// $modules['31_system']['07_cron_schcron']            = 'cron.php?act=list';
// $modules['31_system']['08_friendlink_list']         = 'friend_link.php?act=list';
// $modules['31_system']['sitemap']                    = 'sitemap.php';
// $modules['31_system']['check_file_priv']            = 'check_file_priv.php?act=check';
// $modules['31_system']['captcha_manage']             = 'captcha_manage.php?act=main';
// $modules['31_system']['ucenter_setup']              = 'integrate.php?act=setup&code=ucenter';
// $modules['31_system']['flashplay']                  = 'flashplay.php?act=list';
// $modules['31_system']['navigator']                  = 'navigator.php?act=list';
// $modules['31_system']['file_check']                 = 'filecheck.php';
// //$modules['31_system']['fckfile_manage']             = 'fckfile_manage.php?act=list';
// $modules['31_system']['021_reg_fields']             = 'reg_fields.php?act=list';
// $modules['32_template']['02_template_select']       = 'template.php?act=list';
// $modules['32_template']['03_template_setup']        = 'template.php?act=setup';
// $modules['32_template']['04_template_library']      = 'template.php?act=library';
// $modules['32_template']['05_edit_languages']        = 'edit_languages.php?act=list';
// $modules['32_template']['06_template_backup']       = 'template.php?act=backup_setting';
// $modules['32_template']['mail_template_manage']     = 'mail_template.php?act=list';


// $modules['33_backup']['02_db_manage']               = 'database.php?act=backup';
// $modules['33_backup']['03_db_optimize']             = 'database.php?act=optimize';
// $modules['33_backup']['04_sql_query']               = 'sql.php?act=main';
// //$modules['33_backup']['05_synchronous']             = 'integrate.php?act=sync';
// $modules['33_backup']['convert']                    = 'convert.php?act=main';
// $modules['33_backup']['clear']                      = 'database.php?act=clear';


// //$modules['34_sms']['02_sms_my_info']                = 'sms.php?act=display_my_info';
// $modules['34_sms']['03_sms_send']                   = 'sms.php?act=display_send_ui';
// $modules['34_sms']['04_sms_sign']                   = 'sms.php?act=sms_sign';
// //$modules['34_sms']['04_sms_charge']                 = 'sms.php?act=display_charge_ui';
// //$modules['34_sms']['05_sms_send_history']           = 'sms.php?act=display_send_history_ui';
// //$modules['34_sms']['06_sms_charge_history']         = 'sms.php?act=display_charge_history_ui';

// $modules['35_rec']['affiliate']                     = 'affiliate.php?act=list';
// $modules['35_rec']['affiliate_ck']                  = 'affiliate_ck.php?act=list';

// $modules['36_email_manage']['email_list']           = 'email_list.php?act=list';
// $modules['36_email_manage']['magazine_list']        = 'magazine_list.php?act=list';
// $modules['36_email_manage']['attention_list']       = 'attention_list.php?act=list';
// $modules['36_email_manage']['view_sendlist']        = 'view_sendlist.php?act=list';
// /* cls_image类的语言项 */
// $_LANG['directory_readonly'] = '目录 % 不存在或不可写';
// $_LANG['invalid_upload_image_type'] = '不是允许的图片格式';
// $_LANG['upload_failure'] = '文件 %s 上传失败。';
// $_LANG['missing_gd'] = '没有安装GD库';
// $_LANG['missing_orgin_image'] = '找不到原始图片 %s ';
// $_LANG['nonsupport_type'] = '不支持该图像格式 %s ';
// $_LANG['creating_failure'] = '创建图片失败';
// $_LANG['writting_failure'] = '图片写入失败';
// $_LANG['empty_watermark'] = '水印文件参数不能为空';
// $_LANG['missing_watermark'] = '找不到水印文件%s';
// $_LANG['create_watermark_res'] = '创建水印图片资源失败。水印图片类型为%s';
// $_LANG['create_origin_image_res'] = '创建原始图片资源失败，原始图片类型%s';
// $_LANG['invalid_image_type'] = '无法识别水印图片 %s ';
// $_LANG['file_unavailable'] = '文件 %s 不存在或不可读';

// /* 邮件发送错误信息 */
// $_LANG['smtp_setting_error'] = '邮件服务器设置信息不完整';
// $_LANG['smtp_connect_failure'] = '无法连接到邮件服务器 %s';
// $_LANG['smtp_login_failure'] = '邮件服务器验证帐号或密码不正确';
// $_LANG['sendemail_false'] = '邮件发送失败，请检查您的邮件服务器设置！';
// $_LANG['smtp_refuse'] = '服务器拒绝发送该邮件';
// $_LANG['disabled_fsockopen'] = '服务器已禁用 fsocketopen 函数。';

// /* 虚拟卡 */
// $_LANG['virtual_card_oos'] = '虚拟卡已缺货';

// $_LANG['span_edit_help'] = '点击修改内容';
// $_LANG['href_sort_help'] = '点击对列表排序';

// $_LANG['catname_exist'] = '已存在相同的分类名称!';
// $_LANG['brand_name_exist'] = '已存在相同的品牌名称!';

// $_LANG['alipay_login'] = '<a href="https://www.alipay.com/user/login.htm?goto=https%3A%2F%2Fwww.alipay.com%2Fhimalayas%2Fpracticality_profile_edit.htm%3Fmarket_type%3Dfrom_agent_contract%26customer_external_id%3D%2BC4335319945672464113" target="_blank">立即免费申请支付接口权限</a>';
// $_LANG['alipay_look'] = '<a href=\"https://www.alipay.com/himalayas/practicality.htm\" target=\"_blank\">请申请成功后登录支付宝账户查看</a>';



// $_LANG['04_sms_sign'] = '短信签名';
?>
 