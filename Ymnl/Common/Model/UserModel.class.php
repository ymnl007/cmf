<?php
/**
 * 
 * 用户表
 * 
 */
class UserModel extends Model{
	$_validate = array(
		// array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
		array('username','require','用户名不能为空'),
		);
}