<?php /*a:1:{s:76:"D:\phpStudy\PHPTutorial\WWW\shopping\application\admin\view\login\login.html";i:1561114478;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
	body{
		background-image: url(/shopping/public/static//Img/1.jpg);
	}
</style>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/shopping/public/static//assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/shopping/public/static//assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/shopping/public/static//assets/css/form-elements.css">
        <link rel="stylesheet" href="/shopping/public/static//assets/css/style.css">

        <link rel="shortcut icon" href="/shopping/public/static//ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/shopping/public/static//assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/shopping/public/static//assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/shopping/public/static//assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/shopping/public/static//assets/ico/apple-touch-icon-57-precomposed.png">
        <script src="/shopping/public/static//JS/jquery.min.2.1.js"></script>
    </head>

    <body>
            <div class="inner-bg">
                <div class="container">	
                    <div class="row">
                    	<div class="col-sm-6 book">
                    		<!-- <img src="/shopping/public/static//assets/img/ebook.png" alt=""> -->
                    	</div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>购物平台后台</h3>
                            		<p>本网站由阿里巴巴赞助开发</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <div role="form" class="registration-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">用户名</label>
			                        	<input type="text" name="form-first-name" placeholder="请输入用户名" class="form-first-name form-control" id="form-first-name" autocomplete="off">
			                        	<span id="name_span">3-10位字符串</span>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">密码</label>
			                        	<input type="password" name="form-last-name" placeholder="请输入密码" class="form-last-name form-control" id="form-last-name" autocomplete="off">
			                        	<span id="pwd_span">6-20位字符串</span>
			                        </div>
									<div>
										<INPUT type="text" placeholder="请输入验证码" class="form-first-name form-control" id="code" name="code" autocomplete="off">
										<span id="code_span"></span>
										<br>
										<img id="im" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();">
									</div>
									<br>
			                        <button class="btn" id="log">登陆</button>
			                    </div>
		                    </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

<script>	
    $('#log').click(function() {
        var name=$('#form-first-name').val()
        var password=$('#form-last-name').val()
        var code=$('#code').val()
        $.ajax({
            url:"check_login",
            data:{
                name:name,
                password:password,
                code:code
            },
            success:function(result) {
                if (result=="ok") {
                   	alert('chenggong');
                   	location.href="<?php echo url('Admin/index'); ?>";
            	}else if (result=="error") {
                    alert('验证码错误');
				}else{
                    alert('用户名或者密码错误');
				}
            }
		})
    })
</script>
        <script src="/shopping/public/static//assets/js/jquery-1.11.1.min.js"></script>
        <script src="/shopping/public/static//assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/shopping/public/static//assets/js/jquery.backstretch.min.js"></script>
        <script src="/shopping/public/static//assets/js/retina-1.1.0.min.js"></script>
        <script src="/shopping/public/static//assets/js/scripts.js"></script>   
    </body>

</html>