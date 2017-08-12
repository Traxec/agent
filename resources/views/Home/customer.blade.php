@extends('Layout.home')

@section('title','客户系统管理')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>客户系统管理</h3>
              </div>


            </div>
            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>普通客户系统管理<small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>


                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Qty</th>
                                <th>账号</th>
                                <th>姓名</th>
                                <th>电话</th>
                                <th>邮箱</th>
                                <th>功能</th>
                              </tr>
                            </thead>


                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                 <!--生成系统 -->
                                <div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 style="margin-left:10px; font-weight:bold; ">生成系统</h4>
                            </div>
                            <div class="modal-body">

                             <form class="form-horizontal form-label-left">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">系统端口号 </label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input" value="123456">

                      </div>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">产品模板</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <select class="select2_multiple form-control" multiple="multiple">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                            <option>Option five</option>
                            <option>Option six</option>
                          </select>


                     </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >客户端标题名称</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="title">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端导航名称</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="title">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端服务器名称
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <textarea class="form-control" rows="5" placeholder="Five lines of information"></textarea>
                        </div>



                        <label class="control-label col-md-3 col-sm-3 col-xs-12">电话</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="phone">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">官网网址</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="web sites">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">邮箱</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="Email">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">地址</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="address">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">公司名称</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="title">
                        </div>



                        <label class="control-label col-md-3 col-sm-3 col-xs-12">140*140 bmp图片</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="fileupload fileupload-new" data-provides="fileupload">

                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">选择图片</span><span class="fileupload-exists">更换图片</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                                </div>
                            </div>
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">500*60 bmp图片</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="fileupload fileupload-new" data-provides="fileupload">

                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">选择图片</span><span class="fileupload-exists">更换图片</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                                </div>
                            </div>
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">128*128 ico图片</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="fileupload fileupload-new" data-provides="fileupload">

                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">选择图片</span><span class="fileupload-exists">更换图片</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                                </div>
                            </div>
                        </div>






                    </form>


                            </div>　　　　　　　
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">取消</button>
                                 <button type="submit" class="btn btn-success">生成系统</button>
                            </div>
                        </div>
                    </div>
         </div>

                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>

                                     <!--修改系统 -->
                                <div class="modal fade" style="z-index='9999'" id="demoModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 style="margin-left:10px; font-weight:bold; ">修改系统</h4><small>（剩余免费次数：5次）</small>
                            </div>
                            <div class="modal-body">

                             <form class="form-horizontal form-label-left">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">系统端口号 </label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input" value="123456">

                      </div>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">产品模板</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <select class="select2_multiple form-control" multiple="multiple">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                            <option>Option five</option>
                            <option>Option six</option>
                          </select>


                     </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >客户端标题名称</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="title">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端导航名称</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="title">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端服务器名称
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <textarea class="form-control" rows="5" placeholder="Five lines of information"></textarea>
                        </div>



                        <label class="control-label col-md-3 col-sm-3 col-xs-12">电话</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="phone">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">官网网址</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="web sites">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">邮箱</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="Email">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">地址</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="address">
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">公司名称</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" placeholder="title">
                        </div>



                        <label class="control-label col-md-3 col-sm-3 col-xs-12">140*140 bmp图片</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="fileupload fileupload-new" data-provides="fileupload">

                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">选择图片</span><span class="fileupload-exists">更换图片</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                                </div>
                            </div>
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">500*60 bmp图片</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="fileupload fileupload-new" data-provides="fileupload">

                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">选择图片</span><span class="fileupload-exists">更换图片</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                                </div>
                            </div>
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">128*128 ico图片</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="fileupload fileupload-new" data-provides="fileupload">

                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">选择图片</span><span class="fileupload-exists">更换图片</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                                </div>
                            </div>
                        </div>






                    </form>


                            </div>　　　　　　　
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">取消</button>
                                 <button type="submit" class="btn btn-success">修改系统</button>
                            </div>
                        </div>
                    </div>
         </div>
                                  <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>
                                    <!--系统设置 -->
                                <div class="modal fade" style="z-index='9999'" id="demoModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 style="margin-left:10px; font-weight:bold; ">系统设置</h4>
                            </div>
                            <div class="modal-body">

                             <form class="form-horizontal form-label-left">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">系统端口号</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" disabled="disabled" value="123.123.123.123:123" >



                      </div>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">系统价格（元）</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control"  value="" >

                        </div>



                        <label class="control-label col-md-3 col-sm-3 col-xs-12">起始时间 </label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" disabled="disabled" value="2017/07/01" >

                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12">到期时间 </label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" disabled="disabled" value="2017/09/09">

                        </div>



                        <label class="control-label col-md-3 col-sm-3 col-xs-12">结算方式</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <select class="select2_multiple form-control" multiple="multiple">
                            <option>1个月*元</option>
                            <option>3个月*元</option>
                            <option>6个月*元</option>
                            <option>12个月*元</option>

                          </select>
                        </div>


                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >缴费金额</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" disabled="disabled" value="10000" >


                      </div>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">系统状态</label>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-bottom:20px;">
                          <input type="text" class="form-control" disabled="disabled" value="正常" >

                        </div>








                    </form>


                            </div>　　　　　　　
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">取消</button>
                                 <button type="submit" class="btn btn-success">确定</button>
                            </div>
                        </div>
                    </div>
         </div>



                                   <!-- -->


                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>


                            </tbody>

                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>代理客户系统管理<small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>


                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">

                    </p>
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                                <th>Qty</th>
                                <th>账号</th>
                                <th>姓名</th>
                                <th>电话</th>
                                <th>邮箱</th>
                                <th>功能</th>
                              </tr>
                      </thead>
                      <!--查看详情 -->
                      <div class="modal fade" style="z-index='9999'" id="demoModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 style="margin-left:10px; font-weight:bold; ">代理客户详细信息</h4>
                            </div>
                            <div class="modal-body">
                            <div class="container col-lg-12">
                                    <label for="exampleInputEmail1">账号</label><br>

                                    <input type="text" class="form-control"  placeholder="">
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
                                    <label >户主</label><br>
                                    <input type="text" class="form-control"  placeholder="">
                            </div>
                             <div class="container col-lg-12">
                                    <label >开户行</label><br>
                                    <input type="text" class="form-control"  placeholder="">
                            </div>
                            <div class="container col-lg-12">
                                    <label >支行</label><br>
                                    <input type="text" class="form-control"  placeholder="">
                            </div>
                            <div class="container col-lg-12">
                                    <label >卡号</label><br>
                                    <input type="text" class="form-control"  placeholder="">
                            </div>

                            </div>　　　　　　　
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
                                <button type="button" class="btn btn-default">取消</button>
                            </div>
                        </div>
                    </div>
         </div>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>


                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">生成系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改系统</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal4">查看详情</button>
                                    <i type="button" class="fa fa-wrench" data-toggle="modal" data-target="#demoModal3"></i>

                                </td>

                              </tr>
                      <tbody>



                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


            </div>




          </div>

@endsection
