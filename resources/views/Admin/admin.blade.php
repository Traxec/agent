@extends('Layout.admin')

@section('title','管理员列表')

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
    <div id="page-wrapper">
        <!-- <div class="cl pd-5 bg-1 bk-gray"> <span class="l"><a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加角色','admin_add.html','800')"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong>54</strong> 条</span> </div> -->
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#demoModal">添加管理员</button>
        <br/><br/>

        <table class="table table-border table-bordered table-hover table-bg">
            <thead>
            <tr>
                <th scope="col" colspan="8">管理员列表</th>
            </tr>
            <tr class="text-c">
                <th width="40">管理员编号</th>
                <th width="40">用户名</th>
                <th width="40">管理员名称</th>
                <th width="40">手机</th>
                <th width="40">邮箱</th>
                <th width="40">功能</th>
            </tr>
            </thead>
            <tbody>
            <?php $a = 0 ?>
            @foreach($admin as $key => $value)
                <?php $a++ ?>
                <tr class="text-c">
                    <input type="hidden" name="id" value="{{$value->id}}">
                    <td>{{$a}}</td>
                    <td>{{$value->username}}</td>
                    <td>{{$value->nick}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->email}}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm update" data-toggle="modal"
                                data-target="#demoModal2">
                            编辑
                        </button>

                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#demoModal3">
                            修改权限
                        </button>
                        &nbsp;
                        <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5"
                           style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                </tr>
            @endforeach
            </tbody>
            <input type="hidden" name="csrf-token" content="{{ csrf_token() }}">
        </table>
        <script>
            $('.update').click(function () {
                var id = $(this).parent().parent().find('input[name="id"]').val();
                $.ajax({
                    type: 'post',
                    url: "{{action('admin\adminController@edit')}}",
                    dataType: 'json',
                    data: {
                        _token: $('input[name="csrf-token"]').attr('content'),
                        id: id,
                    },
                    success: function (data) {
                        $('#table2').children().find('input[name="id"]').val(data.id)
                        $('#table2').children().find('input[name="nick"]').val(data.nick)
                        $('#table2').children().find('input[name="phone"]').val(data.phone)
                        $('#table2').children().find('input[name="email"]').val(data.email)
                    },
                    error: function (date) {
                        alert('系统错误,请联系管理员')
                    }
                })
            })
        </script>

        <!-- 添加角色 -->
        <div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog"
             aria-labelledby="myMaodalLabel">
            <form action="{{action('admin\adminController@add')}}" method="post">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">管理员编号</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container col-lg-12">
                                <label for="exampleInputEmail1">用户名</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="">
                            </div>
                            <div class="container col-lg-12">
                                <label for="exampleInputEmail1">管理员名称</label>
                                <input type="text" name="nick" class="form-control" id="nick" placeholder="">
                            </div>
                            <br/>
                            <div class="container col-lg-12">
                                <label for="exampleInputEmail1">联系方式</label>
                                <input type="iphone" name="phone" class="form-control" id="phone" placeholder="">
                            </div>
                            <br/>
                            <div class="container col-lg-12">
                                <label for="exampleInputEmail1">邮箱</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="">
                            </div>
                            <br/>
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
        <!-- 修改角色 -->
        <div class="modal fade" style="z-index='9999'" id="demoModal2" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel2">
            <form action="{{action('admin\adminController@update')}}" method="post">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">管理员编号</h4>
                        </div>
                        <div class="modal-body" id="table2">
                            <div class="container col-lg-12">
                                <label for="exampleInputEmail1">管理员名称</label>
                                <input type="hidden" name="id" class="form-control" placeholder="">
                                <input type="text" name="nick" class="form-control" id="nick" placeholder="">
                            </div>
                            <br/>
                            <div class="container col-lg-12">
                                <label for="exampleInputEmail1">联系方式</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="">
                            </div>
                            <br/>
                            <div class="container col-lg-12">
                                <label for="exampleInputEmail1">邮箱</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="">
                            </div>
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
        <!-- 修改权限 -->
        <div class="modal fade" style="z-index='9999'" id="demoModal3" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel3">
            <div class="modal-dialog" role="document">
                <div class="modal-content"><br/><br/>
                    <div class="col-lg-12">
                        <h3 class="col-md-offset-3">修改权限</h1>
                    </div>
                    &nbsp;&nbsp;
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 开代理账户
                    </label>　　　　　　　　　　　　　　　
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> 新建模板
                    </label>　　　　　　　　
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> 生成安装包
                    </label>　　　　　　　　　　　　　　　
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox4" value="option1"> 修改安装包
                    </label>　　　　　　　　　　　　
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox5" value="option2"> 生成系统
                    </label>　　　　　　　　　　　　　　　　
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox6" value="option3"> 修改系统
                    </label>　　　　　　　
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
                        <button type="button" class="btn btn-default">取消</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
        /*管理员-角色-添加*/
        /*管理员-角色-删除*/
        function admin_role_del(obj, id) {
            layer.confirm('角色删除须谨慎，确认要删除吗？', function (index) {
                $.ajax({
                    type: 'POST',
                    url: '',
                    dataType: 'json',
                    success: function (data) {
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!', {icon: 1, time: 1000});
                    },
                    error: function (data) {
                        console.log(data.msg);
                    },
                });
            });
        }
    </script>


@endsection