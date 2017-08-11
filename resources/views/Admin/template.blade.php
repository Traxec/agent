@extends('Layout.admin')

@section('title','添加模板')

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
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#demoModal">添加模板</button>
        <br/><br/>

        <table class="table table-border table-bordered table-hover table-bg">
            <thead>
            <tr>
                <th scope="col" colspan="8">模板列表</th>
            </tr>
            <tr class="text-c">
                <th width="40">模板编号</th>
                <th width="40">模板名称</th>
                <th width="40">模板价格(/月)</th>
                <th width="40">功能</th>
            </tr>
            </thead>
            <tbody>
            <?php $a = 0 ?>
            @foreach($template as $key => $value)
                <?php $a++ ?>
                <tr class="text-c">
                    <input type="hidden" name="id" value="{{$value->id}}">
                    <td>{{$a}}</td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->price}}</td>
                    <td>
                        <a title="删除" href="javascript:;" onclick="admin_role_del(this,{{$value->id}})" class="ml-5"
                           style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;删除</i></a></td>
                </tr>
            @endforeach
            </tbody>
            <input type="hidden" name="csrf-token" content="{{ csrf_token() }}">
        </table>
        {{ $template->links() }}
        <!-- 添加模板 -->
        <div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog"
             aria-labelledby="myMaodalLabel">
            <form action="{{action('admin\templateController@insert')}}" method="post">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">模板编号</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container col-lg-12">
                                <label for="exampleInputEmail1">模板名称</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="">
                            </div>
                            <br/>
                            <div class="container col-lg-12">
                                <label for="exampleInputEmail1">模板价格</label>
                                <input type="text" name="price" class="form-control" id="price" placeholder="">
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

    <script type="text/javascript">
        /*模板-角色-添加*/
        /*模板-角色-删除*/
        function admin_role_del(obj, id) {
            layer.confirm('模板删除须谨慎，确认要删除吗？', function (index) {
                $.ajax({
                    type: 'POST',
                    url: '{{action('admin\templateController@delete')}}',
                    dataType: 'json',
                    data: {
                        _token: $('input[name="csrf-token"]').attr('content'),
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
