@extends('Layout.home') @section('title','我的安装包') @section('hidden') @endsection @section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>安装包管理</h3>
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
                    <table id="datatable-keytable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>序号</th>
                          <th>安装包标题</th>
                          <th>安装包导航</th>
                          <th>安装包服务器名称</th>
                          <th>电话</th>
                          <th>官网网址</th>
                          <th>邮箱</th>
                          <th>地址</th>
                          <th>公司名称</th>
                          <th>图1</th>
                          <th>图2</th>
                          <th>图3</th>
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
                        <?php $a = 0 ?> @foreach ($package as $packages)
                        <?php $a++ ?>
                        <tr>
                          <td>{{$a}}</td>
                          <td>{{$packages->title}}</td>
                          <td>{{$packages->nav}}</td>
                          <td>{{$packages->server}}</td>
                          <td>{{$packages->phone}}</td>
                          <td>{{$packages->website}}</td>
                          <td>{{$packages->email}}</td>
                          <td>{{$packages->address}}</td>
                          <td>{{$packages->company}}</td>
                          <td><img width="50px" src="{{asset($packages->img1)}}" /></td>
                          <td><img width="50px" src="{{asset($packages->img2)}}" /></td>
                          <td><img width="50px" src="{{asset($packages->img3)}}" /></td>
                          <td>{{$packages->time}}</td>
                          <td>{{$packages->state}}</td>
                          <td>{{$packages->number}}</td>
                          <input type="hidden" name="id" value="{{$packages->id}}">
                          <td>
                            <button type="button" class="btn btn-primary btn-sm update" data-toggle="modal" data-target="#demoModal3">修改</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $package->links() }}
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
        <form class="form-horizontal form-label-left" action="{{action('home\packageController@update')}}" method="post" enctype="multipart/form-data">
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
            <label class="control-label col-md-3 col-sm-3 col-xs-12">128*128 ico图片</label>
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
  <script type="text/javascript">
  $('.update').click(function() {
    var id = $(this).parent().parent().find("input[name='id']").val();
    $.ajax({
      type: 'post',
      url: "{{action('home\packageController@edit')}}",
      dataType: 'json',
      async: false,
      data: {
        _token: "{{ csrf_token() }}",
        id: id,
      },
      success: function(data) {
        // alert(data.img1)
        $('.show').children().find('input[name="id"]').val(data.id)
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
  </script>
  @endsection
