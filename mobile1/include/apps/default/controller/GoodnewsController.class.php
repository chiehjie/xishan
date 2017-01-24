<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：GoodnewsController.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：喜讯控制器
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */
/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class GoodnewsController extends CommonController {
	/**
	 * 喜讯页
	 */
	function index(){
		$this->display('GoodNews.dwt');
	}
	
	/**
	 * 添加朋友
	 */
	public function add_friends(){
		$this->display('contacts.dwt');
	}
}