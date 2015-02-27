<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Admin\Controller;
use Think\Controller;

class AdminPanelController extends Controller {
public function all(){
	$admin_panelModel = M('AdminPanel');
	$admin_panelList = $admin_panelModel->select();
	$this->assign('admin_panelList', $admin_panelList);
	$this->display();
}


public function add(){
	if(IS_POST){
		$admin_panelModel = M('AdminPanel');
		$admin_panelModel ->create();
		$flag = $admin_panelModel ->add();
		if($flag){
			$this->success('新建成功',U('AdminPanel/all')); 
		}else{
			$this->error('新建失败',U('AdminPanel/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$admin_panelModel = M('AdminPanel');
	if(IS_POST){
		$admin_panelModel ->create();
		$flag = $admin_panelModel ->save();
		if($flag){
			$this->success('编辑成功',U('AdminPanel/all')); 
		}else{
			$this->error('编辑失败',U('AdminPanel/all')); 
		}
	}else{
		$id = I('id'); 
		$admin_panel = $admin_panelModel->find($id);
		$this->assign('admin_panel', $admin_panel);
		$this->display();
	}
}


public function delete(){
	$admin_panelModel = M('admin_panel');
	$id = I('id'); 
	$flag = $admin_panelModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('AdminPanel/all'));
	}else{
		$this->error('删除失败', U('AdminPanel/all'));
	}
}

}