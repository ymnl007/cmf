<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>注册</title>
</head>
<body>
<form action="<?php echo U(MODULE_NAME.'/Sms/index');?>" method="post">
手机号：<input type="text" name="phone" value="" />
<input type="submit" value="提交" />
</form>
</body>
</html>