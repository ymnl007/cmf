<?php
namespace Home\Controller;
use Logic\CommonController;
//用户登入注册
class PassportController extends CommonController{
	//登入
	public function login(){
		if(IS_POST){

		}else{
			$this->display();
		}
	}
	//退出
	public function logout(){

	}
	//注册
	public function register(){
		if(IS_POST){

		}else{
			$this->display();
		}
	}
	//密码找回
	public function findPassword(){
		if(IS_POST){

		}else{
			$this->display();
		}
	}
	//重置密码
	public function resetPassword(){
		if(IS_POST){

		}else{
			$this->display();
		}
	}
	//邮箱激活
	public function activeEmail(){
		if(IS_POST){

		}else{
			$this->display();
		}
	}
	//邀请码激活
	public function ActionFromInvite(){
		if(IS_POST){

		}else{
			$this->display();
		}
	}

}