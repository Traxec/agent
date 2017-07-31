@inject('judge', 'App\Http\Controllers\home\exit_signController')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>代理系统 - @yield('title')</title>

  <!-- Bootstrap -->
  <link href="{{asset('home/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('home/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('home/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset('home/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="{{asset('home/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset('home/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="{{asset('home/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="{{asset('home/build/css/custom.min.css')}}" rel="stylesheet">

  <link href="{{asset('home/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
  <!-- Switchery -->
  <link href="{{asset('home/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
  <!-- starrr -->
  <link href="{{asset('home/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
  <link href="{{asset('home/css/maps/bootstrap-fileupload.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/css/maps/basic.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
</head>

<body class="nav-md">

  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">

            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{!! $judge->info()->nick==''?$judge->info()->username:$judge->info()->nick; !!}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <ul class="nav side-menu">
                  <li><a href="{{url('/')}}"><i class="fa fa-home"></i> 首页 </a>

                  </li>

                  <li><a><i class="fa fa-edit"></i> 个人信息 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/home/person')}}">个人资料</a></li>
                      <li><a href="{{url('/home/person/password')}}">密码修改</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> 系统管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/home/system/add')}}">生成系统</a></li>
                      <li><a href="{{url('/home/system')}}">系统列表</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> 安装包管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/home/package/add')}}">生成安装包</a></li>
                      <li><a href="{{url('/home/package')}}">安装包列表</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> 缴费管理<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/home/pay')}}">缴费</a></li>
                      <li><a href="{{url('/home/contribution')}}">缴费记录</a></li>
                    </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-clone"></i> 工单管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/home/work/order')}}">工单发布</a></li>
                      <li><a href="{{url('/home/work/record')}}">工单记录</a></li>

                    </ul>
                  </li>
                  <li><a href="{{url('/home/withdrawals')}}"><i class="fa fa-bar-chart-o"></i>提现管理 </a>
                  </li> -->
                  <!-- <li><a><i class="fa fa-bug"></i>常用工具 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">邮箱<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="{{url('/home/send/mail')}}">写信</a>
                          </li>
                          <li><a href="{{url('/home/send/box')}}">已发送</a>
                          </li>

                        </ul>
                      </li>
                      <li><a href="#">短信<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="{{url('/home/send/message')}}">写信</a>
                          </li>
                          <li><a href="{{url('/home/send/inbox')}}">已发送</a>
                          </li>

                        </ul>
                      </li>

                    </ul>
                  </li> -->
                </ul>
              </div>
              <div class="menu_section">
                <h3>我的客户</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-desktop"></i> 客户管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/home/register_email')}}">发展客户</a></li>
                      <li><a href="{{url('/home/my_users')}}">我的客户</a></li>
                    </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-windows"></i>客户账户管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">账户审核<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="{{url('/home/user/check')}}">普通账户审核</a>
                          </li>
                          <li><a href="{{url('/home/agency/check')}}">代理账户审核</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">账户管理<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="{{url('/home/user/index')}}">普通账户管理</a>
                          </li>
                          <li><a href="{{url('home/agency/index')}}">代理账户管理</a>
                          </li>

                        </ul>
                      </li>

                    </ul>
                  </li> -->
                  <!-- <li><a href="{{url('/home/customer')}}"><i class="fa fa-desktop"></i>客户系统管理 <span class="fa fa-chevron-down"></span></a> -->

                  </li>


                </ul>
              </div>

            </div>

            <!-- /sidebar menu -->

            </ul>
          </div>

        </div>

        <!-- /sidebar menu -->


      </div>


        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
                <ul class="nav navbar-nav navbar-right">
                  @if(session('user_id'))
                  <li class="">
                    <a href="#" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      {!! $judge->info()->nick==''?$judge->info()->username:$judge->info()->nick; !!}
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="{{ url('home/exit') }}"><i class="fa fa-sign-out pull-right"></i>退出</a></li>
                    </ul>
                  </li>
                  @endif

                  <li role="presentation" class="dropdown">
                    <!-- <a href="#" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a> -->
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                      <li>
                        <a>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <div class="text-center">
                          <a>
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>

            </nav>
          </div>
        </nav>
      </div>
      @if(session('success'))
      <div class="alert alert-success alert-dismissable" style="text-align:center">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        {{session('success')}}
      </div>
      @elseif(session('error'))
      <div class="alert alert-danger alert-dismissable" style="text-align:center">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        {{session('error')}}
      </div>
      @endif
      @if (count($errors) > 0)
      <div class="alert alert-danger" style="text-align:center">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @section('content')

      @show
    </div>

    <!-- jQuery -->
    <script src="{{asset('home/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('home/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('home/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('home/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('home/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('home/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('home/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('home/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('home/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('home/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('home/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('home/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('home/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('home/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('home/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('home/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('home/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('home/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('home/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('home/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('home/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('home/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('home/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('home/build/js/custom.min.js')}}"></script>


    <script src="{{asset('home/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="{{asset('home/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    <script src="{{asset('home/vendors/google-code-prettify/src/prettify.js')}}"></script>
    <script src="{{asset('home/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <script src="{{asset('home/vendors/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('home/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('home/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
    <script src="{{asset('home/vendors/autosize/dist/autosize.min.js')}}"></script>
    <script src="{{asset('home/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
    <script src="{{asset('home/vendors/starrr/dist/starrr.js')}}"></script>

    <script src="{{asset('home/js/updownload/jquery.metisMenu.js')}}"></script>


  </body>
</html>
