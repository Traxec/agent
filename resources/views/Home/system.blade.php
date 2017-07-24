@extends('Layout.home')

@section('title','生成系统')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>系统管理</h3>
      </div>


    </div>
    <div class="clearfix"></div>


    <div class="row">

      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>生成系统 <small>请上传系统所需信息</small></h2>

            <div class="clearfix">
            </div>
          </div>
          <div class="x_content">
            <?php $a=0?>
              @foreach($admin as $key => $value)
              <?php $a++ ?>
            <br />
            <form class="form-horizontal form-label-left">
             <div class="form-group">
              
              <label class="control-label col-md-3 col-sm-3 col-xs-12">系统端口号 </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input" value="{{$value->port}}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">产品模板</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <select class="select2_multiple form-control" multiple="multiple">
                  <option>Choose option</option>
                  <option>Option one</option>
                  <option>Option two</option>
                  <option>Option three</option>
                  <option>Option four</option>
                  <option>Option five</option>
                  <option>Option six</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端标题名称</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control" placeholder="title" value="{{$value->title}}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端导航名称</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control" placeholder="title" value="{{$value->navi}}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端服务器名称 
              </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <textarea class="form-control" rows="5" placeholder="Five lines of information" value="{{$value->server}}"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">电话</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control" placeholder="phone" value="{{$value->phone}}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">官网网址</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control" placeholder="web sites" value="{{$value->websit}}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">邮箱</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control" placeholder="Email" value="{{$value->email}}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">地址</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control" placeholder="address" value="{{$value->address}}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">公司名称</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control" placeholder="title" value="{{$value->company}}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">140*140 bmp图片</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="fileupload fileupload-new" data-provides="fileupload">

                  <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                  <div>
                    <span class="btn btn-file btn-success"><span class="fileupload-new">选择图片</span><span class="fileupload-exists">更换图片</span><input type="file"></span>
                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">500*60 bmp图片</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="fileupload fileupload-new" data-provides="fileupload">

                  <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                  <div>
                    <span class="btn btn-file btn-success"><span class="fileupload-new">选择图片</span><span class="fileupload-exists">更换图片</span><input type="file"></span>
                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">128*128 ico图片</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="fileupload fileupload-new" data-provides="fileupload">

                  <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                  <div>
                    <span class="btn btn-file btn-success"><span class="fileupload-new">选择图片</span><span class="fileupload-exists">更换图片</span><input type="file"></span>
                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach



            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="button" class="btn btn-primary">取消</button>
                <button type="reset" class="btn btn-primary">重置</button>
                <button type="submit" class="btn btn-success">提交</button>
              </div>
            </div>

            @endsection