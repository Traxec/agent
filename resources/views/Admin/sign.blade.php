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
                    <th width="40">编号</th>
                    <th width="40">客服名称</th>
                    <th width="40">签到日期</th>
                    <th width="60">签到时间</th>
                    <th width="60">签到ip</th>

                </tr>
            </thead>
            <tbody>
            <?php $a = 0 ?>
            @foreach($data as $key => $value)
                <?php $a++ ?>
                <tr class="text-c">
                    <td>{{$a}}</td>
                    <td>{{$value->nick}}</td>
                    <td>{{substr($value->datetime,0,10)}}</td>
                    <td>{{substr($value->datetime,10,18)}}</td>
                    <td>{{$value->ip}}</td>
                    <!-- <td>
                    <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td> -->
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
