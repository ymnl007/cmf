<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>ThinkphpHelper V0.3.2 - for Thinkphp3.2.2</title> 
  <meta name="keywords" content="ThinkphpHelper,Thinkphp代码自动生成" />
  <meta name="description" content="ThinkphpHelper,Thinkphp代码自动生成工具" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="sjj">
  <script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/jquery.js"></script> <!-- jQuery -->
  <!-- Stylesheets -->
  <link href="/cmf/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="/cmf/<?php echo MODULE_PATH;?>/View/Public/style/font-awesome.css"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="/cmf/<?php echo MODULE_PATH;?>/View/Public/style/jquery-ui.css"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="/cmf/<?php echo MODULE_PATH;?>/View/Public/style/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="/cmf/<?php echo MODULE_PATH;?>/View/Public/style/prettyPhoto.css">  
  <!-- Star rating -->
  <link rel="stylesheet" href="/cmf/<?php echo MODULE_PATH;?>/View/Public/style/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="/cmf/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap-datetimepicker.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="/cmf/<?php echo MODULE_PATH;?>/View/Public/style/jquery.cleditor.css"> 
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="/cmf/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap-switch.css">
  <!-- Main stylesheet -->
  <link href="/cmf/<?php echo MODULE_PATH;?>/View/Public/style/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="/cmf/<?php echo MODULE_PATH;?>/View/Public/style/widgets.css" rel="stylesheet">   
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="href="/cmf/<?php echo MODULE_PATH;?>/img/favicon/favicon.png">
  <script>
	$(document).ready(function(){
		$.post('/cmf/index.php/TPH/Index/checkVersion', 
			function(data){
				$('#version').html(data);
			}
		);
	});
  </script>
</head>

<body>
<!-- Header starts -->
  <header>
    <div class="container">
      <div class="row">

        <!-- Logo section -->
        <div class="col-md-4">
          <!-- Logo. -->
          <div class="logo">
            <h1><a href="#">ThinkphpHelper  V0.33<span class="bold"></span></a></h1>
            <p class="meta">代码生成工具　　　　<a href="https://github.com/zhuanqianfish/ThinkphpHelper" id="version"></a>
			如果觉得好用，请记得分享给你的好基友们！</p>
          </div>
          <!-- Logo ends -->
        </div>

        <!-- Button section -->
        <div class="col-md-4">
			
        </div>

        <!-- Data section -->

        <div class="col-md-4">
          <div class="header-data">

            <!-- Traffic data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with red background -->
                <i class="icon-signal bred"></i> 
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="https://github.com/zhuanqianfish/ThinkphpHelper">项目</a> <em>GitHub</em></p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- Members data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with blue background -->
                <i class="icon-user bblue"></i> 
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="http://weibo.com/0371fish">微博</a> <em>WeiBo</em></p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- revenue data 
            <div class="hdata">
              <div class="mcol-left">
                <i class="icon-money bgreen"></i> 
              </div>
              <div class="mcol-right">
                <p><a href="#">赞助</a><em>support</em></p>
              </div>
              <div class="clearfix"></div>
            </div>                        
			-->
          </div>
        </div>

      </div>
    </div>
  </header>

