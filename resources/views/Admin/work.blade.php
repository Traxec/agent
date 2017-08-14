@extends('Layout.admin')

@section('title','工单')

@section('hidden')
@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            {{session('success')}}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            {{session('error')}}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div id="page-wrapper">
  <!-- <div class="cl pd-5 bg-1 bk-gray"> <span class="l"><a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加角色','admin_add.html','800')"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong>54</strong> 条</span> </div> -->
  <div class="x_title">
    <h2>工单管理 <small>处理工单信息</small></h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content col-lg-12">
        <table class="table table-border table-bordered table-hover table-bg">
            <thead>
              <tr>
                <th class="col-lg-1">序号</th>
                <th class="col-lg-1">用户名</th>
                <th class="col-lg-1">姓名</th>
                <th class="col-lg-1">系统端口号</th>
                <th class="col-lg-1">系统简称</th>
                <th class="col-lg-1">问题类型</th>
                <th class="col-lg-1">问题内容</th>
                <th class="col-lg-1">问题截图</th>
                <th class="col-lg-1">提交时间</th>
                <th class="col-lg-1">问题回复</th>
                <th class="col-lg-1">回复时间</th>
                <th class="col-lg-1">功能</th>
              </tr>
              <?php $a = 0 ?>
              @foreach($order as $orders)
              <?php $a++ ?>
              <tr>
                <td>{{$a}}</td>
                <td>{{$orders->username}}</td>
                <td>{{$orders->nick}}</td>
                <td>{{$orders->port}}</td>
                <td>{{$orders->system}}</td>
                <td>{{$orders->type}}</td>
                <td>{{$orders->content}}</td>
                <td><img width="50px" src="{{asset($orders->img)}}" /></td>
                <td>{{$orders->time}}</td>
                <td>{{$orders->recontent}}</td>
                <td>{{$orders->retime}}</td>
                <td>
                  <input type="hidden" id="id" name="id" value="{{$orders->id}}">
        					<button type="button" class="btn btn-primary btn-sm edit" data-toggle="modal" data-target="#demoModal2">工单回复</button>
                </td>
              </tr>
              @endforeach
            </thead>
          </table>
          {{$order->links()}}
  </div>
</div>
		<!-- 修改角色 -->
		<div class="modal fade" style="z-index='9999'" id="demoModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
			<form action="{{action('admin\workController@update')}}" method="post">
				<div class="modal-dialog" role="document">
					<div class="modal-content" id="table2">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
										aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">工单回复</h4>
						</div>
						<div class="modal-body">
							<div class="container col-lg-12">
								<label for="exampleInputEmail1">回复内容</label>
                <textarea name="recontent" rows="8" cols="70"></textarea>
								<input type="hidden" id="reid" class="form-control" name="id" />
							</div><br/>
						</div>　　　　　　　
						<div class="modal-footer">
						{{csrf_field()}}
							<button type="submit" class="btn btn-default">确定</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
						</div>
					</div>
				</div>
			</form>
		</div>
    <script type="text/javascript">
    $('.edit').click(function(){
      $('#reid').val($(this).parent().find('#id').val())
    })
    </script>
@endsection
