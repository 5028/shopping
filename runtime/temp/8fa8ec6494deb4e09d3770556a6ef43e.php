<?php /*a:1:{s:86:"D:\phpStudy\PHPTutorial\WWW\shopping\application\admin\view\permission\permission.html";i:1561988095;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
</script>
<style type="text/css">
	.fade {opacity: 0;
	-webkit-transition: opacity .15s linear;
	-o-transition: opacity .15s linear;
	transition: opacity .15s linear}
.fade.in {opacity: 1}
.modal-open {overflow: hidden}
.modal{ position:fixed; left:0; top:42%; right:0; bottom:0; z-index:1040; display:none; overflow:hidden;-webkit-overflow-scrolling:touch; outline:0}
.modal.fade .modal-dialog{
	-webkit-transition: -webkit-transform .3s ease-out;
	-o-transition: -o-transform .3s ease-out;
	transition: transform .3s ease-out;
	-webkit-transform: translate(0,-50%);
	-ms-transform: translate(0,-50%);
	-o-transform: translate(0,-50%);
	transform: translate(0,-50%)}
.modal.in .modal-dialog {
	-webkit-transform: translate(0, 0);
	-ms-transform: translate(0, 0);
	-o-transform: translate(0, 0);
	transform: translate(0, 0)}
.modal-open .modal {overflow-x: hidden;overflow-y: auto}
	.modal-backdrop {position: fixed;top: 0;right: 0;bottom: 0;left: 0;background-color: #000}
	.modal-backdrop.fade {filter: alpha(opacity=0);opacity: 0}
	.modal-backdrop.in {filter: alpha(opacity=50);opacity: .5}
	.modal-dialog {position: relative;width: auto;margin: 10px}
	.modal-content{position: relative;background-color: #fff;border: 1px solid #999;border: 1px solid rgba(0,0,0,.2);outline: 0;
		-webkit-background-clip: padding-box;
		background-clip: padding-box; 
		-webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
		box-shadow: 0 3px 9px rgba(0,0,0,.5)}
	
		.modal-header {min-height: 16.42857143px;padding: 15px;border-bottom: 1px solid #eee; position:relative}
		.modal-header .close{position:absolute; right:10px; top:10px}
		.modal-header h3,.modal-header .modal-title{margin:0; padding:10px 0; font-size:16px}
	
		.modal-body {position:relative;padding: 15px;overflow-y:visible;word-break:break-all}
			.modal-form {margin-bottom: 0}
	
		.modal-footer {padding:15px;margin-bottom: 0;text-align: right;background-color: #f5f5f5;border-top: 1px solid #eee;*zoom: 1}
		.modal-footer:before,.modal-footer:after {display: table;content: ""}
		.modal-footer:after {clear: both}
		.modal-footer .btn + .btn {margin-left: 5px;margin-bottom: 0}
		.modal-footer .btn-group .btn + .btn {margin-left: -1px}
		.modal-footer .btn-block + .btn-block {margin-left: 0}
		
	.modal-scrollbar-measure {position: absolute;top: -9999px;width: 50px;height: 50px;overflow: scroll}
	
	.radius .modal-content{ border-radius:6px}
	.radius .modal-footer{ border-bottom-left-radius:6px; border-bottom-right-radius:6px}
	@media (min-width: 768px) {
		.modal-dialog {width: 600px;margin: 30px auto}
		.modal-content {-webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);box-shadow: 0 5px 15px rgba(0, 0, 0, .5)}
		.modal-sm {width: 300px}
	}
	@media (min-width: 992px) {
		.modal-lg {width: 900px}
	}
 
.modal-alert{position:fixed; right:auto; bottom:auto; width:300px; left:50%;margin-left:-150px; top:50%;margin-top:-30px; z-index:9999;background-color: #fff;border: 1px solid #999;border: 1px solid rgba(0,0,0,.2);outline: 0;
	-webkit-background-clip: padding-box;
	background-clip: padding-box; 
	-webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
	box-shadow: 0 3px 9px rgba(0,0,0,.5)}
.modal-alert-info{padding:30px; text-align:center; font-size:14px; background-color:#fff}

</style>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<link rel="stylesheet" type="text/css" href="/shopping/public/static//h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/shopping/public/static//h-ui/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/shopping/public/static//lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/shopping/public/static//lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/shopping/public/static//h-ui/skin/default/skin.css" id="skin" />
<link rel="stylesheet" href="//res.layui.com/layui/dist/css/layui.css"  media="all">
<link rel="stylesheet" type="text/css" href="/shopping/public/static//h-ui/css/style.css" />
<!-- <script src="/shopping/public/static//JS/jquery.min.2.1.js"></script> -->

<title>权限管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 权限管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" onclick="show()"><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<div class="form form-horizontal" id="form-admin-role-add">
		<div class="row cl">
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" style="width:250px" placeholder="权限名称" id="quanxian" name="">
				<textarea rows="3" cols="20" id="description">
				</textarea>
				<button type="submit" class="btn btn-success radius" id="admin-role-save"><i class="icon-ok"></i>添加权限节点</button>
			</div>
		</div>
	</div>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> 
	</span> <span class="r">共有数据：<strong>???</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="7">权限节点</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="200">权限名称</th>
				<th>描述</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			   
		</tbody>

	</table>
</div>
<button class="btn radius btn-primary size-L" onclick="play()">弹出对话框</button>
<div id="modal-demo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content radius">
			<div class="modal-header">
				<h3 class="modal-title">对话框标题</h3>
				<a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
			</div>
			<div class="modal-body">
				<p>对话框内容…</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">确定</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="/shopping/public/static//lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/shopping/public/static//lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="/shopping/public/static//lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/shopping/public/static//h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/shopping/public/static//h-ui/js/H-ui.admin.js"></script>
<script type="text/javascript">
function show() {
		var tr='';
    	$.ajax({
            url:"<?php echo url('permission/show'); ?>",
            dataType:'json',
            success:function(res) {
              	//console.log(res.data)
              	var data=res.data
              	if (res.status=='ok') {
              		for (var i = 0; i < data.length; i++) {
              			// console.log(data[i].id)
              			tr=tr+"<tr class='text-c'><td><input name='' type='checkbox' value=''></td><td>"+data[i].id+"</td><td><img src=''>"+data[i].name+"</td><td class='text-l'><img src=''>"+data[i].	description+"</td><td class='f-14 product-brand-manage'><a style='text-decoration:none' onclick='myupdate("+data[i].id+")' title='编辑'>编辑<i class='Hui-iconfont'>&#xe6df;</i></a> <a style='text-decoration:none' onclick='mydelete("+data[i].id+")' title='删除'>删除<i class='Hui-iconfont'>&#xe6e2;</i></a></td></tr>";
              		}
              		$(".table tbody").html(tr);

              	}
            }
		});
	};
show();

$('#admin-role-save').click(function() {
        var name=$('#quanxian').val()
        var description=$('#description').val()
        // console.log(name)
        $.ajax({
            url:"<?php echo url('permission/add'); ?>",
            data:{
                name:name,
                description:description
            },
            type:'post',
            dataType:'json',
            success:function(res) {
            	console.log(res)
            	if (res.status=='ok') {
            		alert('添加成功');
            		show();
            	}
            	if (res.status=='error') {
            		alert(res.data);
            	}
            }
		})
		
    });

function mydelete(id) {
 	console.log('id');
 	$.ajax({
            url:"<?php echo url('permission/mydelete'); ?>",
            data:{
                id:id,
            },
            type:'post',
            dataType:'json',
            success:function(res) {
            	console.log(res)
            	if (res.status=='ok') {
            		alert('删除成功');
            		show();
            	}
            	else {
            		alert('删除失败');
            	}
            }
		})
 	show();
 }

function play(){
	$("#modal-demo").modal("show")
}

</script>
</body>
</html>