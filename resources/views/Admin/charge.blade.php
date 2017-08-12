@extends('Layout.admin')

@section('title','提现审核')

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

        <br/><br/>

        <table class="table table-border table-bordered table-hover table-bg">
          <form action="{{action('admin\capitalController@charge')}}">
            <thead>
            <tr>
                <th scope="col" colspan="12">提现审核列表</th>
            </tr>
            <tr class="text-c">
                <th width="40">序号</th>
                <th width="40">姓名</th>
                <th width="40">手机</th>
                <th width="40">邮箱</th>
                <th width="40">金额</th>
                <th width="40">时间</th>
                <th width="40">功能</th>
            </tr>
            </thead>
            <tbody>
              <?php $a=0 ?>
                @foreach( $c as $key=>$value)
              <?php $a++ ?>

                <tr class="text-c">
                    <input type="hidden" name="id" value="">
                    <td>{{$a}}</td>
                    <td>{{$value->nick}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->price}}</td>
                    <td>{{$value->time}}</td>
                    <td>
                      {!! $value->audit==1?'<span class="label label-success radius">已审核</span>':'<span class="label label-error radius">未审核</span>' !!}
                        <a href="{{url('admin/capital/audit').'?id='.$value->id}}" type="button" class="btn btn-primary btn-sm update" data-toggle="modal">审核</a>
                        &nbsp;
                        <a title="删除" href="javascript:;" onclick="char_role_del(this,{{$value->id}})" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
              				</td>
                </tr>
                @endforeach
            </tbody>
            <input type="hidden" name="csrf-token" content="">
        </table>
    </div>



    <script type="text/javascript">
        /*管理员-角色-添加*/
        /*管理员-角色-删除*/
        function char_role_del(obj, id) {
            layer.confirm('角色删除须谨慎，确认要删除吗？', function (index) {
                $.ajax({
                    type: 'POST',
                    url: '{{action('admin\capitalController@delete')}}',
                    dataType: 'json',
                    data: {
                        _token:"{{csrf_token()}}",
                        id: id,
                    },
                    success: function (data) {
                        $(obj).parents('tr').remove()
                        layer.msg('已删除!');
                    },
                    error: function (data) {
                        layer.msg('删除失败');
                    },
                });
            });
        }
    </script>


@endsection
