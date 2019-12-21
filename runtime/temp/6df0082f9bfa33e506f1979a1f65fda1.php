<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:82:"D:\phpStudy2018\PHPTutorial\WWW\souams/application/admin\view\structure\index.html";i:1576911350;s:81:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\layout\default.html";i:1576911350;s:78:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\common\meta.html";i:1576912454;s:80:"D:\phpStudy2018\PHPTutorial\WWW\souams\application\admin\view\common\script.html";i:1576911350;}*/ ?>
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
        <link href="http://wq.ym0527.com/public/admin/css/juncms.min2.css?v=1" rel="stylesheet" type="text/css" />  



<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	
	<!-- END RIBBON -->
	<div class="content">
		<div class="panel panel-default panel-intro">
			<div class="panel-heading">
				<div class="panel-lead">
					<em>
						部门管理
					</em>
					点击左侧菜单，可以查询出对应部门下的所有员工。
				</div>
			</div>
			<div class="panel-body">
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade active in" id="one">
						<div class="widget-body no-padding">
							<div class="bootstrap-table">


                                    <div class="org-left-col tray-cell j_depa" style="float:left;margin-right: 10px">
                                        <div class="org-left-header">
                                            <span class="tab">
                                                <a id="organization-users" class="router j_user active">
                                                    部门列表
                                                </a>
                                            </span>
                                        </div>
                                        <a id="show-first-group" class="hide router">
                                        </a>
                                        <div id="org-tree" class="org-tree scrollwrapper mCustomScrollbar _mCS_24 mCS_no_scrollbar">
                                            <div id="mCSB_24" class="mCustomScrollBox mCS-darkblue mCSB_vertical_horizontal mCSB_inside" >
                                                <div id="mCSB_24_container_wrapper">
                                                    <div id="mCSB_24_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px; width: 100%; overflow: hidden; overflow-y: auto" >
                                                        <div id="org-tree-list" class="mt-15">
                                                            <ul>
                                                                <?php if(is_array($json) || $json instanceof \think\Collection || $json instanceof \think\Paginator): $i = 0; $__LIST__ = $json;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                                                <li class="del-<?php echo $v['id']; ?>">
                                                                    <div class="treenode router" style="padding-left:20px">
                                                                        <span class="actions j_psStatus">
                                                                            <?php if($adminController->vif('structure','upd')): ?><a class="router" href="javascript:upd('<?php echo url('structure/upd', ['pid'=>$v['id']]); ?>');" title="编辑"><i class="icon-edit"></i></a><?php endif; if($adminController->vif('structure','add')): ?><a class="router" href="javascript:add('<?php echo url('structure/add', ['pid'=>$v['id']]); ?>');" title="添加下级部门"><i class="icon-plus-thin"></i></a><?php endif; if($adminController->vif('structure','del')): ?><a class="router del_structure" data-id="<?php echo $v['id']; ?>" title="删除部门"><i class="icon-trash"></i></a><?php endif; ?>
                                                                        </span>
                                                                        <span class="num j_numps fr"><?php echo $v['num']; ?></span>
                                                                        <a class="router j_undefined" href="<?php echo url('structure/index', ['pid'=>$v['id']]); ?>"><span class="tree-name"><?php echo $v['name']; ?></span></a>
                                                                    </div>
                                                                    <?php if(is_array($v['children']) || $v['children'] instanceof \think\Collection || $v['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                                                                    <ul class="ftl-child-ul">
                                                                        <li class="del-<?php echo $vv['id']; ?>">
                                                                            <div class="treenode router" style="padding-left:40px">
                                                                                <span class="actions j_psStatus">
                                                                                    <?php if($adminController->vif('structure','upd')): ?><a class="router" href="javascript:upd('<?php echo url('structure/upd', ['pid'=>$vv['id']]); ?>');" title="编辑"><i class="icon-edit"></i></a><?php endif; if($adminController->vif('structure','add')): ?><a class="router" href="javascript:add('<?php echo url('structure/add', ['pid'=>$vv['id']]); ?>');" title="添加下级部门"><i class="icon-plus-thin"></i></a><?php endif; if($adminController->vif('structure','del')): ?><a class="router del_structure" data-id="<?php echo $vv['id']; ?>" title="删除部门"><i class="icon-trash"></i></a><?php endif; ?>
                                                                                </span>
                                                                                <span class="num j_numps fr"><?php echo $vv['num']; ?></span>
                                                                                <a class="router j_undefined" href="<?php echo url('structure/index', ['pid'=>$vv['id']]); ?>"><span class="tree-name"><?php echo $vv['name']; ?></span></a>
                                                                            </div>
                                                                            <?php if(is_array($vv['children']) || $vv['children'] instanceof \think\Collection || $vv['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vv['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvv): $mod = ($i % 2 );++$i;?>
                                                                            <ul class="ftl-child-ul">
                                                                                <li class="del-<?php echo $vvv['id']; ?>">
                                                                                    <div class="treenode router" style="padding-left:60px">
                                                                                        <span class="actions j_psStatus">
                                                                                            <?php if($adminController->vif('structure','upd')): ?><a class="router" href="javascript:upd('<?php echo url('structure/upd', ['pid'=>$vvv['id']]); ?>');" title="编辑"><i class="icon-edit"></i></a><?php endif; if($adminController->vif('structure','add')): ?><a class="router" href="javascript:add('<?php echo url('structure/add', ['pid'=>$vvv['id']]); ?>');" title="添加下级部门"><i class="icon-plus-thin"></i></a><?php endif; if($adminController->vif('structure','del')): ?><a class="router del_structure" data-id="<?php echo $vvv['id']; ?>" title="删除部门"><i class="icon-trash"></i></a><?php endif; ?>
                                                                                        </span>
                                                                                        <span class="num j_numps fr"><?php echo $vvv['num']; ?></span>
                                                                                        <a class="router j_undefined" href="<?php echo url('structure/index', ['pid'=>$vvv['id']]); ?>"><span class="tree-name"><?php echo $vvv['name']; ?></span></a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                        </li>
                                                                    </ul>
                                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </li>
                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                            </ul>
                                                                        
                                                                        
                                                                    
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



								<div class="fixed-table-toolbar" style="width:-webkit-calc(100% - 310px); width:-moz-calc(100% - 310px); width:calc(100% - 310px);float: left;">
									<div class="bs-bars pull-left">
										<div id="toolbar" class="toolbar">
											<a href="javascript:window.location.reload();" class="btn btn-primary btn-refresh" title="刷新">
												<i class="fa fa-refresh"></i>
                                            </a>
                                            <?php if($adminController->vif('structure','add')): ?>
											<a href="javascript:add('<?php echo url('structure/add'); ?>');" class="btn btn-success btn-add" title="添加">
												<i class="fa fa-plus"></i> 添加
                                            </a>
                                            <?php endif; ?>
										</div>
									</div>
									<div class="columns columns-right btn-group pull-right">
										
										<div class="keep-open btn-group" title="列">
											<button type="button" aria-label="columns" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												<i class="glyphicon glyphicon-th icon-th"></i>
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu" id="table_menu">
												
											</ul>
										</div>
                                        
									</div>
								</div>
								<div class="fixed-table-container" style="width:-webkit-calc(100% - 310px); width:-moz-calc(100% - 310px); width:calc(100% - 310px);float: left;">
									<div class="fixed-table-body">
										
										<table id="table" class="table table-striped table-bordered table-hover"
										data-operate-edit="1" data-operate-del="1" width="100%">
											<thead>
												<tr>
                                                    <th data-status="0"><div class="th-inner">ID</div></th>
                                                    <th data-status="1"><div class="th-inner">姓名</div></th>
                                                    <th data-status="1"><div class="th-inner">联系方式</div></th>
                                                    <th data-status="1"><div class="th-inner">拥有角色</div></th>
                                                    <th data-status="1"><div class="th-inner">部门</div></th>
												</tr>
											</thead>
                                            
											<tbody>
                                                <tr class="del-">
                                                    <td align="center"></td>
                                                </tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

								
<script>
layui.use(['form'], function(){
  var form = layui.form,laydate = layui.laydate;
});

// 添加
function add(href) {
	layer.open({
		type: 2,
		title: '添加新部门',
		shadeClose: true,
		shade: false,
		maxmin: true,
		area: ['700px', '550px'],
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
					window.location.reload();
				}, 700);
			}
		},
	});
}
// 修改
function upd(href) {
	layer.open({
		type: 2,
		title: '修改部门',
		shadeClose: true,
		shade: false,
		maxmin: true,
		area: ['700px', '550px'],
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
					window.location.reload();
				}, 700);
			}
		},
	});
}
// 删除
$(".del_structure").on('click', function(){
    if (confirm('确认删除吗')) {
        var id   = $(this).attr('data-id');
        var data = {'id':id};

        $.ajax({
            type: 'post',
            data:data,
            url: "<?php echo url('del'); ?>",
            success: function(data) {
                var array = eval('('+data+')');
				if (array['code'] == '01') {
					$.thinkmimi({Content : array['msg'], Type:2, Align:'right', OutTime:2000});
				} else {
					$.thinkmimi({Content : array['msg'], Type:1, Align:'right', OutTime:2000});
					$('.del-'+id).remove();
				}
            }
        });
    }
});
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