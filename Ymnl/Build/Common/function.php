<?php

//获取表名列表
function getTableNameList(){
	$dbType = C('DB_TYPE');
	$Model = new Model(); // 实例化一个model对象 没有对应任何数据表
	if($dbType == 'mysql'){
		$dbName = C('DB_NAME');
		$result = Array();
		$tempArray = $Model->query("select table_name from information_schema.tables where table_schema='".$dbName."' and table_type='base table'");
		foreach($tempArray as $temp){
			$result[] = $temp['table_name'];
		}
		return $result;
	}else{ //sqlite
		$result = Array();
		$tempArray = $Model->query("select * from sqlite_master where type='table' order by name");
		foreach($tempArray as $temp){
			$result[] = $temp['name'];
		}
		return $result;
	} 
	$this->error('数据库类型不支持');
}
//读取项目目录下的文件夹，供用户选择哪个才是module目录
function getModuleNameList(){
	$ignoreList = Array("Common","Runtime","Build");
	$allFileList = getDirList(APP_PATH);
	return array_diff($allFileList, $ignoreList);
}

//仅获取目录列表
function getDirList($directory){
	$files = array();        
	try {        
		$dir = new \DirectoryIterator($directory);        
	} catch (Exception $e) {        
		throw new Exception($directory . ' is not readable');        
	}        
	foreach($dir as $file) {        
		if($file->isDot()) continue;        
		if($file->isFile()) continue;        
		$files[] = $file->getFileName();        
	}        
	return $files;  
}