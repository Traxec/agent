@extends('Layout.home')

@section('title','工单记录')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>缴费管理</h3>
              </div>


            </div>
            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>工单记录 <small>查询工单记录发布信息</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">


                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>序号</th>
                                <th>系统端口号</th>
                                <th>系统简称</th>
                                <th>问题类型</th>
                                <th>问题内容</th>
                                <th>问题截图</th>
                                <th>提交时间</th>
                              </tr>
                              <?php $a = 0 ?>
                              @foreach($order as $order)
                              <?php $a++ ?>
                              <tr>
                                <td>{{$a}}</td>
                                <td>{{$order->port}}</td>
                                <td>{{$order->system}}</td>
                                <td>{{$order->type}}</td>
                                <td>{{$order->content}}</td>
                                <td><img width="50px" src="{{asset($order->img)}}" /></td>
                                <td>{{$order->time}}</td>
                              </tr>
                              @endforeach
                            </thead>
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
