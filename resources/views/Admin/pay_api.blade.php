@extends('Layout.admin')

@section('title','缴费')

@section('hidden')
@endsection

@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="col-md-offset-5">个人资料</h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-md-offset-1 col-lg-8">
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
  <form class="" action="{{ action('admin\pay_apiController@update') }}" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
          aria-hidden="true">&times;</span>
        </button>
        <h4 style="margin-left:10px; font-weight:bold;">支付接口</h4>
      </div>
      <h4 style="margin-left:30px;">
        <div class="form-group">
          <label for="exampleInputEmail1">设置支付接口</label>
          <input type="text" autocomplete="off" class="form-control" style="width:900px" name="payweb" placeholder="" value="{{$config->payweb??''}}">
        </div>
      </h4>
      <div class="modal-footer">
        {{csrf_field()}}
        <button type="submit" class="btn btn-default">确定</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
      </div>
    </div>
  </form>
@endsection
