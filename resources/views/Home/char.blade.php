@extends('Layout.home')

@section('title','提现')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>提现</h3>
              </div>


            </div>
            <div class="clearfix"></div>


            <div class="row">

<div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5 style="color:red" >您的账户余额：{{$pay->pay}} 元(注意：审核通过后将扣除您的账户余额)</h5 >

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="{{action('home\chargeController@add')}}" method="post">

					  <div class="form-group">
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">提现金额</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="hidden" id="my_price" value="{{$pay->pay}}">
                          <input type="text" id="price" class="form-control" name="pay" placeholder="请输入提现金额" >
                          <input type="hidden" name="nick" value="{{ $c->nick }}">

                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          {{ csrf_field() }}
                          <button type="submit" id="btn" class="btn btn-success">提交</button>
                        </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>

<script>

$('#btn').click(function(){
  var price=parseInt($('#price').val());
  var my_price=parseInt($('#my_price').val());

  if(price>my_price){
    alert('请输入有效金额！')
    return false;
  }
})
</script>


@endsection
