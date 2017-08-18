@extends('Layout.admin')

@section('title','我的系统')

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
<div class="right_col" role="main" style="width:2500px">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>系统管理</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                  <button type="button" class="btn btn-primary btn-sm" style="margin:10px" data-toggle="modal" data-target="#demoModal2">修改系统价格</button>
                  <a href="{{url('admin/system/send')}}" type="button" class="btn btn-primary btn-sm update" data-toggle="modal">发送邮件提醒</a>
                  <h5 style="margin-right:20px;float:right; color:red">注意：系统修改超出3次后下次修改价格{{$s->s_update}}元/次</h5>
                  <!--修改安装包价格-->
                  <form class="" action="{{ action('admin\systemController@update_system') }}" method="post">
                    <div class="modal fade" style="z-index='9999'" id="demoModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                              aria-hidden="true">&times;</span>
                            </button>
                            <h4 style="margin-left:10px; font-weight:bold;">修改系统价格</h4>

                          </div>
                          <h4 style="margin-left:30px;">
                            <div class="form-group">
                              <label for="exampleInputEmail1">价格(元/每次)</label>
                              <input type="text" autocomplete="off" class="form-control" name="price" onkeyup="this.value=this.value.replace(/[\D]/g,'');" id="exampleInputEmail1" placeholder="" value="{{$s->s_update}}">
                            </div>
                          </h4>
                          <div class="modal-footer">
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-default">确定</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>



                    <table id="datatable-keytable" width="2500px" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="40px">序号</th>
                          <th width="40px">用户名</th>
                          <th width="40px">系统端口号</th>
                          <th width="40px">产品模板</th>
                          <th width="40px">客户端软件所需信息</th>
                          <th width="40px">桌面快捷方式名称</th>
                          <th width="40px">交易软件标题名称</th>
                          <th width="40px">交易软件导航名称</th>
                          <th width="40px">交易软件服务器名称</th>
                          <th width="40px">开模拟账户对话框公司名称</th>
                          <th width="40px">MT4客户端-帮助-关于所需信息</th>
                          <th width="40px">平台名称</th>
                          <th width="40px">平台地址</th>
                          <th width="40px">平台电话</th>
                          <th width="40px">平台传真</th>
                          <th width="40px">官网网址</th>
                          <th width="40px">平台邮箱</th>
                          <th width="40px">图1</th>
                          <th width="40px">图2</th>
                          <th width="40px">图3</th>
                          <th width="40px">到期时间</th>
                          <th width="40px">剩余日期</th>
                          <th width="40px">修改时间</th>
                          <th width="40px">状态</th>
                          <th width="40px">修改次数</th>
                          <th width="40px">功能</th>
                        </tr>
                      </thead>
                      <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="demoModal5">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel2">提示</h4>
                            </div>
                            <div class="modal-body">
                              <h4>确定要删除吗？</h4>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <tbody>
                        <?php $a = 0 ?> @foreach ($system as $systems)
                        <?php $a++ ?>
                        <tr>
                          <td>{{$a}}</td>
                          <td>{{$systems->username}}</td>
                          <td>{{$systems->port}}</td>
                          <td>{{$systems->template}}</td>
                          <td>{{$systems->userinfo}}</td>
                          <td>{{$systems->shortcut}}</td>
                          <td>{{$systems->title}}</td>
                          <td>{{$systems->nav}}</td>
                          <td>{{$systems->server}}</td>
                          <td>{{$systems->usercomp}}</td>
                          <td>{{$systems->help}}</td>
                          <td>{{$systems->company}}</td>
                          <td>{{$systems->address}}</td>
                          <td>{{$systems->phone}}</td>
                          <td>{{$systems->fax}}</td>
                          <td>{{$systems->website}}</td>
                          <td>{{$systems->email}}</td>
                          <td><img width="50px" src="{{asset($systems->img1)}}" /></td>
                          <td><img width="50px" src="{{asset($systems->img2)}}" /></td>
                          <td><img width="50px" src="{{asset($systems->img3)}}" /></td>
                          <td>{{$systems->enddate}}</td>
                          @if($systems->last_day >= 7)
                          <td>{{$systems->last_day}}</td>
                          @elseif($systems->last_day < 7 && $systems->last_day >= 0)
                          <td style="background:yellow">{{$systems->last_day}}</td>
                          @elseif($systems->last_day <  0)
                          <td style="background:red">{{$systems->last_day}}</td>
                          @endif
                          <td>{{$systems->time}}</td>
                          <td>{!! $systems->state==1?'<span class="label label-success radius">已处理</span>':'<span class="label label-error radius">未处理</span>' !!}</td>
                          <td>{{$systems->number}}</td>
                          <input type="hidden" name="id" value="{{$systems->id}}">
                          <td>
                            <a href="{{url('admin/system/update').'?id='.$systems->id}}" type="button" class="btn btn-primary btn-sm update" data-toggle="modal">处理</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                      {{ $system->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        @endsection
