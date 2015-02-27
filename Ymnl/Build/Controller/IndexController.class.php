<?php
namespace Build\Controller;
use Think\Controller;

class IndexController extends Controller{

	public function index(){
		
		$this->display();
		// $dbService = D('Db','Service');
		// echo $dbService;
		// $dbService->dataDictionary();
	}
	// 获取所有表
	public function getTable(){
		$Model = new Model();
		$dbName = C('DB_NAME');
		$result = Array();
		$tempArray = $Model->query("select table_name from information_schema.tables where table_schema='".$dbName."' and table_type='base table'");
		foreach($tempArray as $temp){
			$result[] = $temp['table_name'];
		}
	}

	public function buildModule(){
		
	}

	public function getTableColumn(){

	}

}


  $appliction = YiiBase::getPathOfAlias('application') ;
		   $log = YiiBase::getPathOfAlias('application.runtime').DIRECTORY_SEPARATOR ;
           $phpCommand = $appliction.DIRECTORY_SEPARATOR.'yiic';
		   popen("$phpCommand CreateCode $active_id $batch_id $create_num 2>&1 >>$log/create_code.txt &",'r');
