<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\phpStudy2018\PHPTutorial\WWW\souams/application/admin\view\login\index.html";i:1576912434;s:78:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\common\meta.html";i:1576912454;s:80:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\common\script.html";i:1576911350;}*/ ?>
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

        <body class="hold-transition login-page">
        <div class="login-box">
          <div class="login-logo">
            <a href="/"><b>Sou</b>CMS</a>
          </div>

          <!-- /.login-logo -->
          <div class="login-box-body" style="height: 250px;">
            <p class="login-box-msg">登录</p>

            
              <div class="form-group has-feedback">
                <input type="email" class="form-control" id="user" placeholder="账号">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" id="pwd" placeholder="密码">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              
              <div class="form-group has-feedback">
                  <input type="password" class="form-control" id="vif" placeholder="验证码" style="width: 180px;float: left;">
                  <span class="glyphicon glyphicon-lock form-control-feedback" style="right: 140px;"></span>
                  <img src="<?php echo captcha_src(); ?>" width="130" height="40" onClick="this.src='<?php echo captcha_src(); ?>?id='+Math.random()" style="float: right">
              </div>

              <div class="form-group has-feedback" style="float: left;width: 100%;margin-top: 5px">
                  <button type="button" class="btn btn-primary btn-block btn-flat">登录</button>
              </div>

            
          </div>
          <p class="text-center"><br/>2019 - 2020 v2.soubei1123.cn</p>
          <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
       
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
<script>
function login() {
    var user = $('#user').val();
    var pwd  = $('#pwd').val();
    var vif  = $('#vif').val();

    var data = {'user':user,'pwd':pwd,'vif':vif};
    if (user == '') {
        $.thinkmimi({Content : '请输入用户名！',Type: 2,Align: 'right',OutTime: 2000,});return false;
    }
    if (pwd == '') {
        $.thinkmimi({Content : '请输入密码！',Type: 2,Align: 'right',OutTime: 2000,});return false;
    }
      if (vif == '') {
        $.thinkmimi({Content : '请输入验证码！',Type: 2,Align: 'right',OutTime: 2000,});return false;
    }
    
    $.ajax({
        type: 'post',
        data:data,
        url: "<?php echo url('login/index'); ?>",
        success: function(data) {
          var array = eval('(' + data+ ')');
          if (array['code'] == '01') {
            $.thinkmimi({Content : array['msg'],Type: 2,Align: 'right',OutTime: 2000,});
          } else {
            $.thinkmimi({Content : array['msg'],Type: 1,Align: 'right',OutTime: 2000,});
            setTimeout(function(){window.location.href = "<?php echo url('index/index'); ?>";},1500); 
          }
      }
    });
}
$(".btn-block").on('click', function(){
    login();
});
$(".login-box-body").keydown(function() {
    if (event.keyCode == "13") {
        $('.btn-block').click();
    }
});
</script>