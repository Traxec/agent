@extends('Layout.home')

@section('title','我的系统')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>系统管理</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">生成链接</button>
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
                            <th>账号</th>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>邮箱</th>
                            <th>功能</th>
                          </tr>
                        </thead>
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="demoModal5">
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
                          <tr>
                            <td>1</td>
                            <td>600000</td>
                            <td>李四</td>
                            <td>13849523621</td>
                            <td>123@qq.com</td>
                            <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal3">审核</button>
                              <div class="modal fade" style="z-index='9999'" id="demoModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                        <h4 style="margin-left:10px; font-weight:bold; ">审核</h4>
                                      </div>
                                      <div class="modal-body">
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
                                        <label style="margin-left:11px;">审核结果</label><br>
                                        <select style="margin-left:11px; " class="select2_single form-control" tabindex="-1">
                                          <option value="AK">通过</option>
                                          <option  value="HI">不通过</option>
                                        </select>
                                        <div class="container col-lg-12">
                                          <label >账号</label><br>
                                          <input type="text" class="form-control"  placeholder="">
                                        </div>
                                        <div class="container col-lg-12">
                                          <label >密码</label><br>
                                          <input type="text" class="form-control"  placeholder="">
                                        </div>
                                        <div class="container col-lg-12">
                                          <label >审核不通过理由</label><br>
                                          <input type="text" class="form-control"  placeholder="">
                                        </div>
                                        <div class="checkbox" style="margin-left:11px;">
                                          <label>
                                            <input type="checkbox" value="">邮箱：123@qq.com
                                          </label>
                                        </div>
                                        <div class="checkbox" style="margin-left:11px;">
                                          <label>
                                            <input type="checkbox" value="">电话：163244563223
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
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">设置权限</button>
                                <i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#demoModal5"></i>
                                <!--设置权限 -->
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
                                </td>



                            </tbody>

                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>




        </div>


        @endsection
