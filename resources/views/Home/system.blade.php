@extends('Layout.home')

@section('title','我的系统')

@section('hidden')
@endsection

@section('content')
﻿@inject('judge', 'App\Http\Controllers\home\exit_signController')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>系统管理</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                  <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#demoModal2">生成链接</button> -->
                  <!--生成链接 -->
                  <div class="modal fade" style="z-index='9999'" id="demoModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                          </button>
                          <h4 style="margin-left:10px; font-weight:bold;">普通账户注册链接</h4>
                        </div>
                        <h4 style="margin-left:30px;">http://fnksadhjkewhfkasjksjafkafkjahfkjasfh.com</h4>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
                        </div>
                      </div>
                    </div>
                  </div>



                    <table id="datatable-keytable" class="table table-striped table-bordered" >
                      <thead>
                        <tr>
                          <th>序号</th>
                          <th>系统端口号</th>
                          <th>产品模板</th>
                          <th>客户端标题</th>
                          <th>客户端导航</th>
                          <th>客户端服务器地址</th>
                          <th>电话</th>
                          <th>官网网址</th>
                          <th>邮箱</th>
                          <th>地址</th>
                          <th>公司名称</th>
                          <th>图1</th>
                          <th>图2</th>
                          <th>图3</th>
                          <th>到期时间</th>
                          <th>修改时间</th>
                          <th>状态</th>
                          <th>修改次数</th>
                          <th>功能</th>
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
                          <td>{{$systems->port}}</td>
                          <td>{{$systems->template}}</td>
                          <td>{{$systems->title}}</td>
                          <td>{{$systems->nav}}</td>
                          <td>{{$systems->server}}</td>
                          <td>{{$systems->phone}}</td>
                          <td>{{$systems->website}}</td>
                          <td>{{$systems->email}}</td>
                          <td>{{$systems->address}}</td>
                          <td>{{$systems->company}}</td>
                          <td><img width="50px" src="{{asset($systems->img1)}}" /></td>
                          <td><img width="50px" src="{{asset($systems->img2)}}" /></td>
                          <td><img width="50px" src="{{asset($systems->img3)}}" /></td>
                          <td>{{$systems->enddate}}</td>
                          <td>{{$systems->time}}</td>
                          <td>{{$systems->state}}</td>
                          <td>{{$systems->number}}</td>
                          <input type="hidden" name="id" value="{{$systems->id}}">
                          <input type="hidden" name="template" value="{{$systems->template}}">
                          <td>
                            @if($judge->sign()['system_update']==1)
                            <button type="button" class="btn btn-primary btn-sm update" data-toggle="modal" data-target="#demoModal3">修改</button>
                            @endif
                            <button type="button" class="btn btn-primary btn-sm renew" data-toggle="modal" data-target="#demoModal4">续费</button>
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
  <div class="modal fade" style="z-index='9999'" id="demoModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
      <div class="modal-content show">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">修改系统</h4>
          </div>
        <form class="form-horizontal form-label-left" action="{{action('home\systemController@update')}}" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">系统端口号 </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="port" placeholder="port" value="">
            </div>
          </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">产品模板</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_multiple form-control" id="sel" name="template" multiple="multiple">
                  </select>
                </div>
              </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端标题名称</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="hidden" class="form-control" name="id" placeholder="title">
              <input type="text" class="form-control" name="title" placeholder="title">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端导航名称</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="nav" placeholder="nav">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端服务器名称
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <textarea class="form-control" rows="5" name="server" placeholder="Five lines of information"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">电话</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="phone" placeholder="phone">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">官网网址</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="website" placeholder="website">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">邮箱</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">地址</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="address" placeholder="address">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">公司名称</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="company" placeholder="company">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">140*140 bmp图片</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-preview thumbnail" id="img1" style="width: 200px; height: 150px;"></div>
                <div>
                  <span class="btn btn-file btn-success">
                    <span class="fileupload-new">选择图片</span>
                    <span class="fileupload-exists">更换图片</span>
                    <input type="file" name="img1">
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">500*60 bmp图片</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-preview thumbnail" id="img2" style="width: 200px; height: 150px;"></div>
                <div>
                  <span class="btn btn-file btn-success">
                    <span class="fileupload-new">选择图片</span>
                    <span class="fileupload-exists">更换图片</span>
                    <input type="file" name="img2">
                  </span>
                  <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">48*48 ico图片</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-preview thumbnail" id="img3" style="width: 200px; height: 150px;"></div>
                <div>
                  <span class="btn btn-file btn-success">
                    <span class="fileupload-new">选择图片</span>
                    <span class="fileupload-exists">更换图片</span>
                    <input type="file" name="img3">
                  </span>
                  <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                </div>
              </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
              {{ csrf_field() }}
              <button type="submit" class="btn btn-success">提交</button>
              <button type="reset" class="btn btn-primary">重置</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


    <div class="modal fade" style="z-index='9999'" id="demoModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
      <div class="modal-dialog" role="document">
        <div class="modal-content show">
          <form class="form-horizontal form-label-left" action="{{action('home\systemController@renew')}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="control-label col-md-12" style="text-align:center">系统价格(1个月等于30天)</div>
              <div class="col-md-12">　</div>
              <div class="col-md-offset-2">
                <label for="one">一个月</label><input id="one" type="radio" name="time" value="1">　　
                <label for="three">三个月</label><input id="three" type="radio" name="time" value="2.94">　　
                <label for="six">六个月</label><input id="six" type="radio" name="time" value="5.7">　　
                <label for="twelve">一年</label><input id="twelve" type="radio" name="time" value="10.8">　　
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">系统价格(/月)</label>
              <div class="col-md-9 col-sm-9 col-xs-12" id="reshow">
                <input type="text" readonly class="form-control" name="price" placeholder="company">
                <input type="hidden" readonly class="form-control" name="id" placeholder="company">
                <input type="hidden" readonly class="form-control" name="template" placeholder="company">
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">提交</button>
                <button type="reset" class="btn btn-primary">重置</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  <script type="text/javascript">
  $('.update').click(function() {
    var id = $(this).parent().parent().find("input[name='id']").val();
    $.ajax({
      type: 'post',
      url: "{{action('home\systemController@edit')}}",
      dataType: 'json',
      async:false,
      data: {
        _token: "{{ csrf_token() }}",
        id: id,
      },
      success: function(data) {
        // alert(data.template)
        $('.show').children().find('input[name="id"]').val(data.id)
        $('.show').children().find('input[name="port"]').val(data.port)
        $("#temp").find("option:selected").removeAttr("selected","selected")
        $("#temp").find("option[value='"+data.template+"']").attr("selected","selected")
        $('.show').children().find('input[name="title"]').val(data.title)
        $('.show').children().find('input[name="nav"]').val(data.nav)
        $('.show').children().find('textarea[name="server"]').html(data.server)
        $('.show').children().find('input[name="phone"]').val(data.phone)
        $('.show').children().find('input[name="website"]').val(data.website)
        $('.show').children().find('input[name="email"]').val(data.email)
        $('.show').children().find('input[name="address"]').val(data.address)
        $('.show').children().find('input[name="company"]').val(data.company)
        var img1 = data.img1;
        var img2 = data.img2;
        var img3 = data.img3;
        $('#img1').html("<img src='../"+img1+"'/>");
        $('#img2').html("<img src='../"+img2+"'/>");
        $('#img3').html("<img src='../"+img3+"'/>");
      },
      error: function() {
        alert('系统错误，请联系管理员')
      },

    })
  })

  $('.renew').click(function(){
    var id = $(this).parent().parent().find("input[name='id']").val();
    var template = $(this).parent().parent().find("input[name='template']").val();
    $('#reshow').find('input[name="id"]').val(id)
    $('#reshow').find('input[name="template"]').val(template)

    $.ajax({
      type: 'POST',
      url: '{{action('home\templateController@reshow')}}',
      dataType: 'json',
      data: {
        template:template,
        id:id,
        _token: "{{csrf_token()}}",
      },
      success: function (data) {
        $('input[name="time"]').change(function(){
          $('input[name="price"]').val(Number(data.price*$("input[type='radio']:checked").val()).toFixed(2))
        })
      },
      error: function (data) {
        alert('系统错误')
      },
    });
  })

$.ajax({
  type: 'POST',
  url: '{{action('home\templateController@show')}}',
  dataType: 'json',
  data: {
    _token: "{{csrf_token()}}",
  },
  success: function (data) {
    $.each(data,function(name,value){
      $('#sel').append("<option value='"+value.title+"' price='"+value.price+"'>"+value.title+"</option>");
    })
    $('#sel').change(function(){
      $('input[name="price"]').val(Number($('#sel').find("option:selected").attr("price")*$("input[type='radio']:checked").val()).toFixed(2))
    })
    $('input[name="time"]').change(function(){
      $('input[name="price"]').val(Number($('#sel').find("option:selected").attr("price")*$("input[type='radio']:checked").val()).toFixed(2))
    })
  },
  error: function (data) {
    alert('系统错误')
  },
});
  </script>
        @endsection
