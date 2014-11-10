<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh_CN" style="overflow: hidden;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta charset="utf-8">
<title>国货航CRM系统</title>
</head>
<body>
<select class="ss"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>
<select class="ff"></select>
<script src="/cmf/Public/js/jquery.js"></script>
<script>
$(function(){
  $('.ss').live('change',function(){
    $.getJSON('<?php echo U(MODULE_NAME.'/Index/getJson');?>',{id:$('.ss').val()},function(data){
      $.each(data,function(k,v){
        alert(v.id);
      });
    });
  });
});
</script> 
</body>
</html>