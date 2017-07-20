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
    .

    <div class="login_wrapper">

      <!--忘记密码-->
      <div id="forget" class="animate form forget_form">
        <section class="login_content">
         <form>
          <h1>忘记密码</h1>

          <div >
            <input type="phone" class="form-control" placeholder="电话" required="" />
            <button style="margin:10px auto; float:left;" type="button" class="btn btn-info">获取验证码</button>

          </div>
          <div>
            <input   type="text" class="form-control" placeholder="短信验证码" required="" />

          </div>


          <div>
            <a class="btn btn-default submit" href="mmcz.html">提交</a>
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
    <!--密码重置-->

  </div>
</div>
</body>
</html>
