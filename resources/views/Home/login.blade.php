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
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <!--登录-->
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>登录</h1>
              <div>
                <input type="text" class="form-control" placeholder="账号" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="密码" required="" />
              </div>
              <div>
                <input  style="width:50%;" type="text" class="form-control" placeholder="验证码" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="#">登录</a>
                <a class="reset_pass" href="{{ url('/forget') }}">忘记密码?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">新用户?
                  <a href="#signup" class="to_register"> 注册 </a>
                </p>

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
        <!--注册-->
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>注册</h1>
              <div>
                <input type="text" class="form-control" placeholder="用户名" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="邮箱" required="" />
              </div>
              <div style="margin-bottom:20px;">
                <input type="phone" class="form-control" placeholder="电话" required="" />
              </div>
              <div >
                <input  type="password" class="form-control" placeholder="密码" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="#">提交</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">已经注册 ?
                  <a href="#" class="to_register"> 登录 </a>
                </p>

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
