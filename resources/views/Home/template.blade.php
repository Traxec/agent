@extends('Layout.home')

@section('title','模板管理')

@section('hidden')
@endsection

@section('content')
    <div class="right_col" role="main">
        <!-- <div class="cl pd-5 bg-1 bk-gray"> <span class="l"><a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加角色','admin_add.html','800')"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong>54</strong> 条</span> </div> -->
        <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#demoModal">添加模板</button> -->
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
                <th width='40'>代理模板价格(/月)</th>
                <th width="40">功能</th>
            </tr>
            </thead>
            <tbody>
            <?php $a = 0 ?>
            @foreach($res as $key => $value)
                <?php $a++ ?>
                <tr class="text-c">
                  <input type="hidden" name="id" value="{{$value->id}}">
                  <td>{{$a}}</td>
                  <td>{{$value->title}}</td>
                  <td>{{$value->price}}</td>
                  <td>
                  @foreach($my_res as $k => $v)
                  {!! $v->title==$value->title?"$v->price":""; !!}
                  @endforeach
                  </td>
                  <td>
                    <input type="hidden" name="title" value="{{$value->title}}">
                    <button type="button" class="btn btn-primary btn-sm update" data-toggle="modal" data-target="#demoModal">设置代理价格</button>
                  </td>
                </tr>
            @endforeach
            </tbody>
            <input type="hidden" name="csrf-token" content="{{ csrf_token() }}">
        </table>
        <!-- 添加模板 -->
        <div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog"
             aria-labelledby="myMaodalLabel">
            <form action="{{action('home\templateController@agent_template')}}" method="post">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismisprices="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title" id="myModalLabel">请设置代理系统价格</h2>
                        </div>
                        <div class="modal-body">
                            <div class="container col-lg-12">
                                <label for="exampleInputEmail1">系统价格</label>
                                <input type="text" name="price" class="form-control" id="price" placeholder="" onkeyup="this.value=this.value.replace(/[\D]/g,'');">
                                <input type="hidden" name="title" class="form-control" id="title" placeholder="">
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

  $('.update').click(function() {
    var title = $(this).parent().parent().find("input[name='title']").val();
    $('#title').val($(this).parent().find("input[name='title']").val())
    $.ajax({
      type: 'post',
      url: "{{action('home\templateController@agent_template_show')}}",
      dataType: 'json',
      async:false,
      data: {
        _token: "{{ csrf_token() }}",
        title: title,
      },
      success: function(data) {
        $('#price').val(data.price)
      },

    })
  })
        /*模板-角色-添加*/
        /*模板-角色-删除*/
        function admin_role_del(obj, id) {
            layer.confirm('角色删除须谨慎，确认要删除吗？', function (index) {
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
