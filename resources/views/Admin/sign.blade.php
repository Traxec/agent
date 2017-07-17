@extends('Layout.admin')

@section('title','客服信息')

@section('hidden')
@endsection

@section('content')
<div id="page-wrapper">
        <!-- <div class="cl pd-5 bg-1 bk-gray"> <span class="l"><a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加角色','admin_add.html','800')"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong>54</strong> 条</span> </div> -->
        <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#demoModal">添加</button><br/><br/> -->

        <table class="table table-border table-bordered table-hover table-bg">
            <thead>
                <tr>
                    <th scope="col" colspan="8">签到信息</th>
                </tr>
                <tr class="text-c">
<<<<<<< HEAD
                    <th width="40">编号</th>
=======
>>>>>>> fff6ec42b599fc5a354468efa3d86eb9a87d4ad9
                    <th width="40">客服名称</th>
                    <th width="40">联系方式</th>
                    <th width="40">签到月份</th>
                    <th width="60">签到日期</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr class="text-c">
                    <td>下个雨季</td>
                    <td>15138679371</td>
                    <td>2017.7.13 8:20</td>
                    <td>1,2,3,4,5,6,7,8,9,</td>
                    <!-- <td>
                    <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td> -->
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
                                <h4 class="modal-title" id="myModalLabel">添加</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container col-lg-12">
                                    <label for="exampleInputEmail1">客服编号</label>
                                        <input type="usenanme" class="form-control" id="usenanme" placeholder="">
                                  </div><br/>
                                　<div class="container col-lg-12">
                                        <label for="exampleInputEmail1">用户名</label>
                                        <input type="usenanme" class="form-control" id="usenanme" placeholder="">
                                  </div><br/>
                                  <div class="container col-lg-12">
                                    <label for="exampleInputEmail1">客服名称</label>
                                    <input type="iphone" class="form-control" id="iphone" placeholder="">
                                  </div><br/>
                                  <div class="container col-lg-12">
                                    <label for="exampleInputEmail1">手机</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                                  </div><br/>
                                  <div class="container col-lg-12">
                                    <label for="exampleInputEmail1">邮箱</label>
                                    <input type="address" class="form-control" id="address" placeholder="">
                                  </div><br/><br/>
                                  <div class="container col-lg-12">
                                    <label for="exampleInputEmail1">签到时间</label>
                                    <input type="address" class="form-control" id="address" placeholder="">
                                  </div><br/><br/>
                                </div>　　<br/><br/><br/><br/>　　　　　
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
                                <h4 class="modal-title" id="myModalLabel">修改客服信息</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container col-lg-12">
                                    <label for="exampleInputEmail1">客服编号</label>
                                    <input type="usenanme" class="form-control" id="usenanme" placeholder="">
                                  </div><br/>
                                　<div class="container col-lg-12">
                                        <label for="exampleInputEmail1">用户名</label>
                                        <input type="usenanme" class="form-control" id="usenanme" placeholder="">
                                  </div><br/>
                                  <div class="container col-lg-12">
                                    <label for="exampleInputEmail1">客服名称</label>
                                    <input type="iphone" class="form-control" id="iphone" placeholder="">
                                  </div><br/>
                                  <div class="container col-lg-12">
                                    <label for="exampleInputEmail1">手机</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                                  </div><br/>
                                  <div class="container col-lg-12">
                                    <label for="exampleInputEmail1">邮箱</label>
                                    <input type="address" class="form-control" id="address" placeholder="">
                                  </div><br/><br/>
                                  <div class="container col-lg-12">
                                    <label for="exampleInputEmail1">签到时间</label>
                                    <input type="address" class="form-control" id="address" placeholder="">
                                  </div><br/><br/>
                                </div><br/><br/><br/><br/>　　　　　　
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
                                <button type="button" class="btn btn-default">取消</button>
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
                                </div>
                                <label class="checkbox-inline">&nbsp;&nbsp;　　　　
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