<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Admin\Controller;
use Think\Controller;

class Controller extends Controller {
public function all(){
	$Model = M('');
	$List = $Model->select();
	$this->assign('List', $List);
	$this->display();
}


public function add(){
	if(IS_POST){
		$Model = M('');
		$Model ->create();
		$flag = $Model ->add();
		if($flag){
			$this->success('新建成功',U('/all')); 
		}else{
			$this->error('新建失败',U('/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$Model = M('');
	if(IS_POST){
		$Model ->create();
		$flag = $Model ->save();
		if($flag){
			$this->success('编辑成功',U('/all')); 
		}else{
			$this->error('编辑失败',U('/all')); 
		}
	}else{
		$id = I('id'); 
		$ = $Model->find($id);
		$this->assign('', $);
		$this->display();
	}
}


public function delete(){
	$Model = M('');
	$id = I('id'); 
	$flag = $Model->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('/all'));
	}else{
		$this->error('删除失败', U('/all'));
	}
}

}