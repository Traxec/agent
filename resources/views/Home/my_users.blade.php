@extends('Layout.home')

@section('title','我的客户')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>我的客户</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <!-- <h2>代理账户审核<small>Users</small></h2> -->
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                  <form class="" action="" method="post">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">新增</button>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">生成链接</button>

                  </form>
                  <!-- 新增 -->
                  <div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                            <h4 style="margin-left:10px; font-weight:bold; ">新增</h4>
                          </div>
                          <div class="modal-body">
                            <div class="container col-lg-12">
                              <label for="exampleInputEmail1">姓名</label>
                              <input type="useranme" class="form-control" id="usenanme" placeholder="">
                            </div><br/>
                            <div class="container col-lg-12">
                              <label for="exampleInputEmail1">电话</label>
                              <input type="iphone" class="form-control" id="iphone" placeholder="">
                            </div><br/>
                            <div class="container col-lg-12">
                              <label for="exampleInputEmail1">邮箱</label>
                              <input type="email" class="form-control" id="email" placeholder="">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
                            <button type="button" class="btn btn-default">取消</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--生成链接 -->
                    <div class="modal fade" style="z-index='9999'" id="demoModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                              aria-hidden="true">&times;</span></button>
                              <h4 style="margin-left:10px; font-weight:bold;">普通账户注册链接</h4>
                            </div>
                            <h4 style="margin-left:30px;">http://fnksadhjkewhfkasjksjafkafkjahfkjasfh.com</h4>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <table id="datatable-keytable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>序号</th>
                            <th>目录树</th>
                            <th>账号</th>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>邮箱</th>
                          </tr>
                        </thead>
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="demoModal6">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel2">提示</h4>
                              </div>
                              <div class="modal-body">
                                <h4>确定要删除吗？</h4>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
                              </div>

                            </div>
                          </div>
                        </div>
                        <tbody>
                          <?php $a = 0 ?>
                          @foreach ($my_users as $key => $value)
                          <?php $a++ ?>
                          <tr>
                            <td>{{$a}}</td>
                            <td>{{$value->path}}</td>
                            <td>{{$value->username}}</td>
                            <td>{{$value->nick}}</td>
                            <td>{{$value->phone}}</td>
                            <td>{{$value->email}}</td>
                          </tr>
                          @endforeach
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
                {{ $my_users->links() }}
              </div>
            </div>
          </div>
        </div>

      </div>

      <!--查看详情 -->
      <div class="modal fade" style="z-index='9999'" id="demoModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
        <div class="modal-dialog" role="document">

          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
                <h4 style="margin-left:10px; font-weight:bold;">设置权限</h4>
              </div>

              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">开代理账户
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">新建模板
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">生成安装包
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">修改安装包
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">生成系统
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">修改系统
                  </label>
                </div>

              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
                <button type="button" class="btn btn-default">取消</button>

              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" style="z-index='9999'" id="demoModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="margin-left:10px; font-weight:bold; ">代理客户详细信息</h4>
              </div>
              <div class="modal-body">
                <div class="container col-lg-12">
                  <label for="exampleInputEmail1">账号</label><br>
                  <input type="text" class="form-control" placeholder="">
                </div><br/>
                <div class="container col-lg-12">
                  <label for="exampleInputEmail1">姓名</label><br>
                  <input type="useranme" class="form-control" id="usenanme" placeholder="">
                </div><br/>
                <div class="container col-lg-12">
                  <label for="exampleInputEmail1">电话</label><br>
                  <input type="iphone" class="form-control" id="iphone" placeholder="">
                </div><br/>
                <div class="container col-lg-12">
                  <label for="exampleInputEmail1">邮箱</label><br>
                  <input type="email" class="form-control" id="email" placeholder="">
                </div>
                <div class="container col-lg-12">
                  <label>户主</label><br>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="container col-lg-12">
                  <label>开户行</label><br>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="container col-lg-12">
                  <label>支行</label><br>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="container col-lg-12">
                  <label>卡号</label><br>
                  <input type="text" class="form-control" placeholder="">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
                <button type="button" class="btn btn-default">取消</button>
              </div>
            </div>
          </div>
        </div>



      </div>


      @endsection
