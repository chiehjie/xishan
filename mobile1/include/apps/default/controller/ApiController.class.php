<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：IndexController.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：ECTouch首页控制器
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */
/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class ApiController extends CommonController {

     
    

    public function goods() {
            $this->assign('page', $this->page);
            $this->assign('size', $this->size);
            $size = 10;
            $page = $_GET['page'];
            $start = ($page - 1) * $size;
            $sql1 = "SELECT goods_id,cat_id,goods_sn,goods_name,shop_price,goods_thumb,goods_img,original_img from ecs_goods   LIMIT $start , $size";
           $goods_all = $this->model->query($sql1);
           $output = array('data'=>$goods_all );
           echo json_encode($output);
              
          
    }
    public function mygoods() {
            // $this->assign('page', $this->page);
            // $this->assign('size', $this->size);
            // $size = 10;
            // $page = $_GET['page'];
            // $start = ($page - 1) * $size;
            $sql1 = "SELECT goods_id,cat_id,goods_sn,goods_name,shop_price,goods_thumb,goods_img,original_img from ecs_goods  where user_id=1";
           $goods_all = $this->model->query($sql1);
           $output = array('data'=>$goods_all );
           echo json_encode($output);
              
          
    }

     public function category() {
        $sql = "SELECT * from ecs_category";
        $category = $this->model->query($sql);
         $output = array('data'=>$category );
           echo json_encode($output);
     }
     public function users(){
        $sql = "SELECT * from ecs_users";
        $users= $this->model->query($sql);
        $output = array('data'=> $users);
        echo json_encode($output);
     }
      public function login(){
      if (IS_POST) {
            $username = I('post.username');
           // $username="admin1234";
            $password = I('post.password');
           // $password ="admin123";
            $this->back_act = urldecode(I('post.back_act'));
            // 用户名是邮箱格式
            if (is_email($username)) {
                $where['email'] = $username;
                $username_try = $this->model->table('users')
                        ->field('user_name')
                        ->where($where)
                        ->getOne();
                $username = $username_try ? $username_try : $username;
              
            }

            // 用户名是手机格式
            if (is_mobile($username)) {
                $where['mobile_phone'] = $username;
                $username_try = $this->model->table('users')
                        ->field('user_name')
                        ->where($where)
                        ->getOne();
                $username = $username_try ? $username_try : $username;
               
            }

            if (self::$user->login($username, $password, isset($_POST['remember']))) {

             
              $sql="select user_name,user_money from ecs_users where user_name='".$username."'";
               $res = $this->model->query($sql);
                $result=1;
                $output = array('status'=>$result,
                                 'data' =>$res
                  );
            echo json_encode($output);
               
            } 
            else
            {
                $result=0;
                $output = array('status'=>  $result);
        echo json_encode($output);
            }

        }  
     }
     public function regist(){
        if (IS_POST) {
            $answer=$_POST['answer'];
            $question=$_POST['question'];
            $mobile=$_POST['moible'];
            $password = $_POST['password'];
            $password1 = md5($password);
            $a = rand(100000000,2000000000);
            $username="xswl".$a;
            $res=$this->model->query("INSERT INTO " . $this->model->pre . "users (`password` ,`user_name` ,`mobile_phone` ,`passwd_question` ,`passwd_answer`) VALUES ( '" . $password1 . "' , '" . $username . "' , '" . $mobile . "' , '" .$question . "' , '" .$answer . "')");
            if ($res) {
                $result=1;
                $sql="select * from ". $this->model->pre ."users where user_name='".$username."'";
                $re=$this->model->query($sql);
                $arr=array('username' =>$re[0]['user_name'] ,
                            'mobile'  =>$re[0]['mobile_phone'],
                            'touxiang'=>$re[0]['avatar'],
                            'user_money'=>$re[0]['user_money']
                 );
                $output = array('status'=>  $result,
                                    'data'  =>$arr                                  );
                     echo json_encode($output);
            }else
            {
                 $result=0;
                  $output = array('status'=>  $result);
                     echo json_encode($output);
            }


        }
        

     }
     public function yzm(){

            if (IS_POST) {
                $mobile = $_POST['mobile'];
                   
                    // var_dump($mobile);exit;
                    $code = rand(1000,9999);
                    $sendUrl = 'http://v.juhe.cn/sms/send'; //短信接口的URL
                    $smsConf = array(
                    'key'   => '8d4edf96ab514146bbedde764b00fdf9', //您申请的APPKEY
                        'mobile'    => $mobile, //接受短信的用户手机号码
                        'tpl_id'    => '26279', //您申请的短信模板ID，根据实际情况修改
                        'tpl_value' =>'#code#='.$code.';&#mobile#='.$mobile //您设置的模板变量，根据实际情况修改
                    );
                    $sql="select * from ecs_users where mobile_phone='".$mobile."'";
                 $res=$this->model->query($sql);
                 if ($res) {
                    $result=0;
                      $output = array('status'=>$result
                              );
                    echo json_encode($output);
                 }
                 else
                 {
                    $content =juhecurl($sendUrl,$smsConf,1);
                    if ($content) {
                         $result=1;
                        $arr= array('mobile' => $mobile,
                                    'yzm' =>$code
                         );
                          $output = array('status'=>$result,
                                            'data'=>$arr
                                  );
                        echo json_encode($output);
                    }
                   
                 }
            }
             
        }
      


}

