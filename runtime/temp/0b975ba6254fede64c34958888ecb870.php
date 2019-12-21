<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"D:\phpStudy2018\PHPTutorial\WWW\souams/application/admin\view\index\main.html";i:1576911350;s:81:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\layout\default.html";i:1576911350;s:78:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\common\meta.html";i:1576912454;s:80:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\common\script.html";i:1576911350;}*/ ?>
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
        
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-wrapper2">
    <div id="ribbon">
        <ol class="breadcrumb pull-left">
            <li><a href="" class="addtabsit"><i class="fa fa-dashboard"></i>控制台</a></li>
        </ol>
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">控制台</a></li>
        </ol>
    </div>
    <div class="content">
        <div class="panel panel-default panel-intro">
            <div class="panel-heading">
                <div class="panel-lead">
                    <em>
                        控制台
                    </em>
                    用于展示当前系统中的统计数据、统计报表及重要实时数据
                </div>
                <!--tab切换-->
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#one" data-toggle="tab">
                            控制台
                        </a>
                    </li>
                    <li>
                        <a href="#two" data-toggle="tab">
                            自定义
                        </a>
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <div id="myTabContent" class="tab-content">
                    <!--系统自带-->
                    <div class="tab-pane fade active in" id="one">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="sm-st clearfix">
                                    <span class="sm-st-icon st-red">
                                        <i class="fa fa-users">
                                        </i>
                                    </span>
                                    <div class="sm-st-info">
                                        <span>
                                            35200
                                        </span>
                                        总会员数
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="sm-st clearfix">
                                    <span class="sm-st-icon st-violet">
                                        <i class="fa fa-book">
                                        </i>
                                    </span>
                                    <div class="sm-st-info">
                                        <span>
                                            219390
                                        </span>
                                        总访问数
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="sm-st clearfix">
                                    <span class="sm-st-icon st-blue">
                                        <i class="fa fa-shopping-bag">
                                        </i>
                                    </span>
                                    <div class="sm-st-info">
                                        <span>
                                            32143
                                        </span>
                                        总订单数
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="sm-st clearfix">
                                    <span class="sm-st-icon st-green">
                                        <i class="fa fa-cny">
                                        </i>
                                    </span>
                                    <div class="sm-st-info">
                                        <span>
                                            174800
                                        </span>
                                        总金额
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="row">
                            <div class="col-lg-8">
                                
                            </div>
                            <div class="col-lg-4">
                                <div class="card sameheight-item stats">
                                    <div class="card-block">
                                        <div class="row row-sm stats-container">
                                            <div class="col-xs-6 stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-rocket">
                                                    </i>
                                                </div>
                                                <div class="stat">
                                                    <div class="value">
                                                        430
                                                    </div>
                                                    <div class="name">
                                                        今日注册
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" style="width: 30%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-shopping-cart">
                                                    </i>
                                                </div>
                                                <div class="stat">
                                                    <div class="value">
                                                        321
                                                    </div>
                                                    <div class="name">
                                                        今日登录
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" style="width: 25%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6  stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-line-chart">
                                                    </i>
                                                </div>
                                                <div class="stat">
                                                    <div class="value">
                                                        2324
                                                    </div>
                                                    <div class="name">
                                                        今日订单
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" style="width: 25%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6  stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-users">
                                                    </i>
                                                </div>
                                                <div class="stat">
                                                    <div class="value">
                                                        132
                                                    </div>
                                                    <div class="name">
                                                        未处理订单
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" style="width: 25%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6  stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-list-alt">
                                                    </i>
                                                </div>
                                                <div class="stat">
                                                    <div class="value">
                                                        80%
                                                    </div>
                                                    <div class="name">
                                                        七日新增
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" style="width: 25%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-dollar">
                                                    </i>
                                                </div>
                                                <div class="stat">
                                                    <div class="value">
                                                        32%
                                                    </div>
                                                    <div class="name">
                                                        七日活跃
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" style="width: 25%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="row" style="margin-top:15px;">
                            <div class="col-lg-12">
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="panel bg-blue">
                                    <div class="panel-body">
                                        <div class="panel-title">
                                            <span class="label label-success pull-right">
                                                实时
                                            </span>
                                            <h5>
                                                分类统计
                                            </h5>
                                        </div>
                                        <div class="panel-content">
                                            <h1 class="no-margins">
                                                1234
                                            </h1>
                                            <div class="stat-percent font-bold text-gray">
                                                <i class="fa fa-commenting">
                                                </i>
                                                1234
                                            </div>
                                            <small>
                                                当前分类总记录数
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="panel bg-aqua-gradient">
                                    <div class="panel-body">
                                        <div class="ibox-title">
                                            <span class="label label-info pull-right">
                                                实时
                                            </span>
                                            <h5>
                                                附件统计
                                            </h5>
                                        </div>
                                        <div class="ibox-content">
                                            <h1 class="no-margins">
                                                1043
                                            </h1>
                                            <div class="stat-percent font-bold text-gray">
                                                <i class="fa fa-modx">
                                                </i>
                                                2592
                                            </div>
                                            <small>
                                                当前上传的附件数量
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="panel bg-purple-gradient">
                                    <div class="panel-body">
                                        <div class="ibox-title">
                                            <span class="label label-primary pull-right">
                                                实时
                                            </span>
                                            <h5>
                                                文章统计
                                            </h5>
                                        </div>
                                        <div class="ibox-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h1 class="no-margins">
                                                        1234
                                                    </h1>
                                                    <div class="font-bold text-navy">
                                                        <i class="fa fa-commenting">
                                                        </i>
                                                        <small>
                                                            评论次数
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h1 class="no-margins">
                                                        6754
                                                    </h1>
                                                    <div class="font-bold text-navy">
                                                        <i class="fa fa-heart">
                                                        </i>
                                                        <small>
                                                            点赞次数
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="panel bg-green-gradient">
                                    <div class="panel-body">
                                        <div class="ibox-title">
                                            <span class="label label-primary pull-right">
                                                实时
                                            </span>
                                            <h5>
                                                新闻统计
                                            </h5>
                                        </div>
                                        <div class="ibox-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h1 class="no-margins">
                                                        5302
                                                    </h1>
                                                    <div class="font-bold text-navy">
                                                        <i class="fa fa-commenting"></i>
                                                        <small>
                                                            评论次数
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h1 class="no-margins">
                                                        8205
                                                    </h1>
                                                    <div class="font-bold text-navy">
                                                        <i class="fa fa-user"></i>
                                                        <small>
                                                            点赞次数
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="box box-danger">
                                    <div class="box-header">
                                        <h3 class="box-title">
                                            最新新闻
                                        </h3>
                                        <div class="box-tools pull-right">
                                            <a href="https://v2.soubei1123.cn" target="_blank" class="btn btn-box-tool">
                                                更多
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box-body" id="news-list">
                                        <ul class="nav nav-stacked">
                                            <li>
                                                <a href="https://v2.soubei1123.cn" target="_blank">
                                                    <span class="text">
                                                        雪狼SouCMS内容管理系统上线
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://v2.soubei1123.cn" target="_blank">
                                                    <span class="text">
                                                        雪狼SouCMS内容管理系统上线
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://v2.soubei1123.cn" target="_blank">
                                                    <span class="text">
                                                        雪狼SouCMS内容管理系统上线
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://v2.soubei1123.cn" target="_blank">
                                                    <span class="text">
                                                        雪狼SouCMS内容管理系统上线
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://v2.soubei1123.cn" target="_blank">
                                                    <span class="text">
                                                        雪狼SouCMS内容管理系统上线
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box box-success">
                                    <div class="box-header">
                                        <h3 class="box-title">
                                            最新发贴
                                        </h3>
                                        <div class="box-tools pull-right">
                                            <a href="https://v2.soubei1123.cn" class="btn btn-box-tool">
                                                更多
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box-body" id="discussion-list">
                                        <ul class="products-list product-list-in-box">
                                            <li class="item">
                                                <div class="">
                                                    <a href="https://v2.soubei1123.cn" target="_blank" class="product-title">
                                                        雪狼SouCMS内容管理系统上线
                                                        <span class="label label-warning pull-right"></span>
                                                    </a>
                                                    <span class="product-description">
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box box-info">
                                    <div class="box-header">
                                        <h3 class="box-title">
                                            服务器信息
                                        </h3>
                                    </div>
                                    <div class="box-body">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td width="120px">
                                                        PHP版本
                                                    </td>
                                                    <td>
                                                        7.0.12
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120px">
                                                        SouCMS版本
                                                    </td>
                                                    <td>
                                                        v1.0.1
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120px">
                                                        运行方式
                                                    </td>
                                                    <td>
                                                        cgi-fcgi
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120px">
                                                        调试模式
                                                    </td>
                                                    <td>
                                                        是
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120px">
                                                        环境信息
                                                    </td>
                                                    <td>
                                                        Apache/2.4.23 (Win32) OpenSSL/1.0.2j mod_fcgid/2.3.9
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120px">
                                                        上传模式
                                                    </td>
                                                    <td>
                                                        local
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120px">
                                                        上传URL
                                                    </td>
                                                    <td>
                                                        ajax/upload
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120px">
                                                        时区
                                                    </td>
                                                    <td>
                                                        PRC
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120px">
                                                        语言
                                                    </td>
                                                    <td>
                                                        zh-cn
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="two">
                        <div class="row">
                            <div class="col-xs-12">
                                这里是你的自定义数据
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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