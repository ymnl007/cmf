<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Test\Model;
use Think\Model\RelationModel;

class AttachmentModel extends RelationModel{
    protected $_link = array(
		'Attachment'  =>  array(
			'mapping_type'      =>  self::MANY_TO_MANY,
			'class_name'        =>  'Attachment',
'mapping_name'      =>  'xx',			'foreign_key'       =>  '',
		),
		'Attachment'  =>  array(
			'mapping_type'      =>  self::MANY_TO_MANY,
			'class_name'        =>  'Attachment',
　　　　　　　'mapping_name'      =>  'xx',
			'foreign_key'       =>  '',
		
		),
		//@more
	);
}