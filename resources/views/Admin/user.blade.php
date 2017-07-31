 @extends('Layout.admin')

@section('title','普通用户列表')

@section('hidden')
@endsection

@section('content')
@inject('judge', 'App\Http\Controllers\admin\adminController')
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
			@if($judge->judge_keys(session('id'))['user']==1)
			<button type="button" class="btn btn-default col-lg-2" data-toggle="modal" data-target="#demoModal">添加用户
			</button>
			@endif
			<button type="button" id="role" class="btn btn-default col-lg-2 col-offset-1" data-toggle="modal"
					data-target="#demoModal3">修改普通用户权限
			</button>
			<button type="button" id="roles" class="btn btn-default col-lg-2 col-offset-1" data-toggle="modal"
					data-target="#demoModal4">修改代理商权限
			</button>
			<br/><br/>
		</div>
		<table class="table table-border table-bordered table-hover table-bg">
			<thead>
			<tr>
				<th scope="col" colspan="15">普通用户列表</th>
			</tr>
			<tr class="text-c">
				<th width="40">客户编号</th>
				<th width="40">目录树</th>
				<th width="40">用户名</th>
				<th width="40">客户名称</th>
				<th width="40">联系方式</th>
				<th width="40">邮箱</th>
				<th width="40">开户行</th>
				<th width="40">支行</th>
				<th width="40">银行账户</th>
				<th width="40">户主</th>
				<th width="40">功能</th>
			</tr>
			</thead>
			<tbody>
				<?php $a = 0 ?>
			@foreach($user as $key => $value)
			<?php $a++ ?>
			<tr class="text-c">
				<td>{{ $a }}</td>
				<td>{{ $value->path }}</td>
				<td>{{ $value->username}}</td>
				<td>{{ $value->nick }}</td>
				<td>{{ $value->phone }}</td>
				<td>{{ $value->email }}</td>
				<td>{{ $value->b_bank }}</td>
				<td>{{ $value->b_branch }}</td>
				<td>{{ $value->b_account }}</td>
				<td>{{ $value->b_master }}</td>
				<input type="hidden" name="id"  value="{{ $value->id }}">
				<td>
					<button type="button" class="btn btn-primary btn-sm edit" data-toggle="modal" data-target="#demoModal2">修改角色</button>

					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal3">修改权限</button>&nbsp;
					<a title="删除" href="javascript:;" onclick="user_role_del(this,{{$value->id}})" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr>
		 @endforeach
			</tbody>
		</table>
    {{ $user->links() }}


		<!-- 添加角色 -->
		<div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog"
				 aria-labelledby="myMaodalLabel">
				<form action="{{action('admin\userController@add')}}" method="post">
						<div class="modal-dialog" role="document">
								<div class="modal-content">
										<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
																		aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">添加用户</h4>
										</div>
										<div class="modal-body">
												<div class="container col-lg-12">
														<label for="exampleInputEmail1">用户类型</label>
														<select class="form-control" name="type">
														  <option>普通用户</option>
														  <option>代理商</option>
														</select>
												</div>
												<div class="container col-lg-12">
														<label for="exampleInputEmail1">用户名</label>
														<input type="text" name="username" class="form-control" id="username" placeholder="">
												</div>
												<div class="container col-lg-12">
														<label for="exampleInputEmail1">用户名称</label>
														<input type="text" name="nick" class="form-control" id="nick" placeholder="">
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
		<div class="modal fade" style="z-index='9999'" id="demoModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
			<form action="{{action('admin\userController@update')}}" method="post">
				<div class="modal-dialog" role="document">
					<div class="modal-content" id="table2">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
										aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">修改角色</h4>
						</div>
						<div class="modal-body">
							<div class="container col-lg-12">
								<label for="exampleInputEmail1">用户名</label>
								<input type="hidden" class="form-control" name="id" />
								<input type="text" class="form-control" name="username" id="username" disabled />
							</div><br/>
							<div class="container col-lg-12">
								<label for="exampleInputEmail1">客户名称</label>
								<input type="text" class="form-control" name="nick" id="nick" placeholder="">
							</div><br/>
							<div class="container col-lg-12">
								<label for="exampleInputEmail1">联系方式</label>
								<input type="text" class="form-control" name="phone" id="phone" placeholder="">
							</div><br/>
							<div class="container col-lg-12">
								<label for="exampleInputEmail1">邮箱</label>
								<input type="text" class="form-control" name="email" id="email" placeholder="">
							</div><br/>
							<div class="container col-lg-12">
								<label for="exampleInputEmail1">开户行</label>
								<input type="text" class="form-control" name="b_bank" id="b_bank" placeholder="">
							</div><br/>
							<div class="container col-lg-12">
								<label for="exampleInputEmail1">支行</label>
								<input type="text" class="form-control" name="b_branch" id="b_branch" placeholder="">
							</div><br/>
							<div class="container col-lg-12">
								<label for="exampleInputEmail1">银行账户</label>
								<input type="text" class="form-control" name="b_account" id="b_account" placeholder="">
							</div><br/>
							<div class="container col-lg-12">
								<label for="exampleInputEmail1">户主</label>
								<input type="text" class="form-control" name="b_master" id="b_master" placeholder="">
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
		<!-- 修改普通权限 -->
		<div class="modal fade" style="z-index='9999'" id="demoModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
			<form action="{{ action('admin\roleController@update') }}" method="post">
				<div class="modal-dialog" role="document">
					<div id="table3" class="modal-content"><br/><br/>
						<div class="col-lg-12">
							<h3 class="col-md-offset-3">修改普通用户权限</h3>
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
		<!-- 修改代理商权限 -->
		<div class="modal fade" style="z-index='9999'" id="demoModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
			<form action="{{ action('admin\roleController@update') }}" method="post">
				<div class="modal-dialog" role="document">
					<div id="table4" class="modal-content"><br/><br/>
						<div class="col-lg-12">
							<h3 class="col-md-offset-3">修改代理商权限</h3>
						</div>
						<label class="checkbox-inline col-lg-4 col-offset-2">
							<input type="checkbox" name="agent" id="inlineCheckbox1" value="1"> 开代理账户
							<input type="hidden" name="id" value="2">
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



	<script>

        //调用修改页面数据
        $('.edit').click(function () {
            var id = $(this).parent().parent().find('input[name="id"]').val();
            $.ajax({
                type: 'post',
                url: "{{action('admin\userController@edit')}}",
                dataType: 'json',
                async: false,
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },
                success: function (data) {
                    $('#table2').children().find('input[name="id"]').val(data.id)
                    $('#table2').children().find('input[name="username"]').val(data.username)
                    $('#table2').children().find('input[name="nick"]').val(data.nick)
                    $('#table2').children().find('input[name="phone"]').val(data.phone)
                    $('#table2').children().find('input[name="email"]').val(data.email)
                    $('#table2').children().find('input[name="key"]').val(data.key)
                    $('#table2').children().find('input[name="b_bank"]').val(data.b_bank)
                    $('#table2').children().find('input[name="b_branch"]').val(data.b_branch)
                    $('#table2').children().find('input[name="b_account"]').val(data.b_account)
                    $('#table2').children().find('input[name="b_master"]').val(data.b_master)
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
        //调用修改权限数据
        $('#roles').click(function () {
            var id = $('#table4').find('input[name="id"]').val();
            $.ajax({
                type: 'post',
                url: "{{action('admin\roleController@show')}}",
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },
                success: function (data) {
                    data.agent == 1 ? $('#table4').find('input[name="agent"]').attr('checked', true) : $('#table4').find('input[name="agent"]').attr('checked', false);
                    data.template == 1 ? $('#table4').find('input[name="template"]').attr('checked', true) : $('#table4').find('input[name="template"]').attr('checked', false);
                    data.package_add == 1 ? $('#table4').find('input[name="package_add"]').attr('checked', true) : $('#table4').find('input[name="package_add"]').attr('checked', false);
                    data.package_update == 1 ? $('#table4').find('input[name="package_update"]').attr('checked', true) : $('#table4').find('input[name="package_update"]').attr('checked', false);
                    data.system_add == 1 ? $('#table4').find('input[name="system_add"]').attr('checked', true) : $('#table4').find('input[name="system_add"]').attr('checked', false);
                    data.system_update == 1 ? $('#table4').find('input[name="system_update"]').attr('checked', true) : $('#table4').find('input[name="system_update"]').attr('checked', false);
                },
                error: function (date) {
//                        alert('系统错误,请联系管理员')
                }
            })
        })
		/*管理员-角色-添加*/
		/*管理员-角色-删除*/
        function user_role_del(obj,id){
            layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
                $.ajax({
                    type: 'POST',
                    url: "{{ action('admin\userController@delete') }}",
                    dataType: 'json',
                    data: {
                        _token: "{{csrf_token()}}",
                        id: id,
                    },
                    success: function(data){
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!');
                    },
                    error:function(data) {
                        layer.msg('删除失败!');
                    },
                });
            });
        }
	</script>

@endsection
