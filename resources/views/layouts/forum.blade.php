<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title>Obscura</title>
@section('link')
<link rel="stylesheet" type="text/css" media="all" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="/css/media-queries.css" />
<link rel="stylesheet" type="text/css" href="/js/player/mediaelementplayer.css" />

<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="/js/retina.js"></script>
<script type="text/javascript" src="/js/selectnav.js"></script>
<script type="text/javascript" src="/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="/js/mediaelement.min.js"></script>
<script type="text/javascript" src="/js/mediaelementplayer.min.js"></script>
<script type="text/javascript" src="/js/jquery.dcflickr.1.0.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
<script type="text/javascript">
	$.backstretch("/images/bg/1.jpg");
</script>
@show
</head>
<body>
<div class="scanlines"></div>

<!-- Begin Header -->
@include('common.head')
<!-- End Header -->

<!-- Begin Wrapper -->
<div class="wrapper">
    @yield('content')
</div>
<!-- End Wrapper -->

<!-- Begin Footer -->
@include('common.footer')
<!-- End Footer --> 
</body>
</html>