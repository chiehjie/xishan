<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：IndexModel.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：ECTOUCH 首页模型
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */
/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class IndexModel extends CommonModel {

    /**
     * 获取推荐商品
     * @param  $type
     * @param  $limit
     * @param  $start
     */
    public function goods_list($type = 'best', $limit = 10, $start = 0) {
        if ($type == 'new') {
            $type = 'g.is_new = 1';
        } else if ($type == 'hot') {
            $type = 'g.is_hot = 1';
        } else {
            $type = 'g.is_best = 1';
        }
        // 取出所有符合条件的商品数据，并将结果存入对应的推荐类型数组中
        $sql = 'SELECT g.goods_id, g.goods_name, g.goods_name_style, g.market_price, g.shop_price AS org_price, g.promote_price, ' . "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, " . "promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, g.goods_img, RAND() AS rnd " . 'FROM ' . $this->pre . 'goods AS g ' . "LEFT JOIN " . $this->pre . "member_price AS mp " . "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' ";
        $sql .= ' WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 AND ' . $type;
        $sql .= ' ORDER BY g.sort_order, g.last_update DESC limit ' . $start . ', ' . $limit;

        $result = $this->query($sql);
        foreach ($result as $key => $vo) {
            if ($vo['promote_price'] > 0) {
                $promote_price = bargain_price($vo['promote_price'], $vo['promote_start_date'], $vo['promote_end_date']);
                $goods[$key]['promote_price'] = $promote_price > 0 ? price_format($promote_price) : '';
            } else {
                $goods[$key]['promote_price'] = '';
            }
            $goods[$key]['id'] = $vo['goods_id'];
            $goods[$key]['name'] = $vo['goods_name'];
            $goods[$key]['brief'] = $vo['goods_brief'];
            $goods[$key]['goods_style_name'] = add_style($vo['goods_name'], $vo['goods_name_style']);
            $goods[$key]['short_name'] = C('goods_name_length') > 0 ? sub_str($vo['goods_name'], C('goods_name_length')) : $vo['goods_name'];
            $goods[$key]['short_style_name'] = add_style($goods[$key] ['short_name'], $vo['goods_name_style']);
            $goods[$key]['market_price'] = price_format($vo['market_price']);
            $goods[$key]['shop_price'] = price_format($vo['shop_price']);
            $goods[$key]['thumb'] = get_image_path($vo['goods_id'], $vo['goods_thumb'], true);
            $goods[$key]['goods_img'] = get_image_path($vo['goods_id'], $vo['goods_img']);
            $goods[$key]['url'] = url('goods/index', array('id' => $vo['goods_id']));
            $goods[$key]['sales_count'] = model('GoodsBase')->get_sales_count($vo['goods_id']);
            $goods[$key]['sc'] = model('GoodsBase')->get_goods_collect($vo['goods_id']);
            $goods[$key]['mysc'] = 0;
            // 检查是否已经存在于用户的收藏夹
            if ($_SESSION ['user_id']) {
                // 用户自己有没有收藏过
                $condition['goods_id'] = $vo['goods_id'];
                $condition['user_id'] = $_SESSION ['user_id'];
                $rs = $this->model->table('collect_goods')->where($condition)->count();
                $goods[$key]['mysc'] = $rs;
            }
            $goods[$key]['promotion'] = model('GoodsBase')->get_promotion_show($vo['goods_id']);
            $type_goods[$type][] = $goods[$key];
        }
        return $type_goods[$type];
    }

    /**
     * 获得促销商品
     *
     * @access  public
     * @return  array
     */
    function get_promote_goods($cats = '') {
        $time = gmtime();
        $order_type = C('recommend_order');

        /* 取得促销lbi的数量限制 */
        $num = model('Common')->get_library_number("recommend_promotion");
        $sql = 'SELECT g.goods_id, g.goods_name, g.goods_name_style, g.market_price, g.shop_price AS org_price, g.promote_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, " .
                "promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, goods_img, b.brand_name, " .
                "g.is_best, g.is_new, g.is_hot, g.is_promote, RAND() AS rnd " .
                'FROM ' . $this->pre . 'goods AS g ' .
                'LEFT JOIN ' . $this->pre . 'brand AS b ON b.brand_id = g.brand_id ' .
                "LEFT JOIN " . $this->pre . "member_price AS mp " .
                "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .
                'WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ' .
                " AND g.is_promote = 1 AND promote_start_date <= '$time' AND promote_end_date >= '$time' ";
        $sql .= $order_type == 0 ? ' ORDER BY g.sort_order, g.last_update DESC' : ' ORDER BY rnd';
        $sql .= " LIMIT $num ";
        $result = $this->query($sql);

        $goods = array();
        foreach ($result AS $idx => $row) {
            if ($row['promote_price'] > 0) {
                $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
                $goods[$idx]['promote_price'] = $promote_price > 0 ? price_format($promote_price) : '';
            } else {
                $goods[$idx]['promote_price'] = '';
            }

            $goods[$idx]['id'] = $row['goods_id'];
            $goods[$idx]['name'] = $row['goods_name'];
            $goods[$idx]['brief'] = $row['goods_brief'];
            $goods[$idx]['brand_name'] = $row['brand_name'];
            $goods[$idx]['goods_style_name'] = add_style($row['goods_name'], $row['goods_name_style']);
            $goods[$idx]['short_name'] = C('goods_name_length') > 0 ? sub_str($row['goods_name'], C('goods_name_length')) : $row['goods_name'];
            $goods[$idx]['short_style_name'] = add_style($goods[$idx]['short_name'], $row['goods_name_style']);
            $goods[$idx]['market_price'] = price_format($row['market_price']);
            $goods[$idx]['shop_price'] = price_format($row['shop_price']);
            $goods[$idx]['thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
            $goods[$idx]['goods_img'] = get_image_path($row['goods_id'], $row['goods_img']);
            $goods[$idx]['url'] = url('goods/index', array('id' => $row['goods_id']));
        }

        return $goods;
    }

    /**
     * 首页推荐分类
     * @return type
     *  by Leah
     */
    function get_recommend_res() {
        $cat_recommend_res = $this->query("SELECT c.cat_id, c.cat_name, cr.recommend_type FROM " . $this->pre . "cat_recommend AS cr INNER JOIN " . $this->pre . "category AS c ON cr.cat_id=c.cat_id AND c.is_show = 1 ORDER BY c.sort_order ASC, c.cat_id ASC");
        if (!empty($cat_recommend_res)) {
            $cat_rec = array();
            foreach ($cat_recommend_res as $cat_recommend_data) {
                $cat_rec[$cat_recommend_data['recommend_type']][] = array(
                    'cat_id' => $cat_recommend_data['cat_id'], 
                    'cat_name' => $cat_recommend_data['cat_name'],
                    'url' => url('category/index', array('id' => $cat_recommend_data['cat_id'])), 
                    'child_id' => model('Category')->get_parent_id_tree($cat_recommend_data['cat_id']), 
                    'goods_list' => model('Category')->assign_cat_goods($cat_recommend_data['cat_id'],3),
                    'cat_image' => get_banner_path(model('Category')->get_cat_image($cat_recommend_data['cat_id'])),
					
                );
            }
            return $cat_rec;
        }
    }
 //获取用户真实IP
function get_client_ip() {
    if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
        $ip = getenv("REMOTE_ADDR");
    else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
        $ip = $_SERVER['REMOTE_ADDR'];
    else
        $ip = "unknown";
    return ($ip);
}

function convertip($ip) {
    $ip1num = 0;
    $ip2num = 0;
    $ipAddr1 = "";
    $ipAddr2 = "";
    $dat_path = 'qqwry.dat';
    if (!preg_match("/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/", $ip)) {
        return 'IP Address Error';
    }
    if (!$fd = @fopen($dat_path, 'rb')) {
        return 'IP date file not exists or access denied';
    }
    $ip = explode('.', $ip);
    $ipNum = $ip[0] * 16777216 + $ip[1] * 65536 + $ip[2] * 256 + $ip[3];
    $DataBegin = fread($fd, 4);
    $DataEnd = fread($fd, 4);
    $ipbegin = implode('', unpack('L', $DataBegin));
    if ($ipbegin < 0)
        $ipbegin += pow(2, 32);
    $ipend = implode('', unpack('L', $DataEnd));
    if ($ipend < 0)
        $ipend += pow(2, 32);
    $ipAllNum = ($ipend - $ipbegin) / 7 + 1;
    $BeginNum = 0;
    $EndNum = $ipAllNum;
    while ($ip1num > $ipNum || $ip2num < $ipNum) {
        $Middle = intval(($EndNum + $BeginNum) / 2);
        fseek($fd, $ipbegin + 7 * $Middle);
        $ipData1 = fread($fd, 4);
        if (strlen($ipData1) < 4) {
            fclose($fd);
            return 'System Error';
        }
        $ip1num = implode('', unpack('L', $ipData1));
        if ($ip1num < 0)
            $ip1num += pow(2, 32);

        if ($ip1num > $ipNum) {
            $EndNum = $Middle;
            continue;
        }
        $DataSeek = fread($fd, 3);
        if (strlen($DataSeek) < 3) {
            fclose($fd);
            return 'System Error';
        }
        $DataSeek = implode('', unpack('L', $DataSeek . chr(0)));
        fseek($fd, $DataSeek);
        $ipData2 = fread($fd, 4);
        if (strlen($ipData2) < 4) {
            fclose($fd);
            return 'System Error';
        }
        $ip2num = implode('', unpack('L', $ipData2));
        if ($ip2num < 0)
            $ip2num += pow(2, 32);
        if ($ip2num < $ipNum) {
            if ($Middle == $BeginNum) {
                fclose($fd);
                return 'Unknown';
            }
            $BeginNum = $Middle;
        }
    }
    $ipFlag = fread($fd, 1);
    if ($ipFlag == chr(1)) {
        $ipSeek = fread($fd, 3);
        if (strlen($ipSeek) < 3) {
            fclose($fd);
            return 'System Error';
        }
        $ipSeek = implode('', unpack('L', $ipSeek . chr(0)));
        fseek($fd, $ipSeek);
        $ipFlag = fread($fd, 1);
    }
    if ($ipFlag == chr(2)) {
        $AddrSeek = fread($fd, 3);
        if (strlen($AddrSeek) < 3) {
            fclose($fd);
            return 'System Error';
        }
        $ipFlag = fread($fd, 1);
        if ($ipFlag == chr(2)) {
            $AddrSeek2 = fread($fd, 3);
            if (strlen($AddrSeek2) < 3) {
                fclose($fd);
                return 'System Error';
            }
            $AddrSeek2 = implode('', unpack('L', $AddrSeek2 . chr(0)));
            fseek($fd, $AddrSeek2);
        } else {
            fseek($fd, -1, SEEK_CUR);
        }
        while (($char = fread($fd, 1)) != chr(0))
            $ipAddr2 .= $char;
        $AddrSeek = implode('', unpack('L', $AddrSeek . chr(0)));
        fseek($fd, $AddrSeek);
        while (($char = fread($fd, 1)) != chr(0))
            $ipAddr1 .= $char;
    } else {
        fseek($fd, -1, SEEK_CUR);
        while (($char = fread($fd, 1)) != chr(0))
            $ipAddr1 .= $char;
        $ipFlag = fread($fd, 1);
        if ($ipFlag == chr(2)) {
            $AddrSeek2 = fread($fd, 3);
            if (strlen($AddrSeek2) < 3) {
                fclose($fd);
                return 'System Error';
            }
            $AddrSeek2 = implode('', unpack('L', $AddrSeek2 . chr(0)));
            fseek($fd, $AddrSeek2);
        } else {
            fseek($fd, -1, SEEK_CUR);
        }
        while (($char = fread($fd, 1)) != chr(0)) {
            $ipAddr2 .= $char;
        }
    }
    fclose($fd);
    if (preg_match('/http/i', $ipAddr2)) {
        $ipAddr2 = '';
    }
    $ipaddr = "$ipAddr1 $ipAddr2";
    $ipaddr = preg_replace('/CZ88.NET/is', '', $ipaddr);
    $ipaddr = preg_replace('/^s*/is', '', $ipaddr);
    $ipaddr = preg_replace('/s*$/is', '', $ipaddr);
    if (preg_match('/http/i', $ipaddr) || $ipaddr == '') {
        $ipaddr = 'Unknown';
    }
    return $ipaddr;
}



}
