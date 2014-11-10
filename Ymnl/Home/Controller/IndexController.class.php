<?php
namespace Home\Controller;
use Logic\CommonController;
class IndexController extends CommonController {
    public function index(){
    	// echo COMMON_PATH;
    	
    	$this->display();
    }
    public function _empty(){

    }
    public function test(){
    	$arr[] = array(
    		'id'=>1,'title'=>'xxxx',
    		);
    	$arr[] = array(
    		'id'=>2,'title'=>'dd',
    		);
    	$arr[] = array(
    		'id'=>3,'title'=>'ff',
    		);
    	echo json_encode($arr);
    	$this->display();
    }
    public function getJson(){
    	$arr[] = array(
    		'id'=>1,'title'=>'xxxx',
    		);
    	$arr[] = array(
    		'id'=>2,'title'=>'dd',
    		);
    	$arr[] = array(
    		'id'=>3,'title'=>'ff',
    		);
    	echo json_encode($arr);
    }
}