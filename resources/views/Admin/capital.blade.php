@extends('Layout.admin')

@section('title','资金')

@section('hidden')
@endsection

@section('content')

<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">系统信息</th>
			</tr>
			<tr class="text-c">
				<th width="150">代理商信息</th>
				<th width="150">系统单价(元)</th>
				<th width="150">结算方式</th>
				<th width="150">开始时间</th>
				<th width="150">结束时间</th>
				<th width="150">状态</th>
				<th width="150">操作</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
				<td>1</td>
				<td>20000</td>
				<td>线上转账</td>
				<td>2017.7.5</td>
				<td>2017.8.5</td>
				<td class="td-status"><span class="label label-success radius">正常</span></td>
				<td class="td-manage"><a style="text-decoration:none" onClick="admin_start(this,'10001')" href="javascript:;" title="欠费"><i class="Hui-iconfont">&#xe615;</i></a> 　　

				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">编辑</button>　　

				<a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<tr class="text-c">
				<td>2</td>
				<td>20000</td>
				<td>线上转账</td>
				<td>2017.7.5</td>
				<td>2017.8.5</td>
				<td class="td-status"><span class="label radius">欠费</span></td>
				<td class="td-manage"><a style="text-decoration:none" onClick="admin_start(this,'10001')" href="javascript:;" title="欠费"><i class="Hui-iconfont">&#xe615;</i></a> 　　

				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal">编辑</button>　　

				<a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
		</tbody>
	</table>
	<!-- 编辑 -->
	 <div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">代理商信息</h4>
                            </div>
                            <div class="modal-body">
                            　<div class="container col-lg-12">
                                    <label for="exampleInputEmail1">系统单价(元)</label>
                                    <input type="money" class="form-control" id="money" placeholder="">
                              </div><br/>
                              <div class="container col-lg-12">
                                <label for="exampleInputEmail1">结算方式</label>
                                <input type="iphone" class="form-control" id="iphone" placeholder="">
                              </div><br/><br/><br/><br/><br/><br/><br/>
                              <div class="container col-lg-12">
                                <label for="exampleInputEmail1">开始时间:</label>
                                <input type="text" id="c1" onclick="J.calendar.get({dir:'right'});"/>
                              </div><br/><br/>
                              <div class="container col-lg-12">
                                <label for="exampleInputEmail1">结束时间:</label>
                                <input type="text" id="c2" onclick="J.calendar.get({dir:'right'});"/>
                              </div><br/><br/>
                              <div>
                              	<label class="radio-inline">
	                              	<label for="exampleInputEmail1">状态</label>　　　
	                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">正常
                              	</label>
	                              <label class="radio-inline">
	                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">欠费
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






	<script type="text/javascript">

	function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
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
/*管理员-编辑*/
function admin_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……

		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">欠费</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}

/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……


		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">正常</span>');
		$(obj).remove();
		layer.msg('已启用!', {icon: 6,time:1000});
	});
}
</script>


@endsection
