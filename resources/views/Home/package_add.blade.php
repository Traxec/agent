@extends('Layout.home')

@section('title','生成安装包')

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
                    <h2>修改安装包 <small>请上传安装包所需信息</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端标题名称</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="title">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端导航名称</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="title">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端服务器名称 
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="5" placeholder="Five lines of information"></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">电话</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="phone">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">官网网址</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="web sites">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">邮箱</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">地址</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="address">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">公司名称</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="title">
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
                      


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">取消</button>
                          <button type="reset" class="btn btn-primary">重置</button>
                          <button type="submit" class="btn btn-success">提交</button>
                        </div>
                      </div>

@endsection