<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('home/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('home/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('home/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('home/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('home/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    @if(session('success'))
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            {{session('success')}}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            {{session('error')}}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <!--登录-->
      <div class="login_wrapper">
        <!--注册-->
        <div id="register" class="animate form">
          <section class="login_content">
              <form  action="{{ action('home\registerController@add')}}" method="post">
              <h1>注册</h1>
              <div>
                <input type="hidden" name="catid" value="{{ $data->catid }}">
                <input name="username" type="text" class="form-control" placeholder="用户名" required="" />
              </div>
              <div>
                <input name="email" type="email" class="form-control" placeholder="邮箱" required="" value="{{ $data->email }}" readonly />
              </div>
              <div style="margin-bottom:20px;">
                <input name="phone" type="phone" class="form-control" placeholder="电话" required="" />
              </div>
              <div >
                <input  name="password" type="password" class="form-control" placeholder="密码" required="" />
              </div>
              <div >
                <input  name="repassword" type="password" class="form-control" placeholder="重复密码" required="" />

              </div>
              <div>
                {{ csrf_field() }}
                <button class="btn btn-default submit">提交</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> </h1>
                  <p>©2016 All Rights Reserved.版权信息</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
