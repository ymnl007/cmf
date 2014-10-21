<?php
return array(
	'TMPL_L_DELIM'          =>  '<{ymnl:',            // 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          =>  '}>',
	'VIEW_PATH'=> './Theme/', // 模板路径
	'TMPL_FILE_DEPR'=>'.',

	'AUTOLOAD_NAMESPACE' => array(
		'Logic' => COMMON_PATH.'Logic',
		),

	'DEFAULT_THEME'  => 'default', //默认模板主题
 	'TMPL_DETECT_THEME' => true, //开启模板主题
 	'TMPL_CACHE_ON'         =>  true,        // 是否开启模板编译缓存,设为false则每次都会重新编译
 	'URL_MODULE_MAP' => array(
 			'manage' => 'Admin',
 		),

 	'TMPL_ACTION_ERROR'     =>  './Theme/Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
	'TMPL_ACTION_SUCCESS'   =>  './Theme/Tpl/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
	'TMPL_EXCEPTION_FILE'   =>  './Theme/Tpl/think_exception.tpl',// 异常页面的模板文件
);