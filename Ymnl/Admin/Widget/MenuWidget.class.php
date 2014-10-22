<?php
/**
* 菜单widget
*/
namespace Admin\Widget;
use Think\Controller;
class MenuWidget extends Controller{
	public function index(){
		//$menu = D('Menu')->select();
// 		C('TMPL_FILE_DEPR','/');
		//判断用户是否登入
		
		//判断菜单缓存是否存在
		if(!S('menu')){
// 			S('menu',D('Menu')->select());
		}
		$menu = S('menu');
		$this->assign('menu',$menu);
		return $this->fetch('Widget:menu');
		
	}
}