<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">导航</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->				                            
          <li><a href="/cmf/index.php/TPH/CreateM"><i class="icon-bar-chart"></i>生成模块布局</a></li>
		  <li><a href="/cmf/index.php/TPH/CRUD/crud"><i class="icon-bar-chart"></i>生成CRUD代码</a></li>
          
		  <li><a href="/cmf/index.php/TPH/MCode"><i class="icon-table"></i>模型代码生成</a></li>
          <!--<li><a href="/cmf/index.php/TPH/FCode"><i class="icon-tasks"></i>高级表单生成</a></li>-->
		  
          <li><a href="/cmf/index.php/TPH/Index/ui"><i class="icon-magic"></i>UI控件</a></li>
          <li><a href="/cmf/index.php/TPH/Index/help"><i class="icon-calendar"></i>帮助</a></li>
        </ul>
    </div>
    <!-- Sidebar ends -->
  	<!-- Main bar --><script type="text/javascript">
	
	allPageUrl = '/cmf/index.php/TPH/CRUD/previewAllPage/';
	allPageCodeUrl = '/cmf/index.php/TPH/CRUD/allPageCode/';
	allCodeUrl = '/cmf/index.php/TPH/CRUD/allCode/';
	addPageUrl = '/cmf/index.php/TPH/CRUD/addPage/';
	addCodeUrl = '/cmf/index.php/TPH/CRUD/addCode/';
	editPageUrl = '/cmf/index.php/TPH/CRUD/editPage/';
	editCodeUrl = '/cmf/index.php/TPH/CRUD/editCode/';
	deleteCodeUrl = '/cmf/index.php/TPH/CRUD/deleteCode/';
	createFlieUrl = '/cmf/index.php/TPH/CRUD/creatAllFiles/'
	selectTableName = <?php echo ($selectTableName); ?>;
	
	db_prefix = '<?php echo ($db_prefix); ?>';

	function gogogo(table){
		isPage = $('#isPage').attr("checked");
		$.post(allPageUrl, {"table":table}, function(data){
		  $('#allPage').html(data);
		});
		$.post(allPageCodeUrl, {"table":table, "isPage":isPage}, function(data){
		  $('#allPageCode').html(data);
		});
		$.post(allCodeUrl, {"table":table, "isPage":isPage}, function(data){
		  $('#allCode').html(data);
		});
		isPage ? $('#pagination').show() : $('#pagination').hide();
		
		$.post(addPageUrl, {"table":table}, function(data){
		  $('#addPage').html(data);
		  $('#addPageCode').html(data);
		});
		$.post(addCodeUrl, {"table":table}, function(data){
		  $('#addCode').html(data);
		});
		$.post(editPageUrl, {"table":table}, function(data){
		  $('#editPage').html(data);
		  $('#editPageCode').html(data);
		});
		$.post(editCodeUrl, {"table":table}, function(data){
		  $('#editCode').html(data);
		});
		$.post(deleteCodeUrl, {"table":table} , function(data){
		  $('#deleteCode').html(data);
		});
		
	}

	function createFiles(moduleName, selectTableName){
		$.post(createFlieUrl, {"moduleName":moduleName,"selectTableName":selectTableName}, function(data){
		  $('#fileMsg').html(data);
		});
	}
	
	jQuery(document).ready(function($) {
		
		$('#gogogo').bind("click", function(){
			table = $('#tables option:selected').val();
			if(db_prefix != ''){
				table = table.replace(db_prefix,'');
			}
			gogogo(table);
		});
		
		$('#createFilesBtn').bind("click", function(){
			moduleName = $('#moduleName option:selected').val();
			checkedBox = $('#selectTables input:checked');
			selectTableName = [];
			if(db_prefix != ''){
				checkedBox.each(function(){
				selectTableName.push($(this).val().replace(db_prefix,''));
				});
			}else{
			checkedBox.each(function(){
				selectTableName.push($(this).val());
				});
			}
			createFiles(moduleName, selectTableName);
			
		});
		
		$('#isPage').bind("click",function(){
			$('#isPage').attr("checked") ? $('#isPage').attr("checked", false) :　$('#isPage').attr("checked", true);
		});
		$('#pagination').hide();
		
		if(selectTableName){
			$.each(selectTableName, function(i, n){
				$('input[value=' + n + ']').attr("checked",true);
			})
		}
	});
