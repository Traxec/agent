@extends('Layout.home')

@section('title','工单发布')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>工单管理</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>工单发布 <small>请上传工单详细信息</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" action="{{action('home\workController@insert')}}" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">系统端口号</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="port" class="form-control" placeholder="number">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">系统简称</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="system" class="form-control" placeholder="system abbreviation">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">问题类型</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="type" class="form-control" placeholder="problem type">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">问题描述</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea type="text" name="content" class="form-control" rows="3" placeholder=" problem description"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">问题截图</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                    <div>
                      <span class="btn btn-file btn-success">
                        <span class="fileupload-new">选择图片</span>
                        <span class="fileupload-exists">更换图片</span>
                        <input type="file" name="img" ></span>
                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  {{ csrf_field() }}
                  <button type="button" class="btn btn-primary">取消</button>
                  <button type="reset" class="btn btn-primary">重置</button>
                  <button type="submit" class="btn btn-success">提交工单</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
