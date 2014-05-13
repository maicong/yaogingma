<?php 
require_once ("conn.php");
if(!isset($_SESSION['jihuo']))
	{
 	echo '<!doctype html>
<head>
<meta charset="utf-8" />
<title>您未激活或邀请码已过期</title>
<link rel="stylesheet" href="css/unicorn.login.css" />
</head>
<body>
<div id="logo"><img src="img/logo.png" alt="一款邀请码系统" /></div>
<div class="box">
  <div id="title">温馨提示<span id="close"><a href="###" onclick="windowclose()">X</a></span></div> 
  <div id="content">
<p>您未激活或邀请码已过期，请<a href="index.php">重新激活</a>！</p>  
</div>
<span class="copyright">CopyRight 2012-2013 <a href="http://www.yuxiaoxi.com">@麦田一根葱</a></span>
</div>
<script type="text/javascript">
function windowclose() {
    var browserName = navigator.appName;
    if (browserName=="Netscape") {
        window.open("", "_self", "");
        window.close();
    }
    else {
        if (browserName == "Microsoft Internet Explorer"){
            window.opener = "whocares";
            window.opener = null;
            window.open("", "_self");
            window.close();
        }
    }
}
</script>
</body>
</html>';
exit();
}
?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>一款邀请码系统</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/unicorn.login.css" />
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
<script language="javascript">    
function CheckForm(form){
	var user=form.user;
	var pwd=form.pwd;
	if(user.value==""){
		user.setCustomValidity("请填写帐号！"); 
	}else{
		user.setCustomValidity(""); 
	}
	if(pwd.value==""){
		pwd.setCustomValidity("请填写密码！"); 
	}else{
		pwd.setCustomValidity(""); 
	}
	if(user.value!=""&&pwd.value!=""){
        document.form.submit.disabled=true;
        document.form.submit.value='请稍后...';
		return true;
	}
}
</script> 
</head>
<body>
<div id="logo"><img src="img/logo.png" alt="一款邀请码系统" /></div>
<div id="loginbox">
<form id="form" name="form" method="post" action=""/>
<p>登录页</p>
	<div class="control-group">
			<div class="controls">
				<div class="input-prepend"> <span class="add-on"><i class="icon-user"></i></span>
					<input type="text" name="user" id="user" placeholder="帐号" required/>
				</div>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<div class="input-prepend"> <span class="add-on"><i class="icon-lock"></i></span>
					<input type="password" name="pwd" id="pwd" placeholder="密码" required/>
				</div>
			</div>
		</div>
		<div class="form-actions"><span class="pull-right">
			<input type="submit" class="btn btn-inverse" name="submit" id="sbm" value="登录" onClick="CheckForm(this.form)"/>
			</span> </div>
	</form>
</div>
</body>
</html>