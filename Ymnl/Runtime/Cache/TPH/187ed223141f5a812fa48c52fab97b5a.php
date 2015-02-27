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
  	<!-- Main bar -->  	<!-- Main bar -->
  	<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
        <!-- Page heading -->
	      <h2 class="pull-left">User Interface
          <!-- page meta -->
          <span class="page-meta">Something Goes Here</span>
        </h2>


        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index.html"><i class="icon-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">User Interface</a>
        </div>

        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter -->

	    <div class="matter">
        <div class="container">

          <div class="row">

            <div class="col-md-6">

              <div class="widget wred">
                <div class="widget-head">
                  <div class="pull-left">UI Elements</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">
                    
                    <h5>Button Group</h5>
                    <div class="btn-group">
                      <button class="btn btn-danger">Left</button>
                      <button class="btn btn-success">Center</button>
                      <button class="btn btn-primary">Right</button>
                    </div>
                    <hr />

                    <h5>Toggle Button</h5>
                     <div class="make-switch" data-on="primary" data-off="info">
                         <input type="checkbox" checked>
                     </div>
                      
                     <div class="make-switch" data-on="info" data-off="success">
                         <input type="checkbox" checked>
                     </div>
                      
                     <div class="make-switch" data-on="success" data-off="warning">
                         <input type="checkbox" checked>
                     </div>
                      
                     <div class="make-switch" data-on="warning" data-off="danger">
                         <input type="checkbox" checked>
                     </div>
                      
                     <div class="make-switch" data-on="danger" data-off="default">
                         <input type="checkbox" checked>
                     </div>
                      
                     <div class="make-switch" data-on="default" data-off="primary">
                         <input type="checkbox" checked>
                     </div>  
                    <hr />                                  

                    <h5>Button Dropdown</h5>
                    <div class="btn-group">
                      <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <hr />

                    <h5>Tabbable</h5>
                    <div class="tabbable" style="margin-bottom: 18px;">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
                        <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
                        <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
                      </ul>
                      <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                        <div class="tab-pane active" id="tab1">
                          <p>I'm in Section 1.</p>
                        </div>
                        <div class="tab-pane" id="tab2">
                          <p>Howdy, I'm in Section 2.</p>
                        </div>
                        <div class="tab-pane" id="tab3">
                          <p>What up girl, this is Section 3.</p>
                        </div>
                      </div>
                    </div>
                    <hr />

                    <h5>Pagination</h5>
                    
                      <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    
                    <hr />

                    <h5>Labels</h5>
                    <span class="label label-danger">Default</span>
                    <span class="label label-success">Success</span>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-default">Important</span>
                    <span class="label label-info">Info</span>
                    <span class="label label-primary">Success</span>
                    <hr />

                    <h5>Badges</h5>
                    <span class="label label-danger">1</span>
                    <span class="label label-success">2</span>
                    <span class="label label-warning">3</span>
                    <span class="label label-info">4</span>
                    <span class="label label-default">5</span>
                    <span class="label label-primary">6</span>
                    <hr />

                    <h5>Alerts</h5>
                    <div class="alert alert-warning">
                      Oh snap! Change a few things up and try submitting again.
                    </div>
                    <div class="alert alert-success">
                      Well done! You successfully read this important alert message.
                    </div>
                    <div class="alert alert-info">
                      Heads up! This alert needs your attention, but it's not super important.
                    </div>                                        
                    <hr />


                    <h5>Modal</h5>
                    <!-- Button to trigger modal -->
                    <a href="#myModal" class="btn btn-info" data-toggle="modal">Launch demo modal</a>
                     
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					  <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Modal title</h4>
                      </div>
                      <div class="modal-body">
                        <p>One fine body…</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
					</div>
					</div>
                    <hr />


                  </div>
                </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
              </div>  

            </div>
            <div class="col-md-6">

              <div class="widget wviolet">
                <div class="widget-head">
                  <div class="pull-left">UI Elements</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">

                    <h5>Horizontal Slider</h5>

                    <div id="master4" class="slider-yellow"></div>
                    <div id="master1" class="slider-red"></div>
                    <div id="master3" class="slider-green"></div>
                    <div id="master5" class="slider-orange"></div>
                    <div id="master2" class="slider-blue"></div>
                    <div id="master6" class="slider-violet"></div>
                     
                    <hr />

                    <h5>Progressbar</h5>

                   <div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-warning"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete</span>
						  </div>
					   </div>
                    <div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete</span>
						  </div>
					   </div>
                    <div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete</span>
						  </div>
					   </div>
                    <div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete</span>
						  </div>
					   </div>
                    <hr />

                    <h5>Progressbar Animated</h5>

                     <div class="progress progress-animated progress-striped active">
						  <div class="progress-bar progress-bar-warning"  data-percentage="100">
							<span class="sr-only">100% Complete</span>
						  </div>
					  </div>
                     <div class="progress progress-animated progress-striped active">
						  <div class="progress-bar progress-bar-info"  data-percentage="100">
							<span class="sr-only">100% Complete</span>
						  </div>
					  </div>
                     <div class="progress progress-animated progress-striped active">
						  <div class="progress-bar progress-bar-danger"  data-percentage="100">
							<span class="sr-only">100% Complete</span>
						  </div>
					  </div>
                     <div class="progress progress-animated progress-striped active">
						  <div class="progress-bar progress-bar-success" data-percentage="100">
							<span class="sr-only">100% Complete</span>
						  </div>
					  </div>

                    <hr />

                    <h5>Vertical Slider</h5>

                    <div id="eq">
                        <span class="slider-red">88</span>
                        <span class="slider-blue">77</span>
                        <span class="slider-green">55</span>
                        <span class="slider-yellow">33</span>
                        <span class="slider-orange">40</span>
                        <span class="slider-violet">45</span>
                        <div class="clearfix"></div>
                    </div>



                    <hr />

                    <h5>Star Rating</h5>

                    <div class="rateit" data-rateit-resetable="false"></div>
                    <hr />

                    <h5>Notification</h5>


                    <a href="#" class="btn notify btn-default btn-sm">Notification</a>
                    <a href="#" class="btn notify-sticky btn-default btn-sm">Sticky Notification</a>
                    <a href="#" class="btn notify-without-image btn-default btn-sm">Notification - Without Image</a>
                    <a href="#" class="btn notify-remove btn-default btn-sm">Remove</a>

                    <hr />

                    <h5>Tabs</h5>
                    <ul id="myTab" class="nav nav-tabs">
                      <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                      <li><a href="#profile" data-toggle="tab">Profile</a></li>
                      <li><a href="#cont" data-toggle="tab">Content</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade in active" id="home">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                      </div>
                      <div class="tab-pane fade" id="profile">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                      </div>
                      <div class="tab-pane fade" id="cont">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                      </div>
                    </div>
                    <hr />

                    <h5>Datepicker</h5>
                      
					
					
					 <div id="datetimepicker1" class="input-append">
                        <input data-format="yyyy-MM-dd" type="text" class="form-control dtpicker">
                        <span class="add-on">
                          <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="btn btn-info btn-lg"></i>
                        </span>
                      </div>
					

                    <hr />  

                    <h5>Timepicker</h5>
                      <div id="datetimepicker2" class="input-append">
                        <input data-format="hh:mm:ss" class="form-control dtpicker" type="text">
                        <span class="add-on">
                          <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="btn btn-info btn-lg"></i>
                        </span>
                      </div>


                  </div>
                </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
              </div>                

            </div>

          </div>

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