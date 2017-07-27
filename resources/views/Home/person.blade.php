@extends('Layout.home')

@section('title','个人资料')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>个人信息</h3>
              </div>


            </div>
            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>个人资料 <small>请仔细核对您的个人信息
                    </small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ action('home\personController@update') }}" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">账号<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" disabled placeholder="account" value="{{ $person->username }}">
                        </div>
                      </div >
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">姓名 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nick"  class="form-control col-md-7 col-xs-12" placeholder="Name" value="{{ $person->nick }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">电话 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="phone"  class="form-control col-md-7 col-xs-12" placeholder="Phone" value="{{ $person->phone }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">邮箱<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="email"  class="form-control col-md-7 col-xs-12" placeholder="Email" value="{{ $person->email }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">开户行<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="b_bank"  class="form-control col-md-7 col-xs-12" placeholder="开户行" value="{{ $person->b_bank }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">支行<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="b_branch"  class="form-control col-md-7 col-xs-12" placeholder="支行" value="{{ $person->b_branch }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">银行账号<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="b_account"  class="form-control col-md-7 col-xs-12" placeholder="银行账号" value="{{ $person->b_account }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">户主<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name=""  class="form-control col-md-7 col-xs-12" placeholder="户主" value="{{ $person->b_master }}">
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-success">提交</button>
                          <button class="btn btn-primary" type="reset">重置</button>
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
