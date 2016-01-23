<!DOCTYPE html>
<html class="login-bg">
<head>
	<title>Detail Admin - Sign up</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="css/layout.css" />
    <link rel="stylesheet" type="text/css" href="css/elements.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/compiled/signup.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
    @include('errors.error')
    <div class="header">
        <a href="index.html">
         <!--    <img src="images/logo.png" class="logo" /> -->
        </a>
    </div>
    <div class="row-fluid login-wrapper">
        <div class="box">
            <div class="content-wrap">
                <form role="form" action='/register' id="signupForm" method='POST'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h6>注册</h6>
                <input class="span12" type="text" placeholder="用户名" id='username' name='username'/>
                <input class="span12" type="password" placeholder="密码" id='passwd' name='passwd'/>
                <input class="span12" type="password" placeholder="确认密码" id='repasswd' name='repasswd'/>
                <div class="action">
                    <button class="btn-glow primary login">注册</button>
                </div>
                </form>                
            </div>
        </div>

        <div class="span4 already">
            <p>Already have an account?</p>
            <a href="signin.html">Sign in</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="js/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
    <script type="text/javascript" src='/js/jquery-1.8.3.min.js'></script>
    <script type="text/javascript" src='/js/jquery.validate.js'></script>
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
       passwd: {
        required: true,
        minlength: 6
       },
       repasswd: {
        required: true,
        minlength: 6,
        equalTo: "#passwd"
       }
      },
    messages: {
       username: {
        required: "请输入昵称",
        minlength: jQuery.format("昵称不能小于{0}个字 符"),
        maxlength: jQuery.format("昵称不能大于{0}个字 符")
       },
       passwd: {
        required: "请输入密码",
        minlength: jQuery.format("密码不能小于{0}个字 符")
       },
       repasswd: {
        required: "请输入确认密码",
        minlength: "确认密码不能小于6个字符",
        equalTo: "两次输入密码不一致不一致"
       }
      }
    });
});
</script>