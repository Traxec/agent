@extends('Layout.home')

@section('title','缴费')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>充值</h3>
      </div>


    </div>
    <div class="clearfix"></div>


    <div class="row">

      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><small>请及时充值以便系统正常使用</small></h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" action="{{$api->payweb??''}}" method="post" target="_blank">
              <div class="form-group">
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">充值金额</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" onkeyup="this.value=this.value.replace(/[\D]/g,'');" name="pay" placeholder="请输入充值金额" >
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-success">提交</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
