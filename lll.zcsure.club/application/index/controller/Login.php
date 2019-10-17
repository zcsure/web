<?php
namespace app\index\controller;

use think\Controller;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function dologin(){
    	if(empty($_POST['username'])){
    		$this->error("用户名不能为空");
    	}
    	if(empty($_POST['password'])){
    		$this->error("密码不能为空");
    	}
    		
    	$has = db('users')->where('username',$_POST['username'])->find();
    	if(empty($has)){
    		$this->error("用户名或密码错误");
    	}
    	
    	header("refresh:0;url='https://lol.qq.com/v/v2/detail.shtml?docid=9158724213212939576'");//验证成功跳转
    	
    }
}
