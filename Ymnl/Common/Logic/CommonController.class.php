<?php
//公共控制器
namespace Logic;
use Think\Controller;
class CommonController extends Controller{
	public function _initialize(){
		$this->_rbac();
	}
	// 分页
	public function _page(){

	}
	// 判断是否登入
	public function _isLogin(){

	}
	public function login(){

	}
	// rbac权限
	public function _rbac(){
		//判断是否开启权限验证，模块是否在非验证模块中
		if(C('USER_AUTH_ON') && in_array(MODULE_NAME,explode(',',C('NOT_AUTH_MODULE')))){
			import('Org.Util.Rbac');
			//权限认证的过滤器
			if(!Rbac::AccessDecision()){
				
			}
		}
	}
	// auth权限
	public function _auth(){

	}
}