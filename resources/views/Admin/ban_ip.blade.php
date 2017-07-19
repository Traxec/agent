@extends('Layout.admin')

@section('title','客服信息')

@section('hidden')
@endsection

@section('content')
    <div id="page-wrapper">
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
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#demoModal">添加</button>
        <br/><br/>

        <table class="table table-border table-bordered table-hover table-bg">
            <thead>
            <tr>
                <th scope="col" colspan="8">签到信息</th>
            </tr>
            <tr class="text-c">
                <th width="40">编号</th>
                <th width="60">ip</th>
                <th width="40">功能</th>
            </tr>
            </thead>
            <tbody>
            <?php $a = 0 ?>
            @foreach($ip as $key => $value)
                <?php $a++ ?>
                <tr class="text-c">
                    <td>{{ $a }}</td>
                    <td>{{ $value->ip }}</td>
                    <td>
                        <a title="删除" href="javascript:;" onclick="admin_role_del(this,{{ $value->id }})" class="ml-5"
                           style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i>删除</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- 添加ip -->
        <div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{action('admin\signController@add_ban_ip')}}" method="post">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">添加</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container col-lg-12">
                                <label for="exampleInputEmail1">ip</label>
                                <input type="text" class="form-control" name='ip'>
                            </div>
                            <br/>
                            <br/><br/>
                        </div>
                        　　<br/><br/><br/><br/>　　　　　
                        {{ csrf_field() }}
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default">确定</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
        /*管理员-角色-添加*/
        /*管理员-角色-删除*/
        function admin_role_del(obj, id) {
            layer.confirm('确认要删除吗？', function (index) {
                $.ajax({
                    type: 'POST',
                    url: "{{ action('admin\signController@del_ban_ip') }}",
                    dataType: 'json',
                    data:{
                        _token:"{{ csrf_token() }}",
                        id:id,
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
        // /*管理员-停用*/
        // function admin_stop(obj,id){
        //     layer.confirm('确认要停用吗？',function(index){
        //         //此处请求后台程序，下方是成功后的前台处理……

        //         $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
        //         $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">欠费</span>');
        //         $(obj).remove();
        //         layer.msg('已停用!',{icon: 5,time:1000});
        //     });
        // }

        // 管理员-启用
        // function admin_start(obj,id){
        //     layer.confirm('确认要启用吗？',function(index){
        //         //此处请求后台程序，下方是成功后的前台处理……


        //         $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
        //         $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">正常</span>');
        //         $(obj).remove();
        //         layer.msg('已启用!', {icon: 6,time:1000});
        //     });
        // }
    </script>


@endsection

