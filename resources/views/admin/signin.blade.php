<!DOCTYPE html>
<html class="login-bg">
<head>
	<title>Detail Admin - Sign in</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/css/icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="/css/lib/font-awesome.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="/css/compiled/signin.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>


    <!-- background switcher -->
    <div class="bg-switch visible-desktop">
        <div class="bgs">
            <a href="#" data-img="landscape.jpg" class="bg active">
                <img src="/images/bgs/landscape.jpg" />
            </a>
            <a href="#" data-img="blueish.jpg" class="bg">
                <img src="/images/bgs/blueish.jpg" />
            </a>            
            <a href="#" data-img="7.jpg" class="bg">
                <img src="/images/bgs/7.jpg" />
            </a>
            <a href="#" data-img="8.jpg" class="bg">
                <img src="/images/bgs/8.jpg" />
            </a>
            <a href="#" data-img="9.jpg" class="bg">
                <img src="/images/bgs/9.jpg" />
            </a>
            <a href="#" data-img="10.jpg" class="bg">
                <img src="/images/bgs/10.jpg" />
            </a>
            <a href="#" data-img="11.jpg" class="bg">
                <img src="/images/bgs/11.jpg" />
            </a>
        </div>
    </div>


    <div class="row-fluid login-wrapper">
        <form action='/admin/signin' method='POST'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <a href="index.html">
            <img class="logo" src="/images/logo-white.png" />
        </a>

            <div class="span4 box">
            <div class="content-wrap">
                <h6>后台登录</h6>
                <input class="span12" type="text" placeholder="E-mail address" />
                <input class="span12" type="password" placeholder="Your password" />
                <div class="remember">
                    <input id="remember-me" type="checkbox" />
                    <label for="remember-me">Remember me</label>
                </div>
                <button class="btn-glow primary login">登录</button>
            </div>
        </div>
        </form>
    </div>

	<!-- scripts -->
    <script src="/js/jquery-latest.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/theme.js"></script>

    <!-- pre load bg imgs -->
    <script type="text/javascript">
        $(function () {
            // bg switcher
            var $btns = $(".bg-switch .bg");
            $btns.click(function (e) {
                e.preventDefault();
                $btns.removeClass("active");
                $(this).addClass("active");
                var bg = $(this).data("img");

                $("html").css("background-image", "url('/images/bgs/" + bg + "')");
            });
             $("html").css("background-image", "url('/images/bgs/landscape.jpg')");
           
        });
    </script>

</body>
</html>
