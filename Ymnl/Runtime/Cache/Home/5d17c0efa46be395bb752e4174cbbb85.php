<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
.system-message{ padding:0 0 48px;margin:150px auto;width:400px;border:5px solid #ccc}
.system-message h3{ font-size: 50px; font-weight: normal; line-height: 120px; margin-bottom: 12px;border:1px solid #ccc}
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 23px ;text-align: center;}
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
</style>
</head>
<body>
<div class="system-message">
	<p style="height:35px;background:url(data:image/png;base64,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) #ccc;padding-left:10px;line-height:35px;color:white">友情提醒</p>
	<div style="padding:24px;">
		<?php if(isset($message)): ?><div class="success"><img style="margin-right: 9px;padding-top:10px;" src="data:image/png;base64,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"><span><?php echo($message); ?></span></div>
		<?php else: ?>		
		<div class="error"><img style="margin-right: 9px;padding-top:10px;" src="data:image/png;base64,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" style="cursor:pointer;"><span style="padding-top:0px;"><?php echo($error); ?></div><?php endif; ?>
	
	</div>
<p class="detail"></p>
<div class="jump" style="float:right;padding-right:5px;">
页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">关闭</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
</div>
</div>
<script type="text/javascript">
		window.opener = '';
		window.close();
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time == 0) {
		// location.href = href;
		window.opener = null;
		window.close();
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>