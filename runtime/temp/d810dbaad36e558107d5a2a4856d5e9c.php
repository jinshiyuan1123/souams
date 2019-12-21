<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:78:"D:\phpStudy2018\PHPTutorial\WWW\souams/application/admin\view\index\index.html";i:1576914041;s:81:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\layout\default.html";i:1576911350;s:78:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\common\meta.html";i:1576912454;s:78:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\common\menu.html";i:1576911350;s:80:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\common\footer.html";i:1576911350;s:77:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\common\tab.html";i:1576911350;s:80:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\common\script.html";i:1576911350;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>SouCms内容管理系统 V1.2.1</title>
  <link rel="shortcut icon" href="http://wq.ym0527.com/public/admin/images/favicon.ico" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/css/backend.css">
  <link rel="stylesheet"  href="http://wq.ym0527.com/public/admin/layui/css/layui.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- jQuery 3 -->
  <script src="http://wq.ym0527.com/public/admin/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="http://wq.ym0527.com/public/admin/layui/layui.js"></script>
  <script src="http://wq.ym0527.com/public/admin/js/souphp.js"></script>
        <style>
.wrapper::-webkit-scrollbar,html::-webkit-scrollbar,body::-webkit-scrollbar{width: 0px;}
</style>

<body class="sidebar-mini skin-green">
<div class="wrapper">

  <header class="main-header">
    <!--Logo-->
    <a href="/" class="logo">
      <span class="logo-mini"><b>Sou</b></span>
      <span class="logo-lg"><b>Sou</b>CMS</span>
    </a>
    <!--TOP导航-->
    <nav class="navbar navbar-static-top">
      <!--切换导航按钮-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">切换导航</span>
      </a>
      <div id="nav" class="pull-left">
        <!--如果不想在顶部显示角标,则给ul加上disable-top-badge类即可-->
        <ul class="nav nav-tabs nav-addtabs disable-top-badge" role="tablist">
            <!--更多标签-->
            <li class="dropdown pull-right tabdrop" style="display:none">
                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false">
                    <i class="glyphicon glyphicon-align-justify"></i><b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    
                </ul>
            </li>
            <!--打开标签-->
            <li class="active"><a data-url="<?php echo url('index/main'); ?>"><i class="fa fa-dashboard"></i><span>首页</span><span class="pull-right-container"><small class="label pull-right bg-blue">hot</small></span></a><i class="close-tab fa fa-remove"></i></li>
        </ul>
    </div>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!--返回到首页-->
            <li>
                <a href="" target="_blank"><i class="fa fa-home" style="font-size:14px;"></i></a>
            </li>
            <!-- 消息通知 -->
            <!--彩蛋
            <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">你有10个通知</li>
                    <li>
                    <ul class="menu">
                        <li>
                        <a href="#">
                            <i class="fa fa-users text-aqua"></i>样式1
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-warning text-yellow"></i>样式2
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-users text-red"></i>样式3
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-shopping-cart text-green"></i>样式4
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-user text-red"></i>样式5
                        </a>
                        </li>
                    </ul>
                    </li>
                    <li class="footer"><a href="#">查看所有通知</a></li>
                </ul>
            </li>
            -->
            <!--检测版本更新-->
            <li>
                <a href="javascript:edition();" data-toggle="checkupdate" title="检测更新">
                    <i class="fa fa-refresh"></i>
                </a>
            </li>
            <!--清除缓存-->
            <li>
                <a href="javascript:runtime();" data-toggle="wipecache" title="清空缓存">
                    <i class="fa fa-trash"></i>
                </a>
            </li>
            <!--切换语言包-->
            <!--彩蛋
            <li class="hidden-xs">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-language"></i></a>
                <ul class="dropdown-menu">
                    <li class="active">
                        <a href="?ref=addtabs&amp;lang=zh-cn">简体中文</a>
                    </li>
                    <li class="">
                        <a href="?ref=addtabs&amp;lang=en">English</a>
                    </li>
                </ul>
            </li>
            -->
            <!--打开全屏-->
            <li class="hidden-xs">
                <a href="javascript:Fkey();" data-toggle="fullscreen"><i class="fa fa-arrows-alt"></i></a>
            </li>
            <!--账号信息-->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="http://wq.ym0527.com/public/admin/dist/img/user2-160x160.jpg" class="user-image" alt="Admin">
                    <span class="hidden-xs"><?php echo $admin_data['m_nice']; ?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="http://wq.ym0527.com/public/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="">

                        <p>
                            <?php if($admin_data['m_type'] == 1): ?>超级管理员<?php else: ?>普通管理员<?php endif; ?> - <?php echo $admin_data['m_nice']; ?><small>额度：0</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <a href="https://v2.soubei1123.cn" target="_blank">雪狼教</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="https://blog.junphp.com" target="_blank">交流社区</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="https://v2.soubei1123.cn" target="_blank">官方文档</a>
                            </div>
                        </div>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="javascript:profile('<?php echo url('manager/profile'); ?>');" class="btn btn-primary addtabsit"><i class="fa fa-user"></i> 个人配置</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo url('login/out'); ?>" class="btn btn-danger"><i class="fa fa-sign-out"></i> 注销</a>
                        </div>
                    </li>
                </ul>
            </li>
            <!--前端在状态栏控制-->
            <li>
                <a href="javascript:;" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://wq.ym0527.com/public/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

        </div>
        <div class="pull-left info">
          <p><?php if($admin_data['m_type'] == 1): ?>超级管理员<?php else: ?>普通管理员<?php endif; ?> - <?php echo $admin_data['m_nice']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="搜索菜单">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>

      <style>.sidebar-menu a{cursor: pointer}.treeview-menu>li>a{padding: 5px 5px 5px 15px;}.sidebar-menu>li>a {padding: 8px 5px 8px 15px;}.sidebar-mini:not(.sidebar-mini-expand-feature).sidebar-collapse .sidebar-menu>li:hover>a>span{top: -5px;}</style>
