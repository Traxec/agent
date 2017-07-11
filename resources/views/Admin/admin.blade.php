@extends('Layout.admin')

@section('title','管理员列表')

@section('hidden')
@endsection

@section('content')
<div id="page-wrapper">
		<!-- <div class="cl pd-5 bg-1 bk-gray"> <span class="l"><a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加角色','admin_add.html','800')"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong>54</strong> 条</span> </div> -->
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#demoModal">添加管理员</button><br/><br/>

		<table class="table table-border table-bordered table-hover table-bg">
			<thead>
				<tr>
					<th scope="col" colspan="8">管理员列表</th>
				</tr>
				<tr class="text-c">
					<th width="40">管理员编号</th>
					<th width="40">管理员名称</th>
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
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">编辑</button>

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
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">编辑</button>

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
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">编辑</button>

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
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">编辑</button>

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
                                <h4 class="modal-title" id="myModalLabel">管理员编号</h4>
                            </div>
                            <div class="modal-body">
                            　<div class="container col-lg-12">
                                    <label for="exampleInputEmail1">管理员名称</label>
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
                                <button type="button" class="btn btn-default" >取消</button>
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
                                <h4 class="modal-title" id="myModalLabel">管理员编号</h4>
                            </div>
                            <div class="modal-body">
                            　<div class="container col-lg-12">
                                    <label for="exampleInputEmail1">管理员名称</label>
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
                                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            </div>
                        </div>
                    </div>
         </div>
         <!-- 修改权限 -->
         <div class="modal fade" style="z-index='9999'" id="demoModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content"><br/><br/>
                        		<div class="col-lg-12">
                              	   <h3 class="col-md-offset-3">修改权限</h1>
                              	</div>&nbsp;&nbsp;
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