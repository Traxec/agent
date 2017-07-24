@extends('Layout.home')

@section('title','邮件收件箱')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>邮件</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
      

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>收件箱<small>Inbox</small></h2>
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
                                <th>发送时间</th>
                                <th>发送状态</th>
                                <th>收件箱</th>
                                <th>邮件内容</th>
                                <th>功能</th>
                              </tr>
                            </thead>
                          <div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 style="margin-left:10px; font-weight:bold; ">邮件详情</h4>
                            </div>
                            <div class="modal-body">
                            <div class="container col-lg-12">
                                     邮件模板
                              </div>
                           

                            </div>　　　　　　　
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
                                
                            </div>
                        </div>
                    </div>
         </div>
                          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="demoModal2">
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
                          
                          <td>2017/7/20 10:25</td>
                          <td><i class="fa fa-check"></i></td>
                          <td>123@qq.com</td>
                          <td >balabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabala</td>
                          <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">查看详情</button>
                              <i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#demoModal2"></i>
                          </td>
                        
                        </tr>
                        <tr>
                          
                          <td>2017/7/20 10:25</td>
                          <td><i class="fa fa-close"></i></td>
                          <td>123@qq.com</td>
                          <td >balabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabala</td>
                          <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">查看详情</button>
                              <i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#demoModal2"></i>
                          </td>
                        
                        </tr>
                        <tr>
                          
                          <td>2017/7/20 10:25</td>
                          <td><i class="fa fa-check"></i></td>
                          <td>123@qq.com</td>
                          <td >balabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabala</td>
                          <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">查看详情</button>
                              <i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#demoModal2"></i>
                          </td>
                        
                        </tr>
                        <tr>
                          
                          <td>2017/7/20 10:25</td>
                          <td><i class="fa fa-close"></i></td>
                          <td>123@qq.com</td>
                          <td >balabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabala</td>
                          <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">查看详情</button>
                              <i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#demoModal2"></i>
                          </td>
                        
                        </tr>
                        <tr>
                          
                          <td>2017/7/20 10:25</td>
                          <td><i class="fa fa-check"></i></td>
                          <td>123@qq.com</td>
                          <td >balabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabala</td>
                          <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">查看详情</button>
                              <i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#demoModal2"></i>
                          </td>
                        
                        </tr>
                        <tr>
                          
                          <td>2017/7/20 10:25</td>
                          <td><i class="fa fa-close"></i></td>
                          <td>123@qq.com</td>
                          <td >balabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabala</td>
                          <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">查看详情</button>
                              <i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#demoModal2"></i>
                          </td>
                        
                        </tr>
                        <tr>
                          
                          <td>2017/7/20 10:25</td>
                          <td><i class="fa fa-check"></i></td>
                          <td>123@qq.com</td>
                          <td >balabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabala</td>
                          <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">查看详情</button>
                              <i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#demoModal2"></i>
                          </td>
                        
                        </tr>
                        <tr>
                          
                          <td>2017/7/20 10:25</td>
                          <td><i class="fa fa-close"></i></td>
                          <td>123@qq.com</td>
                          <td >balabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabala</td>
                          <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">查看详情</button>
                              <i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#demoModal2"></i>
                          </td>
                        
                        </tr>
                        <tr>
                          
                          <td>2017/7/20 10:25</td>
                          <td><i class="fa fa-check"></i></td>
                          <td>123@qq.com</td>
                          <td >balabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabala</td>
                          <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">查看详情</button>
                              <i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#demoModal2"></i>
                          </td>
                        
                        </tr>
                        <tr>
                          
                          <td>2017/7/20 10:25</td>
                          <td><i class="fa fa-close"></i></td>
                          <td>123@qq.com</td>
                          <td >balabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabalabala</td>
                          <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">查看详情</button>
                              <i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#demoModal2"></i>
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
              
            </div>
            

              
            </div>
            
                

           
          </div>

@endsection