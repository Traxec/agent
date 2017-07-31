@extends('Layout.home')

@section('title','修改密码')

@section('hidden')
@endsection

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>个人信息</h3>
              </div>


            </div>
            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>修改密码 <small>保护您的账号安全</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="{{action('home\personController@pwdupdate')}}" method="post">
                      <div class="form-group">
                        <input type="hidden" name="id" value="{{ $sel->id }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">账号 </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" disabled="disabled" placeholder="account" value="{{ $sel->username }}">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">原密码</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="password" class="form-control" name="old_password" id="password" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">新密码</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="password" class="form-control" name="new_password" id="password" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">新密码确认</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="password" class="form-control"  name="re_password"id="password"  value="">
                        </div>
                      </div>



                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          {{ csrf_field() }}
                          <button type="button" class="btn btn-primary">取消</button>
                          <button type="reset" class="btn btn-primary">重置</button>
                          <button type="submit" class="btn btn-success">提交</button>
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
