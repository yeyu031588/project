<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>学长微博注册界面</title>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/signin.css" rel="stylesheet">
<script type="text/javascript" src='/js/jquery-1.8.3.min.js'></script>
<script type="text/javascript" src='/js/jquery.validate.js'></script>
</head>

<body>
  @include('errors.error')
<div class="signin">
    <div class="signin-head"><img src="/images/avtar.png" alt="" class="img-circle"></div>
    <form class="form-signin" role="form" id="signupForm" action='/home/user/register' method='POST'>
        <div><input type="text" id='username' name='username' class="form-control" placeholder="用户名" /></div>
        <div><input type="password" id='password' name='password' class="form-control" placeholder="密码"/></div>
        <div><input type="password" id='confirm_password' name='confirm_password' class="form-control" placeholder="确认密码" /></div>
        <button class="btn btn-lg btn-warning btn-block" type="submit">注册</button>
    </form>
</div>

</body>
</html>
<script type="text/javascript">
$().ready(function() {
 $("#signupForm").validate({
    rules: {
	   username: {
	   	required: true,
	   	minlength: 6,
	   	maxlength: 12
	   },
	   password: {
	    required: true,
	    minlength: 6
	   },
	   confirm_password: {
	    required: true,
	    minlength: 6,
	    equalTo: "#password"
	   }
	  },
	messages: {
	   username: {
	   	required: "请输入昵称",
	   	minlength: jQuery.format("昵称不能小于{0}个字 符"),
	   	maxlength: jQuery.format("昵称不能大于{0}个字 符")
	   },
	   password: {
	    required: "请输入密码",
	    minlength: jQuery.format("密码不能小于{0}个字 符")
	   },
	   confirm_password: {
	    required: "请输入确认密码",
	    minlength: "确认密码不能小于6个字符",
	    equalTo: "两次输入密码不一致不一致"
	   }
	  }
    });
});
</script>