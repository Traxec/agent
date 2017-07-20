@extends('Layout.home')

@section('title','缴费')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>缴费管理</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
      

            <div class="row">
                
<div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>缴费 <small>请及时缴费以便系统正常使用</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                    
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">缴费方式</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_multiple form-control" multiple="multiple">
                            <option>1个月*元</option>
                            <option>3个月*元</option>
                            <option>6个月*元</option>
                            <option>12个月*元</option>
                          
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">到期提醒时间 </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" disabled="disabled" placeholder="提前7天（宽限3天）" >
                          
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">提醒频率 </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" disabled="disabled" placeholder="提前7天，3天，1天提醒（宽限期每天提醒）" >
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value=""> 邮箱：123@qq.com
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value=""> 手机：12345612301
                            </label>
                          </div>
                        </div>
                        
                      </div>
                      
                      


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" class="btn btn-success">提交</button>
                        </div>
                      </div>



@endsection