<ul class="sidebar-menu" data-widget="tree">
    <li>
      <a href="javascript:;" data-url="<?php echo url('index/main'); ?>">
        <i class="fa fa-dashboard"></i> <span>控制台</span>
        <span class="pull-right-container"> <small class="label pull-right bg-blue">hot</small></span>
      </a>
    </li>

    <?php if(is_array($admin_menu) || $admin_menu instanceof \think\Collection || $admin_menu instanceof \think\Paginator): $i = 0; $__LIST__ = $admin_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <li class="treeview">
      <a href="javascript:;">
        <i class="fa <?php echo $v['m_icon']; ?>"></i> <span><?php echo $v['m_name']; ?></span> 
        <span class="pull-right-container"><i class="fa fa-angle-left"></i></span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <?php if(is_array($v['children']) || $v['children'] instanceof \think\Collection || $v['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
        <li>
          <a href="javascript:;" data-url="<?php echo url($vv['m_controller'].'/'.$vv['m_action']); ?>">
            <i class="fa <?php echo $vv['m_icon']; ?>"></i><span><?php echo $vv['m_name']; ?></span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </li>
    <?php endforeach; endif; else: echo "" ;endif; ?>

    <li class="header" data-rel="external">相关链接</li>
    <li data-rel="external"><a href="https://v2.soubei1123.cn" target="_blank"><i class="fa fa-list text-red"></i> <span>雪狼教</span></a></li>
    <li data-rel="external"><a href="https://v2.soubei1123.cn" target="_blank"><i class="fa fa-comment text-yellow"></i> <span>交流社区</span></a></li>
    <li data-rel="external"><a href="tencent://message/?uin=2824030364&Site=在线QQ&Menu=yes"><i class="fa fa-qq text-aqua"></i> <span>情深不寿</span></a></li>
</ul>


    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <iframe class="content-wrapper" src="<?php echo url('index/main'); ?>" width="100%" height="100%" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling-x="no" scrolling-y="auto" allowtransparency="yes"></iframe>
  <!-- 版权信息 -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2019-2019 <a href="https://v2.soubei1123.cn">雪狼教</a>.</strong> All rights reserved.
</footer>
    <!-- 前端布局功能 -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- 布局按钮 -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab对应 -->
    <div class="tab-content">
        <!--左侧按钮-->
        <div id="control-sidebar-theme-demo-options-tab" class="tab-pane active">
            <div>
                <!--
                <h4 class="control-sidebar-heading">布局设定</h4>
                <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="fixed" class="pull-right"> 固定布局</label><p>盒子模型和固定布局不能同时启作用</p></div>
                <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="layout-boxed" class="pull-right"> 盒子布局</label><p>盒子布局最大宽度将被限定为1250px</p></div>
                <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-layout="sidebar-collapse" class="pull-right"> 切换菜单栏</label><p>切换菜单栏的展示或收起</p></div>
                <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-enable="expandOnHover" class="pull-right"> 菜单栏自动展开</label><p>鼠标移到菜单栏自动展开</p></div>
                <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-menu="show-submenu" class="pull-right"> 显示菜单栏子菜单</label><p>菜单栏子菜单将始终显示</p></div>
                <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-menu="disable-top-badge" class="pull-right" checked="checked"> 禁用顶部彩色小角标</label><p>左边菜单栏的彩色小角标不受影响</p></div>
                <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-controlsidebar="control-sidebar-open" class="pull-right"> 切换右侧操作栏</label><p>切换右侧操作栏覆盖或独占</p></div>
                <div class="form-group"><label class="control-sidebar-subheading"><input type="checkbox" data-sidebarskin="toggle" class="pull-right"> 切换右侧操作栏背景</label><p>将右侧操作栏背景亮色或深色切换</p></div>
                -->
                
                <h4 class="control-sidebar-heading">皮肤</h4>
                <ul class="list-unstyled clearfix">
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9">
                                </span>
                                <span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin">
                            Blue
                        </p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix">
                                <span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #222">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin">
                            Black
                        </p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active">
                                </span>
                                <span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin">
                            Purple
                        </p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active">
                                </span>
                                <span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin">
                            Green
                        </p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active">
                                </span>
                                <span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin">
                            Red
                        </p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active">
                                </span>
                                <span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin">
                            Yellow
                        </p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-blue-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9">
                                </span>
                                <span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin" style="font-size: 12px">
                            Blue Light
                        </p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-black-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix">
                                <span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin" style="font-size: 12px">
                            Black Light
                        </p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-purple-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active">
                                </span>
                                <span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin" style="font-size: 12px">
                            Purple Light
                        </p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-green-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active">
                                </span>
                                <span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin" style="font-size: 12px">
                            Green Light
                        </p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-red-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active">
                                </span>
                                <span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin" style="font-size: 12px">
                            Red Light
                        </p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0)" data-skin="skin-yellow-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                        class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active">
                                </span>
                                <span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;">
                                </span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc">
                                </span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin" style="font-size: 12px">
                            Yellow Light
                        </p>
                    </li>
                </ul>
            </div>
      </div>
      <!-- 中间按钮 -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">主页</h3>
      </div>
      <!-- 右侧按钮 -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <h3 class="control-sidebar-heading">配置</h3>
      </div>
      
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper  toast-top-center -->

<script>
// 清除缓存
function runtime(){
    $.thinkmimi({Content : '缓存清除成功', Type:1, Align:'right', OutTime:2000});
    $.ajax({
        type: 'post',
        data:{},
        url: "<?php echo url('index/runtime_del'); ?>",
        success: function(data) {}
    });
}
// 更新版本
function edition() {
    $.thinkmimi({Content : '版本检测中...', Type:1, Align:'right', OutTime:2000});
    $.ajax({
        type: 'post',
        data:{},
        url: "<?php echo url('common/edition'); ?>",
        success: function(data) {
            var array = eval('('+data+')');
            if (array['code'] == '01') {
                $.thinkmimi({Content : array['msg'], Type:2, Align:'right', OutTime:2000});
            } else {
                $.thinkmimi({Content : array['msg'], Type:1, Align:'right', OutTime:2000});
            }
        }
    });
}
// 修改个人配置
function profile(href) {
    layui.use(['form', 'layer'], function(){ 
        var form = layui.form, layer = layui.layer;
        layer.open({
            type: 2,
            title: '修改个人配置',
            shadeClose: true,
            shade: false,
            maxmin: true,
            area: ['400px', '400px'],
            btn: ['确认', '取消'],
            content: href,
            yes: function(index, layero) {
                var _this = layero.find('iframe')[0];
                var bool  = _this.contentWindow.doSubimt();
                if (bool !== false) {
                    $.thinkmimi({Content : bool['msg'],Type : 1,Align:'right',OutTime:2000,});
                    menu_run();
                    layer.closeAll();
                    window.setTimeout(function(){
                        window.location.href="<?php echo url('login/out'); ?>";
                    }, 700);
                }
            },
        });
    });
}
</script>

        <!-- jQuery UI 1.11.4 -->
<script src="http://wq.ym0527.com/public/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>$.widget.bridge('uibutton', $.ui.button);</script>
<!-- Bootstrap 3.3.7 -->
<script src="http://wq.ym0527.com/public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="http://wq.ym0527.com/public/admin/bower_components/raphael/raphael.min.js"></script>
<script src="http://wq.ym0527.com/public/admin/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="http://wq.ym0527.com/public/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="http://wq.ym0527.com/public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://wq.ym0527.com/public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://wq.ym0527.com/public/admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://wq.ym0527.com/public/admin/bower_components/moment/min/moment.min.js"></script>
<script src="http://wq.ym0527.com/public/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="http://wq.ym0527.com/public/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="http://wq.ym0527.com/public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="http://wq.ym0527.com/public/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://wq.ym0527.com/public/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://wq.ym0527.com/public/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://wq.ym0527.com/public/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://wq.ym0527.com/public/admin/dist/js/demo.js"></script>
<script src="http://wq.ym0527.com/public/admin/js/menu.js"></script>
    </body>
</html>