</script>
<div class="mainbar">
	    <!-- Page heading -->
	    <div class="page-head">
	      <h2 class="pull-left"><i class="icon-home"></i> 生成CRUD代码</h2>

        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter -->

	    <div class="matter">
        <div class="container">
          <!-- Dashboard Graph starts -->
		<div class="row">
			<div class="col-md-6">

              <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">直接生成文件</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>             

                <div class="widget-content">
                  <div class="padd">
                    <form class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-lg-3" for="title">选择模块</label>
						<div class="col-lg-6"> 
						 <select class="form-control" id="moduleName">
						  <?php if(is_array($moduleNameList)): $i = 0; $__LIST__ = $moduleNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$moduleName): $mod = ($i % 2 );++$i;?><option value="<?php echo ($moduleName); ?>"><?php echo ($moduleName); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select> 
						</div>
					  </div>
					  <!-- 数据表 -->
					  <div class="form-group" id="selectTables">
						<label class="control-label col-lg-3">数据表:</label>
						<div class="col-lg-9">                               
							<?php if(is_array($tableNameList)): $i = 0; $__LIST__ = $tableNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?><input type="checkbox" name="table" value="<?php echo ($table); ?>"><?php echo ($table); ?></input><br><?php endforeach; endif; else: echo "" ;endif; ?> 
						</div>
					  </div>
					  
					</form>
                  </div>
                </div>
				<!-- Widget footer -->
			  <div class="widget-foot">
					<button type="button" id="createFilesBtn" class="btn btn-primary">直接生成文件</button>
			  </div>
			  <!-- Widget footer end-->
			  <div class="widget-foot" id="fileMsg"></div>
              </div>

            </div>
			
			
			<div class="col-md-6">
				<div class="widget">
					<div class="widget-head">
					  <div class="pull-left" height="80">
					  手动生成
					  </div>
					  <div class="widget-icons pull-right">
						<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
						<a href="#" class="wclose"><i class="icon-remove"></i></a>
					  </div>  
					  <div class="clearfix"></div>
					</div>  
					<div class="widget-content" >
					<div class="padd">	  
                      <div class="form quick-post">
						  <!-- Edit profile form (not working)-->
						  <div class="form-horizontal">                        
							  <!-- Table -->
							  <div class="form-group">
								<label class="control-label col-lg-3">数据表:</label>
								<div class="col-lg-9">                               
									<select class="form-control" id="tables">
										<?php if(is_array($tableNameList)): $i = 0; $__LIST__ = $tableNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?><option value="<?php echo ($table); ?>" ><?php echo ($table); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>  
								</div>
							  </div>              
							  <label class="control-label col-lg-1" for="title">生成带分页代码</label>
								<div class="col-lg-3"> 
								  <input type="checkbox" id="isPage" checked />
								</div>
							  <!-- Buttons -->
							  <div class="form-group">
								 <!-- Buttons -->
								 <div class="col-lg-offset-2 col-lg-9">
									<button class="btn btn-success" id="gogogo">生成</button>
								 </div>
							  </div>
						  </div>
						</div><!--end  paddad-->
			
					</div>
				</div>	
				</div>	
			</div>
		</div>
		
          <div class="row">
		  <div class="col-md-12">

              <!-- Widget -->
              <div class="widget">
                <!-- Widget head -->
                <div class="widget-head">
                  <div class="pull-left">
				  所有列表预览(填充示例数据)
				  </div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>              

                <!-- Widget content -->
                <div class="widget-content">
                  <div class="padd">
					<div id="allPage">(暂无)</div>

                   <ul class="pagination pull-right" id="pagination">
                        <li><a href="#">上一页</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">下一页</a></li>
                      </ul>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <!-- Widget ends -->
				
              </div>
            </div>
          </div>
          <!-- all part1 ends -->
		  
		  <div class="row">
		  <div class="col-md-6">

              <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">所有记录列表View代码</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>             

                <div class="widget-content">
                  <div class="padd">
                    <textarea class="form-control" id="allPageCode" rows="12">	
					</textarea>
                  </div>
                </div>
              </div>

            </div>
		  
		  <div class="col-md-6">

              <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">所有记录列表Controller代码</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>             

                <div class="widget-content">
                  <div class="padd">
                    <textarea class="form-control" id="allCode" rows="12">	
					</textarea>
                  </div>
                </div>
              </div>

            </div>

          </div>
          <!-- all parts ends -->

          <!-- Chats, File upload and Recent Comments -->
          <div class="row">
            <div class="col-md-4">
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">新建-效果预览</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
					<div class="padd">
						<div class="form quick-post"  id="addPage"></div>
					</div>
                </div>
              </div>
            </div>
			
			
			<div class="col-md-4">
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">新建-View代码</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content" >
					<textarea class="form-control" id="addPageCode" rows="12">	
					</textarea>
                </div>
              </div>
            </div>
			
			
			<div class="col-md-4">
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">新建-Controller代码</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

               <div class="widget-content" >
                  <textarea class="form-control" id="addCode" rows="12">	
					</textarea>
                </div>
              </div>
            </div>
		</div>
		<!--end add part-->

			
		<div class="row">
			<div class="col-md-4">
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">编辑-效果预览</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
					<div class="padd">
						<div class="form quick-post"  id="editPage"></div>
					</div>
                </div>
              </div>
            </div>
		
			<div class="col-md-4">
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">编辑View代码</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

               <div class="widget-content" >
					<textarea class="form-control" id="editPageCode" rows="12">	
					</textarea>
                </div>
              </div>
            </div>
			
			
			<div class="col-md-4">
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">编辑-Controller代码</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

               <div class="widget-content" >
                  <textarea class="form-control" id="editCode" rows="12">	
					</textarea>
                </div>
              </div>
            </div>
        </div>
		<!--end edit part-->
			
			
		<div class="row">
			<div class="col-md-6">
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">删除-Controller代码</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

               <div class="widget-content" >
                  <textarea class="form-control" id="deleteCode" rows="12">	
					</textarea>
                </div>
              </div>
            </div>
          </div>
			<!--end delete part2-->
        </div>
		</div>

		<!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->
   <div class="clearfix"></div>
