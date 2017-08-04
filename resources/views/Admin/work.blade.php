@extends('Layout.admin')

@section('title','工单')

@section('hidden')
@endsection

@section('content')
<div id="page-wrapper">
  <!-- <div class="cl pd-5 bg-1 bk-gray"> <span class="l"><a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加角色','admin_add.html','800')"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong>54</strong> 条</span> </div> -->
  <div class="x_title">
    <h2>工单记录 <small>查询工单记录发布信息</small></h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content col-lg-12">
        <table class="table table-border table-bordered table-hover table-bg">
            <thead>
              <tr>
                <th class="col-lg-1">序号</th>
                <th class="col-lg-1">用户</th>
                <th class="col-lg-1">系统端口号</th>
                <th class="col-lg-1">系统简称</th>
                <th class="col-lg-1">问题类型</th>
                <th class="col-lg-1">问题内容</th>
                <th class="col-lg-1">问题截图</th>
                <th class="col-lg-1">提交时间</th>
              </tr>
              <?php $a = 0 ?>
              @foreach($order as $order)
              <?php $a++ ?>
              <tr>
                <td>{{$a}}</td>
                <td>{{$order->port}}</td>
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
@endsection
