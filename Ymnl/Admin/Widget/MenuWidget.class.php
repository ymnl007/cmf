<?php
/**
* 菜单widget
*/
namespace Admin\Widget;
use Think\Controller;
class MenuWidget extends Controller{
	public function index(){
		
		return $menu;
	}
}