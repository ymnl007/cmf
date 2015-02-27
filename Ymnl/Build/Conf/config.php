<?php
return array(
	//'配置项'=>'配置值'
	'VIEW_PATH'=> '', // 模板路径
	'TMPL_FILE_DEPR'=>'/',
	// 'LAYOUT_ON'			=>	true,		//开启布局
	// 'LAYOUT_NAME'		=>	'default_layout',	//布局名称layout

	'SHOW_PAGE_TRACE' => true,

	'TMPL_L_DELIM'          =>  '{',            // 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          =>  '}',
// 	'VIEW_PATH'=> './Theme/', // 模板路径
	'TMPL_FILE_DEPR'=>'/',
	'MULTI_MODULE'          =>  true,
	
	'TMPL_LOAD_DEFAULTTHEME'=>false,
	'DEFAULT_THEME'  => '', //默认模板主题
 	'TMPL_DETECT_THEME' => false, //开启模板主题
 	'TMPL_CACHE_ON'         =>  false,        // 是否开启模板编译缓存,设为false则每次都会重新编译
 	'URL_MODULE_MAP' => array(
//  			'manage' => 'Admin',
 		),
 	
);