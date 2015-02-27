<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Test\Controller;
use Think\Controller;

class AttachmentController extends Controller {
public function all(){
	$attachmentModel = M('Attachment');
	$attachmentList = $attachmentModel->select();
	$this->assign('attachmentList', $attachmentList);
	$this->display();
}


public function add(){
	if(IS_POST){
		$attachmentModel = M('Attachment');
		$attachmentModel ->create();
		$flag = $attachmentModel ->add();
		if($flag){
			$this->success('新建成功',U('Attachment/all')); 
		}else{
			$this->error('新建失败',U('Attachment/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$attachmentModel = M('Attachment');
	if(IS_POST){
		$attachmentModel ->create();
		$flag = $attachmentModel ->save();
		if($flag){
			$this->success('编辑成功',U('Attachment/all')); 
		}else{
			$this->error('编辑失败',U('Attachment/all')); 
		}
	}else{
		$id = I('id'); 
		$attachment = $attachmentModel->find($id);
		$this->assign('attachment', $attachment);
		$this->display();
	}
}


public function delete(){
	$attachmentModel = M('attachment');
	$id = I('id'); 
	$flag = $attachmentModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('Attachment/all'));
	}else{
		$this->error('删除失败', U('Attachment/all'));
	}
}

}