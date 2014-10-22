<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php if(is_array($menu)): foreach($menu as $key=>$title): echo ($key); ?>:<?php echo ($title["title"]); ?><br/><?php endforeach; endif; ?>
</body>
</html>