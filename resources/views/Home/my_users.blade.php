@extends('Layout.home')

@section('title','我的客户')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>我的客户</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <!-- <h2>代理账户审核<small>Users</small></h2> -->
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                  <form class="" action="" method="post">
                  </form>
                      <table id="datatable-keytable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>序号</th>
                            <th>目录树</th>
                            <th>用户名</th>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>邮箱</th>
                            <th>功能</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $a = 0 ?>
                          @foreach ($my_users as $key => $value)
                          <?php $a++ ?>
                          <tr>
                            <td>{{$a}}</td>
                            <td>{{$value->path}}</td>
                            <td>{{$value->username}}</td>
                            <td>{{$value->nick}}</td>
                            <td>{{$value->phone}}</td>
                            <td>{{$value->email}}</td>
                            <input type="hidden" name="id" value="{{$value->id}}">
                            <td>
                                <button type="button" class="btn btn-primary btn-sm role" id='ccc' data-toggle="modal" data-target="#demoModal4">设置权限</button>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                {{ $my_users->links() }}
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- 修改普通权限 -->
      <div class="modal fade" style="z-index='9999'" id="demoModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
        <form action="{{ action('admin\roleController@update') }}" method="post">
          <div class="modal-dialog" role="document">
            <div id="table3" class="modal-content table3" style="padding-left:160px"><br/><br/>
              <div class="col-lg-12">
                <h3 class="col-lg-offset-1">修改普通用户权限</h3>
              </div>
              <label class="checkbox-inline col-lg-4 col-offset-1">
                <input type="checkbox" name="agent" id="inlineCheckbox1" value="1"> 开代理账户
                <input type="hidden" name="id" value="">
              </label>
              <label class="checkbox-inline col-lg-4 col-offset-1">
                <input type="checkbox" name="template" id="inlineCheckbox1" value="1"> 新建模板
              </label>
              <br>
              <label class="checkbox-inline col-lg-4 col-offset-1">
                <input type="checkbox" name="package_add" id="inlineCheckbox3" value="1"> 生成安装包
              </label>
              <label class="checkbox-inline col-lg-4 col-offset-1">
                <input type="checkbox" name="package_update" id="inlineCheckbox4" value="1"> 修改安装包
              </label>
              <br>
              <label class="checkbox-inline col-lg-4 col-offset-1">
                <input type="checkbox" name="system_add" id="inlineCheckbox5" value="1"> 生成系统
              </label>
              <label class="checkbox-inline col-lg-4 col-offset-1">
                <input type="checkbox" name="system_update" id="inlineCheckbox6" value="1"> 修改系统
              </label>　　　　　　　　　　　　　　
              <div class="modal-footer">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-default">确定</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      </div>
      <script type="text/javascript">
        //调用修改权限数据
        $('.role').click(function () {
            var id = $(this).parent().parent().find('input[name="id"]').val();
            $.ajax({
                type: 'post',
                url: "{{action('admin\roleController@show')}}",
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },
                success: function (data) {
                    data.agent == 1 ? $('.table3').find('input[name="agent"]').attr('checked', true) : $('.table3').find('input[name="agent"]').attr('checked', false);
                    data.template == 1 ? $('.table3').find('input[name="template"]').attr('checked', true) : $('.table3').find('input[name="template"]').attr('checked', false);
                    data.package_add == 1 ? $('.table3').find('input[name="package_add"]').attr('checked', true) : $('.table3').find('input[name="package_add"]').attr('checked', false);
                    data.package_update == 1 ? $('.table3').find('input[name="package_update"]').attr('checked', true) : $('.table3').find('input[name="package_update"]').attr('checked', false);
                    data.system_add == 1 ? $('.table3').find('input[name="system_add"]').attr('checked', true) : $('.table3').find('input[name="system_add"]').attr('checked', false);
                    data.system_update == 1 ? $('.table3').find('input[name="system_update"]').attr('checked', true) : $('.table3').find('input[name="system_update"]').attr('checked', false);
                    $('.table3').find('input[name="id"]').val(id)
                },
                error: function (date) {
//                        alert('系统错误,请联系管理员')
                }
            })
        })
		/*管理员-角色-删除*/
      </script>

      @endsection
