<?php
namespace Build\Service;
use Think\Controller;
//关联模型
class RelationService extends Controller{
	public function index(){

	}
	//创建关联模型代码
	public function createCode(){

	}
	// 写入文件
	public function writeToFile(){

	}
	// 获取关系
	public function getRelation(){
		$relation = '';
		switch (strtoupper($relation)) {
			case 'HAS_ONE':
				$this->_hasOne();
				break;
			case 'BELONGS_TO':
				$this->_belongsTo();
				break;
			case 'HAS_MANY':
				$this->_hasMany();
				break;
			case 'MANY_TO_MANY':
				$this->_manyToMany();
				break;			
			default:
				$this->error('参数错误');
				break;
		}
	}
	// 一对一关联
	private function _hasOne(){

	}
	// 一对一关联(从属)
	private function _belongsTo(){

	}
	// 一对多关联
	private function _hasMany(){

	}
	// 多对多关联
	private function _manyToMany(){

	}
}