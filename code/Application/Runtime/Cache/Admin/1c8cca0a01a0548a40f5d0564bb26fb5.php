<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>移动联盟 | 后台管理系统</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="/ydlm/Public/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/ydlm/Public/Admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="/ydlm/Public/Admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/ydlm/Public/Admin/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="/ydlm/Public/Admin/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/ydlm/Public/Admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/ydlm/Public/Admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/ydlm/Public/Admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES --> 

    <link href="/ydlm/Public/Admin/css/jquery.fancybox.css" rel="stylesheet" />
    <link href="/ydlm/Public/Admin/css/jquery.fileupload-ui.css" rel="stylesheet" />

	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="/ydlm/Public/Admin/image/favicon.ico" />
	<script type="text/javascript" charset="utf-8" src="/ydlm/Public/Admin/js/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ydlm/Public/Admin/js/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ydlm/Public/Admin/js/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.html">
				<img src="/ydlm/Public/Admin/image/logo.png" alt="logo"/>
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="/ydlm/Public/Admin/image/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->            
				<!-- BEGIN TOP NAVIGATION MENU -->              
				<ul class="nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->   
					<li class="dropdown" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">6</span>
						</a>
						<ul class="dropdown-menu extended notification">
							<li>
								<p>You have 14 new notifications</p>
							</li>
							<li>
								<a href="#">
								<span class="label label-success"><i class="icon-plus"></i></span>
								New user registered. 
								<span class="time">Just now</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								Server #12 overloaded. 
								<span class="time">15 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-warning"><i class="icon-bell"></i></span>
								Server #2 not respoding.
								<span class="time">22 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-info"><i class="icon-bullhorn"></i></span>
								Application error.
								<span class="time">40 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								Database overloaded 68%. 
								<span class="time">2 hrs</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								2 user IP blocked.
								<span class="time">5 hrs</span>
								</a>
							</li>
							<li class="external">
								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<li class="dropdown" id="header_inbox_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-envelope"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended inbox">

							<li>

								<p>You have 12 new messages</p>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="/ydlm/Public/Admin/image/avatar2.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Lisa Wong</span>

								<span class="time">Just Now</span>

								</span>

								<span class="message">

								Vivamus sed auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="/ydlm/Public/Admin/image/avatar3.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Richard Doe</span>

								<span class="time">16 mins</span>

								</span>

								<span class="message">

								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="/ydlm/Public/Admin/image/avatar1.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Bob Nilson</span>

								<span class="time">2 hrs</span>

								</span>

								<span class="message">

								Vivamus sed nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li class="external">

								<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END INBOX DROPDOWN -->

					<!-- BEGIN TODO DROPDOWN -->

					<li class="dropdown" id="header_task_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-tasks"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended tasks">

							<li>

								<p>You have 12 pending tasks</p>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">New release v1.2</span>

								<span class="percent">30%</span>

								</span>

								<span class="progress progress-success ">

								<span style="width: 30%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Application deployment</span>

								<span class="percent">65%</span>

								</span>

								<span class="progress progress-danger progress-striped active">

								<span style="width: 65%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile app release</span>

								<span class="percent">98%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 98%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Database migration</span>

								<span class="percent">10%</span>

								</span>

								<span class="progress progress-warning progress-striped">

								<span style="width: 10%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Web server upgrade</span>

								<span class="percent">58%</span>

								</span>

								<span class="progress progress-info">

								<span style="width: 58%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile development</span>

								<span class="percent">85%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 85%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all tasks <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END TODO DROPDOWN -->

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="/ydlm/Public/Admin/image/avatar1_small.jpg" />

						<span class="username">Bob Nilson</span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">

							<li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>

							<li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>

							<li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>

							<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>

							<li class="divider"></li>

							<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>

							<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>

				<li>

					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

					<form class="sidebar-search">

						<div class="input-box">

							<a href="javascript:;" class="remove"></a>

							<input type="text" placeholder="Search..." />

							<input type="button" class="submit" value=" " />

						</div>

					</form>

					<!-- END RESPONSIVE QUICK SEARCH FORM ==============================================================================-->

				</li>

				<li class="start active ">

					<a href="<?php echo U('File/index');?>">

					<i class="icon-home"></i> 

					<span class="title">文件信息管理</span>

					<span class="selected"></span>

					</a>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-cogs"></i> 

					<span class="title">前端介绍</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="#">about</a>

						</li>
						
						<li >

							<a href="#">fung fu</a>

						</li>

						<li >

							<a href="#">showcase</a>

						</li>

						<li >

							<a href="#">our team</a>

						</li>

						<li >

							<a href="#">news</a>

						</li>

						<li >

							<a href="#">join us</a>

						</li>
					
					</ul>

				</li>

				<li class="">

					<a href="<?php echo U('Person/index');?>">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">优秀社团人物</span>

					<span class="arrow "></span>
					</a>
				</li>

				<li class="">

					<a href="<?php echo U('News/index');?>">

					<i class="icon-table"></i> 

					<span class="title">新闻管理</span>

					<span class="arrow "></span>
					</a>
				</li>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div>
				
    <table class="table table-striped">
        <caption style="font-size:30px">优秀社团人物介绍</caption>
        <br />
        <thead>
            <tr>
                <th>头像</th>
                <th>人物姓名</th>
                <th>英文名</th>
                <th>性别</th>
                <th>年龄</th>
                <th>角色</th>
                <th>学院</th>
                <th>操作</th>
            </tr>
        </thead>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tbody class="file">
            <tr class="template-domeload dade in">
                <td class="img_path"><img width="30" height="30" src="<?php echo ($vo["img_path"]); ?>"/></td>
                <td class="name"><?php echo ($vo["name"]); ?></td>
                <td class="english_name"><?php echo ($vo["english_name"]); ?></td>
                <td class="sex"><?php echo ($vo["sex"]); ?></td>
                <td class="age"><?php echo ($vo["age"]); ?></td>
                <td class="role"><?php echo ($vo["role"]); ?></td>
                <td class="college"><?php echo ($vo["college"]); ?></td>
                <td class="delete"> 
                    <input type="button" value="修改"  class="btn yellow cancel" onclick="location.href='/ydlm/admin.php/Person/upload?id=<?php echo ($vo["id"]); ?>'">
                    <input type="button" value="删除"  class="btn red delete" onclick="location.href='/ydlm/admin.php/Person/delete?id=<?php echo ($vo["id"]); ?>'">
                </td>
            </tr>
        </tbody><?php endforeach; endif; else: echo "" ;endif; ?>

    </table><br />

    <form action="/ydlm/admin.php/Person/add" enctype="multipart/form-data" method="post">
    
    <!--<span class="btn green fileinput-button">
    <i class="icon-plus icon-white"></i>
    <span>Add Person...</span>-->

    <span class="btn green fileinput-button">
    <i class="icon-plus icon-white"></i>
    <span>头像上传</span>
    <input type="file" name="tx" multiple>
    </span>

    </span><br /></br />
    <div class="control-group">
    <label class="control-label visible-ie8 visible-ie9">name</label>
        <div class="input-icon left">
            <i class="icon-lock"></i>
            <input class="m-wrap placeholder-no-fix" type="text" name="name" placeholder="人物姓名" required>
            </div>
    </div>

    <div class="control-group">
    <label class="control-label visible-ie8 visible-ie9">age</label>
        <div class="input-icon left">
            <i class="icon-lock"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="年龄" name="age" required>
            </div>
    </div>

    <div class="control-group">
    <label class="control-label visible-ie8 visible-ie9">sex</label>
        <div class="input-icon left">
            <i class="icon-lock"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="性别" name="sex" required>
            </div>
    </div>

    <div class="control-group">
    <label class="control-label visible-ie8 visible-ie9">college</label>
        <div class="input-icon left">
            <i class="icon-lock"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="学院" name="college" required>
            </div>
    </div>


    <button type="submit" class="btn blue start">
    <i class="icon-upload icon-white"></i>
    <span>Start Add</span>
    </button>
    </form>

			</div>
			<!-- END PAGE -->
		</div>

	<!-- END CONTAINER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="/ydlm/Public/Admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="/ydlm/Public/Admin/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="/ydlm/Public/Admin/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="/ydlm/Public/Admin/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="/ydlm/Public/Admin/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="/ydlm/Public/Admin/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="/ydlm/Public/Admin/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="/ydlm/Public/Admin/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

    <script src="/ydlm/Public/Admin/js/form-fileupload.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script src="/ydlm/Public/Admin/js/jquery.fancybox.pack.js"></script>

    <!-- BEGIN:File Upload Plugin JS files-->

    <script src="/ydlm/Public/Admin/js/jquery.ui.widget.js"></script>

    <!-- The Templates plugin is included to render the upload/download listings -->

    <script src="/ydlm/Public/Admin/js/tmpl.min.js"></script>

    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->

    <script src="/ydlm/Public/Admin/js/load-image.min.js"></script>

    <!-- The Canvas to Blob plugin is included for image resizing functionality -->

    <script src="/ydlm/Public/Admin/js/canvas-to-blob.min.js"></script>

    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->

    <script src="/ydlm/Public/Admin/js/jquery.iframe-transport.js"></script>

    <!-- The basic File Upload plugin -->

    <script src="/ydlm/Public/Admin/js/jquery.fileupload.js"></script>

    <!-- The File Upload file processing plugin -->

    <script src="/ydlm/Public/Admin/js/jquery.fileupload-fp.js"></script>

    <!-- The File Upload user interface plugin -->

    <script src="/ydlm/Public/Admin/js/jquery.fileupload-ui.js"></script>

    <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->

    <!--[if gte IE 8]><script src="media/js/jquery.xdr-transport.js"></script><![endif]-->

    <!-- END:File Upload Plugin JS files-->

    <!-- END PAGE LEVEL PLUGINS -->

    <script src="/ydlm/Public/Admin/js/app.js"></script>

    <script src="/ydlm/Public/Admin/js/form-fileupload.js"></script>

    <script>

        jQuery(document).ready(function() {

        // initiate layout and plugins

        App.init();

        FormFileUpload.init();

        });

    </script>

    <!-- END JAVASCRIPTS -->

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>