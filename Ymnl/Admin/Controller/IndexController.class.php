<?php
namespace Admin\Controller;
use Logic\CommonController;
class IndexController extends CommonController {
    public function index(){
    	echo COMMON_PATH;
    	$this->display();
    }
    public function _empty(){

    }
    
    public function test(){
    	$this->display();
    }
}