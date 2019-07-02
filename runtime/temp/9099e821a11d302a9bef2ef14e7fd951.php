<?php /*a:1:{s:90:"D:\phpStudy\PHPTutorial\WWW\shopping\application\admin\view\permission\permission_add.html";i:1561727451;}*/ ?>

<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />

<link rel="stylesheet" type="text/css" href="/shopping/public/static//h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/shopping/public/static//h-ui/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/shopping/public/static//lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/shopping/public/static//lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/shopping/public/static//h-ui/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/shopping/public/static//h-ui/css/style.css" />
<script src="/shopping/public/static//JS/jquery.min.2.1.js"></script>

<title>新建网站角色 - 权限管理 - H-ui.admin v2.3</title>
</head>
<body>
<article class="page-container">
	<div class="form form-horizontal" id="form-admin-role-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>权限名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" style="width:250px" placeholder="权限名称" id="quanxian" name="">
				
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">权限描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea rows="3" cols="20" id="description">
				</textarea>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i>确定</button>
			</div>
		</div>
	</div>
</article>
<script type="">
	$('#admin-role-save').click(function() {
        var name=$('#quanxian').val()
        var description=$('#description').val()
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
            	}
            	if (res.status=='error') {
            		alert(res.data);
            	}
            	
            }
		})
    });


</script>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/shopping/public/static//lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/shopping/public/static//lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/shopping/public/static//lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/shopping/public/static//h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/shopping/public/static//h-ui/js/H-ui.admin.js"></script> 

</body>
</html>