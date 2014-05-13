<?php
require_once ("conn.php");
$jihuo = htmlspecialchars($_POST['jihuo']);
$check_query = mysql_query("select id from yaoqingma where yaoqingma='$jihuo' and status='0' limit 1");
if(mysql_fetch_array($check_query))
{
$checksql="update yaoqingma set status='1' where yaoqingma='$jihuo'";
if(mysql_query($checksql))
{
$_SESSION['jihuo']=$jihuo;
header("Content-Type: text/html; charset=utf-8");
echo'<!doctype html>
<head>
<meta charset="utf-8" />
<title>认证成功，欢迎进入~</title>
<link rel="stylesheet" href="css/unicorn.login.css" />
</head>
<body>
<div id="logo"><img src="img/logo.png" alt="一款邀请码系统" /></div>
<div class="box">
  <div id="title">温馨提示<span id="close"><a href="###" onclick="windowclose()">X</a></span></div>
  <div id="content">
<p>恭喜您认证成功，邀请码只能使用一次哦，请点这里<a href="login.php">登录或注册</a>！</p>  
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
}else{
	echo"数据更新失败！";
	}
}
else{
  header("Content-Type: text/html; charset=utf-8");
  echo'<!doctype html>
<head>
<meta charset="utf-8" />
<title>邀请码填写错误！</title>
<link rel="stylesheet" href="css/unicorn.login.css" />
</head>
<body>
<div id="logo"><img src="img/logo.png" alt="一款邀请码系统" /></div>
<div class="box">
  <div id="title">温馨提示<span id="close"><a href="###" onclick="windowclose()">X</a></span></div> 
  <div id="content">
<p>您的邀请码已失效或者太高端，系统酱无法识别！请<a href="index.php">返回重新填写</a>！</p>  
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
 }
?>