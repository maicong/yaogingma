<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>一款邀请码系统</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/unicorn.login.css" />
<script type="text/javascript">
function CheckForm(frm){
var name=frm.jihuo;
if(name.value==""){
name.setCustomValidity("请填写邀请码！"); 
}else{
name.setCustomValidity(""); 
}
}
</script>

</head>
<body>
<div id="logo"><img src="img/logo.png" alt="一款邀请码系统" /></div>
<div class="box">
  <div id="title">温馨提示</div>
  <div id="content">
<p>请先输入邀请码</p>
<form action="going.php" method="post">
<div><input type="text" id="jihuo" name="jihuo" placeholder="邀请码" onKeyUp="value=value.replace(/[\W]/g,'')" required/></div>
<div><input type="submit" class="btn btn-info" value="马上进入" onClick="CheckForm(this.form)"/></div>
</form>
  </div>
<span class="copyright">CopyRight 2012-2013 <a href="http://www.yuxiaoxi.com">@麦田一根葱</a></span>
</div>
</body>
</html>