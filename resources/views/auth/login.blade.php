<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>家居魔方后台管理</title>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/signin.css" rel="stylesheet">
</head>

<body>

<div class="signin">
    <div class="signin-head"><img src="/images/avtar.png" alt="" class="img-circle"></div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>哎呀!</strong> 输入错啦.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-signin" role="form" action="{{ url('/auth/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" class="form-control" name="name" placeholder="用户名" required autofocus />
        <input type="password" class="form-control" name="password" placeholder="密码" required />
        <button class="btn btn-lg btn-warning btn-block" type="submit">登录</button>
        <label class="checkbox">
            <input type="checkbox" value="remember-me"> 记住我
        </label>
    </form>
</div>

</body>
</html>
