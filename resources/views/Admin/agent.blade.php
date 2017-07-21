@extends('Layout.admin')

@section('title','代理商列表')

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
		<div class="col-lg-6">
			<button type="button" class="btn btn-default col-lg-2" data-toggle="modal" data-target="#demoModal">添加代理商
			</button>
			<button type="button" id="role" class="btn btn-default col-lg-2 col-offset-1" data-toggle="modal"
					data-target="#demoModal3">修改代理商权限
			</button>
			<br/><br/>
		</div>
		<table class="table table-border table-bordered table-hover table-bg">
			<thead>
			<tr>
				<th scope="col" colspan="6">普通用户列表</th>
			</tr>
			<tr class="text-c">
				<th width="40">客户编号</th>
				<th width="40">客户名称</th>
				<th width="40">性别</th>
				<th width="40">联系方式</th>
				<th width="40">邮箱</th>
				<th width="40">地址</th>
				<th width="40">功能</th>
			</tr>
			</thead>
			<tbody>
			<tr class="text-c">
				<td>1</td>
				<td>admin</td>
				<td>男</td>
				<td>15138679371</td>
				<td>274951642@qq.com</td>
				<td>河南省郑州市</td>
				<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改角色</button>

					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal3">修改权限</button>&nbsp;
					<a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<tr class="text-c">
				<td>1</td>
				<td>admin</td>
				<td>男</td>
				<td>15138679371</td>
				<td>274951642@qq.com</td>
				<td>河南省郑州市</td>
				<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改角色</button>

					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal3">修改权限</button>
					<a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<tr class="text-c">
				<td>1</td>
				<td>admin</td>
				<td>男</td>
				<td>15138679371</td>
				<td>274951642@qq.com</td>
				<td>河南省郑州市</td>
				<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改角色</button>

					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal3">修改权限</button>
					<a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<tr class="text-c">
				<td>1</td>
				<td>admin</td>
				<td>男</td>
				<td>15138679371</td>
				<td>274951642@qq.com</td>
				<td>河南省郑州市</td>
				<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">修改角色</button>

					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal3">修改权限</button>&nbsp;
					<a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			</tbody>
		</table>

		<!-- 添加角色 -->
		<div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
									aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">客户编号</h4>
					</div>
					<div class="modal-body">
						　<div class="container col-lg-12">
							<label for="exampleInputEmail1">客户名称</label>
							<input type="usenanme" class="form-control" id="usenanme" placeholder="">
						</div><br/>
						<div class="container col-lg-12">
							<label for="exampleInputEmail1">联系方式</label>
							<input type="iphone" class="form-control" id="iphone" placeholder="">
						</div><br/>
						<div class="container col-lg-12">
							<label for="exampleInputEmail1">邮箱</label>
							<input type="email" class="form-control" id="email" placeholder="">
						</div><br/>
						<div class="container col-lg-12">
							<label for="exampleInputEmail1">客户地址</label>
							<input type="address" class="form-control" id="address" placeholder="">
						</div><br/><br/>
						<div>
							<label class="radio-inline">
								<label for="exampleInputEmail1">性别</label>　　　
								<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">男
							</label>
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">女
							</label>
						</div>
					</div>　　　　　　　
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
						<button type="button" class="btn btn-default">取消</button>
					</div>
				</div>
			</div>
		</div>
		<!-- 修改角色 -->
		<div class="modal fade" style="z-index='9999'" id="demoModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
									aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">客户编号</h4>
					</div>
					<div class="modal-body">
						　<div class="container col-lg-12">
							<label for="exampleInputEmail1">客户名称</label>
							<input type="usenanme" class="form-control" id="usenanme" placeholder="">
						</div><br/>
						<div class="container col-lg-12">
							<label for="exampleInputEmail1">联系方式</label>
							<input type="iphone" class="form-control" id="iphone" placeholder="">
						</div><br/>
						<div class="container col-lg-12">
							<label for="exampleInputEmail1">邮箱</label>
							<input type="email" class="form-control" id="email" placeholder="">
						</div><br/>
						<div class="container col-lg-12">
							<label for="exampleInputEmail1">客户地址</label>
							<input type="address" class="form-control" id="address" placeholder="">
						</div><br/><br/>
						<div>
							<label class="radio-inline">
								<label for="exampleInputEmail1">性别</label>　　　
								<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">男
							</label>
							<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">女
							</label>
						</div>
					</div>　　　　　　　
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
						<button type="button" class="btn btn-default">取消</button>
					</div>
				</div>
			</div>
		</div>
		<!-- 修改权限 -->
		<div class="modal fade" style="z-index='9999'" id="demoModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
			<form action="{{ action('admin\roleController@update') }}" method="post">
				<div class="modal-dialog" role="document">
					<div id="table3" class="modal-content"><br/><br/>
						<div class="col-lg-12">
							<h3 class="col-md-offset-3">修改权限</h3>
						</div>
						<label class="checkbox-inline col-lg-4 col-offset-2">
							<input type="checkbox" name="agent" id="inlineCheckbox1" value="1"> 开代理账户
							<input type="hidden" name="id" value="1">
						</label>
						<label class="checkbox-inline col-lg-4 col-offset-2">
							<input type="checkbox" name="template" id="inlineCheckbox1" value="1"> 新建模板
						</label>
						<br>
						<label class="checkbox-inline col-lg-4 col-offset-2">
							<input type="checkbox" name="package_add" id="inlineCheckbox3" value="1"> 生成安装包
						</label>
						<label class="checkbox-inline col-lg-4 col-offset-2">
							<input type="checkbox" name="package_update" id="inlineCheckbox4" value="1"> 修改安装包
						</label>
						<br>
						<label class="checkbox-inline col-lg-4 col-offset-2">
							<input type="checkbox" name="system_add" id="inlineCheckbox5" value="1"> 生成系统
						</label>
						<label class="checkbox-inline col-lg-4 col-offset-2">
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


	<script>
        //调用修改页面数据
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
        //调用修改权限数据
        $('#role').click(function () {
            var id = $('#table3').find('input[name="id"]').val();
            $.ajax({
                type: 'post',
                url: "{{action('admin\roleController@show')}}",
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },
                success: function (data) {
                    data.agent == 1 ? $('#table3').find('input[name="agent"]').attr('checked', true) : $('#table3').find('input[name="agent"]').attr('checked', false);
                    data.template == 1 ? $('#table3').find('input[name="template"]').attr('checked', true) : $('#table3').find('input[name="template"]').attr('checked', false);
                    data.package_add == 1 ? $('#table3').find('input[name="package_add"]').attr('checked', true) : $('#table3').find('input[name="package_add"]').attr('checked', false);
                    data.package_update == 1 ? $('#table3').find('input[name="package_update"]').attr('checked', true) : $('#table3').find('input[name="package_update"]').attr('checked', false);
                    data.system_add == 1 ? $('#table3').find('input[name="system_add"]').attr('checked', true) : $('#table3').find('input[name="system_add"]').attr('checked', false);
                    data.system_update == 1 ? $('#table3').find('input[name="system_update"]').attr('checked', true) : $('#table3').find('input[name="system_update"]').attr('checked', false);
                },
                error: function (date) {
//                        alert('系统错误,请联系管理员')
                }
            })
        })
		/*管理员-角色-添加*/
		/*管理员-角色-删除*/
        function admin_role_del(obj,id){
            layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
                $.ajax({
                    type: 'POST',
                    url: '',
                    dataType: 'json',
                    success: function(data){
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!',{icon:1,time:1000});
                    },
                    error:function(data) {
                        console.log(data.msg);
                    },
                });
            });
        }
	</script>

@endsection
