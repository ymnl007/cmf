<?php
namespace Test\Controller;
use Think\Controller;
class RestFulController extends Controller{

	private function test(){
		echo 'is test';
	}
	public function index(){
		echo 'index';
	}
	public function __call($_method,$_arguments){
		$this->$_method($_arguments);
	}
}