</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2014 | <a href="http://weiyunstudio.com">WeiYunStudio.com</a> </p>
      </div>
    </div>
  </div>
</footer> 	

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 
 
<!-- JS -->

<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/excanvas.min.js"></script>
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/jquery.flot.js"></script>
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/jquery.flot.resize.js"></script>
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/jquery.flot.pie.js"></script>
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/jquery.flot.stack.js"></script>

<!-- jQuery Notification - Noty -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/sparklines.js"></script> <!-- Sparklines -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/filter.js"></script> <!-- Filter for support page -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/custom.js"></script> <!-- Custom codes -->
<script src="/cmf/<?php echo MODULE_PATH;?>/View/Public/js/charts.js"></script> <!-- Charts & Graphs -->

<!-- Script for this page -->
<script type="text/javascript">
$(function () {

    /* Bar Chart starts */

    var d1 = [];
    for (var i = 0; i <= 20; i += 1)
        d1.push([i, parseInt(Math.random() * 30)]);

    var d2 = [];
    for (var i = 0; i <= 20; i += 1)
        d2.push([i, parseInt(Math.random() * 30)]);


    var stack = 0, bars = true, lines = false, steps = false;
    
    function plotWithOptions() {
        $.plot($("#bar-chart"), [ d1, d2 ], {
            series: {
                stack: stack,
                lines: { show: lines, fill: true, steps: steps },
                bars: { show: bars, barWidth: 0.8 }
            },
            grid: {
                borderWidth: 0, hoverable: true, color: "#777"
            },
            colors: ["#ff6c24", "#ff2424"],
            bars: {
                  show: true,
                  lineWidth: 0,
                  fill: true,
                  fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
            }
        });
    }

    plotWithOptions();
    
    $(".stackControls input").click(function (e) {
        e.preventDefault();
        stack = $(this).val() == "With stacking" ? true : null;
        plotWithOptions();
    });
    $(".graphControls input").click(function (e) {
        e.preventDefault();
        bars = $(this).val().indexOf("Bars") != -1;
        lines = $(this).val().indexOf("Lines") != -1;
        steps = $(this).val().indexOf("steps") != -1;
        plotWithOptions();
    });

    /* Bar chart ends */

});


/* Curve chart starts */

$(function () {
    var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)]);
        cos.push([i, Math.cos(i)]);
    }

    var plot = $.plot($("#curve-chart"),
           [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
               series: {
                   lines: { show: true, fill: true},
                   points: { show: true }
               },
               grid: { hoverable: true, clickable: true, borderWidth:0 },
               yaxis: { min: -1.2, max: 1.2 },
               colors: ["#1eafed", "#1eafed"]
             });

    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            border: '1px solid #000',
            padding: '2px 8px',
            color: '#ccc',
            'background-color': '#000',
            opacity: 0.9
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    $("#curve-chart").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if ($("#enableTooltip:checked").length > 0) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    
                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);
                    
                    showTooltip(item.pageX, item.pageY, 
                                item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;            
            }
        }
    }); 

    $("#curve-chart").bind("plotclick", function (event, pos, item) {
        if (item) {
            $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
            plot.highlight(item.series, item.datapoint);
        }
    });

});
/* Curve chart ends */

</script>

</body>
</html>