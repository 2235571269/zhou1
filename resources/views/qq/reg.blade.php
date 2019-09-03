<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
    <style>
    #btn{
        width:360px ;
        transition: width 1s;
    }
        #btn:hover{
            width: 380px;
        }
    </style>
</head>
<body>
<div class="container">

<h1>欢迎注册QQ</h1>
<h4>每一天，乐在沟通。<span style="color: #0d6aad;margin-left: 10%;">免费靓号</span></h4>
<form class="form-horizontal" method="post" action="/reg_do">
    {{csrf_field()}}
    <div class="form-group">
        <div class="col-sm-4 col-md-5 col-lg-4" >
            <input type="text" class="form-control" id="inputEmail3" name="nickname" placeholder="昵称" required>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-4 col-md-5 col-lg-4">
            <input type="password" class="form-control" name="pwd" id="inputPassword3" placeholder="密码" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-1 col-md-1 col-lg-1">
            <select class="form-control" style="width: 85px">
                <option>+86</option>
                <option>+852</option>
                <option>+853</option>
                <option>+883</option>

            </select>
        </div>
        <div class="col-sm-3  col-md-4 col-lg-3">
            <input type="text" class="form-control" name="phone" id="inputEmail3" pattern="1[35689]\d{9}" placeholder="手机号码" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-0 col-sm-10">
            <button type="submit" class="btn btn-primary" id="btn" >立即注册</button>
        </div>
    </div>
</form>
</div>
</body>
</html>