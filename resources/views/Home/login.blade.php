<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>会员登录</title>

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
        <div class="animate form login_form">
          <section class="login_content">
              <form class="" action="{{ action('home\loginController@check') }}" method="post">
              <h1>登录</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="账号" required="123" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="密码" required="" />
              </div>
              <div>
                <input style="width:50%;float:left;margin-right:30px" name="captcha" type="text" class="form-control" placeholder="验证码" required="" />
                <img src="{!! captcha_src('flat') !!}" style="float:left" onclick="this.src=this.src+'?a=1'" style="cursor:pointer;padding-left:10px;" alt="请输入验证码">
                <div class="clearfix">
                </div>
              </div>
              <div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-default submit" href="#">登录</button>
                <a class="reset_pass" href="{{ url('/forget') }}">忘记密码?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> </h1>
                  <p>©2016 All Rights Reserved. 版权信息</p>
                </div>
              </div>
            </form>
          </section>
        </div>
    </div>
  </body>
</html>
