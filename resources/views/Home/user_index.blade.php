@extends('Layout.home')

@section('title','普通账户管理')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>客户账户管理</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
      

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>普通客户管理<small>Users</small></h2>
                    
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

							<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="demoModal">
                    				<div class="modal-dialog modal-sm">
                      					<div class="modal-content">

                        					<div class="modal-header">
                          					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                         					 </button>
                          						<h4 class="modal-title" id="myModalLabel2">提示</h4>
                        					</div>
                        						<div class="modal-body">
                          							<h4>确定升级为代理吗？</h4>
                          							<p>升级后客户名单将由普通客户管理转移到代理客户管理</p>
                        				</div>
                        				<div class="modal-footer">
                         				 <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                         					 <button type="button" class="btn btn-primary">确定</button>
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
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              <tr>
                                <td>1</td>
                                <td>600000</td>
                                <td>李四</td>
                                <td>13849523621</td>
                                <td>123@qq.com</td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">升级</button></td>

                              </tr>
                              
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