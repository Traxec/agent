@extends('Layout.admin')

@section('title','用户列表')

@section('hidden')
@endsection

@section('content')
<div id="page-wrapper">
		<!-- <div class="cl pd-5 bg-1 bk-gray"> <span class="l"><a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加角色','admin_add.html','800')"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong>54</strong> 条</span> </div> -->
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#demoModal">添加</button><br/><br/>

		<table class="table table-border table-bordered table-hover table-bg">
			<thead>
				<tr>
					<th scope="col" colspan="8">系统管理</th>
				</tr>
				<tr class="text-c">
					<th width="20">编号</th>
					<th width="40">用户ID</th>
					<th width="40">系统端口号</th>
					<th width="40">免费次数</th>
					<th width="40">超出价格</th>
					<th width="40">功能</th>
				</tr>
			</thead>
			<tbody>
				<tr class="text-c">
					<td>1</td>
					<td>10010</td>
					<td>400</td>
					<td>3</td>
					<td>100</td>
					<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">编辑</button>


					<a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<tr class="text-c">
					<td>1</td>
					<td>10010</td>
					<td>400</td>
					<td>3</td>
					<td>100</td>

					<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">编辑</button>


					<a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<tr class="text-c">
					<td>1</td>
					<td>10010</td>
					<td>400</td>
					<td>3</td>
					<td>100</td>

					<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">编辑</button>


					<a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<tr class="text-c">
					<td>1</td>
					<td>10010</td>
					<td>400</td>
					<td>3</td>
					<td>100</td>

					<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">编辑</button>

					<a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			</tbody>
		</table>

		<!-- 添加 -->
		 <div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">添加</h4>
                            </div>
                            <div class="modal-body">
                            　<div class="container col-lg-12">
                                    <label for="exampleInputEmail1">用户ID</label>
                                    <input type="usenanme" class="form-control" id="usenanme" placeholder="">
                              </div><br/>
                              <div class="container col-lg-12">
                                <label for="exampleInputEmail1">联系统端口号</label>
                                <input type="iphone" class="form-control" id="iphone" placeholder="">
                              </div><br/>
                              <div class="container col-lg-12">
                                <label for="exampleInputEmail1">免费次数</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                              </div><br/>
                              <div class="container col-lg-12">
                                <label for="exampleInputEmail1">超出价格</label>
                                <input type="address" class="form-control" id="address" placeholder="">
                              </div>
                            </div><br/><br/><br/>　　　　　　　
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
                                <h4 class="modal-title" id="myModalLabel">修改</h4>
                            </div>
                            <div class="modal-body">

                              <div class="container col-lg-12">
                                <label for="exampleInputEmail1">用户ID</label>
                                <input type="iphone" class="form-control" id="iphone" placeholder="">
                              </div><br/>
                              <div class="container col-lg-12">
                                <label for="exampleInputEmail1">系统端口号</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                              </div><br/>
                              <div class="container col-lg-12">
                                <label for="exampleInputEmail1">免费次数</label>
                                <input type="address" class="form-control" id="address" placeholder="">
                              </div><br/><br/><br/><br/>
                              <div class="container col-lg-12">
                                <label for="exampleInputEmail1">超出价格</label>
                                <input type="address" class="form-control" id="address" placeholder="">
                              </div><br/><br/>
                            </div>　　　　　　　
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
