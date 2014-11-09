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
}