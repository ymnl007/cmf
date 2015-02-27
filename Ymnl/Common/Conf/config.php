<?php
return array(
	'SHOW_PAGE_TRACE' => true,

	'TMPL_L_DELIM'          =>  '<{ymnl',            // 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          =>  '}>',
	'VIEW_PATH'=> './Theme/', // 模板路径
	'TMPL_FILE_DEPR'=>'.',
	'MULTI_MODULE'          =>  true,
	'AUTOLOAD_NAMESPACE' => array(
		'Logic' => COMMON_PATH.'Logic',  //自动加载
		),
	'TMPL_LOAD_DEFAULTTHEME'=>true,
	'DEFAULT_THEME'  => 'default', //默认模板主题
 	'TMPL_DETECT_THEME' => true, //开启模板主题
 	'TMPL_CACHE_ON'         =>  true,        // 是否开启模板编译缓存,设为false则每次都会重新编译
 	'URL_MODULE_MAP' => array(
//  			'manage' => 'Admin',
 		),

 	'TMPL_ACTION_ERROR'     =>  './Theme/Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
	'TMPL_ACTION_SUCCESS'   =>  './Theme/Tpl/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
	'TMPL_EXCEPTION_FILE'   =>  './Theme/Tpl/think_exception.tpl',// 异常页面的模板文件

	//权限验证配置
	'USER_AUTH_ON'              =>  true,
    'USER_AUTH_TYPE'			=>  2,		// 默认认证类型 1 登录认证 2 实时认证
    'USER_AUTH_KEY'             =>  'authId',	// 用户认证SESSION标记
    'ADMIN_AUTH_KEY'			=>  'administrator',
    'USER_AUTH_MODEL'           =>  'User',	// 默认验证数据表模型
    'AUTH_PWD_ENCODER'          =>  'md5',	// 用户认证密码加密方式
    'USER_AUTH_GATEWAY'         =>  '/Public/login',// 默认认证网关
    'NOT_AUTH_MODULE'           =>  'Public',	// 默认无需认证模块
    'REQUIRE_AUTH_MODULE'       =>  '',		// 默认需要认证模块
    'NOT_AUTH_ACTION'           =>  '',		// 默认无需认证操作
    'REQUIRE_AUTH_ACTION'       =>  '',		// 默认需要认证操作
    'GUEST_AUTH_ON'             =>  false,    // 是否开启游客授权访问
    'GUEST_AUTH_ID'             =>  0,        // 游客的用户ID
    'DB_LIKE_FIELDS'            =>  'title|remark',
    'RBAC_ROLE_TABLE'           =>  'think_role',
    'RBAC_USER_TABLE'           =>  'think_role_user',
    'RBAC_ACCESS_TABLE'         =>  'think_access',
    'RBAC_NODE_TABLE'           =>  'think_node',

    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'testymnl',
    'DB_USER' => 'root',
    'DB_PWD' => '',
    'DB_PORT' => '3306',
    'DB_PREFIX' => 'ymnl_',
);