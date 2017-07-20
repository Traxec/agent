@extends('Layout.home')

@section('title','提现')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>提现管理<small></small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>
             <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>提现 <small>查询可提现金额</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      
                      <!-- info row -->
                      
                      <!-- /.row -->


                      <!-- Table row -->
                      
                        <div class="col-xs-12 table">
                        
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                
                                <th>系统单价</th>
                                <th>系统数量</th>
                                <th>应扣款</th>
                                <th>账户总额</th>
                                <th>可提现</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1000</td>
                                <td>5</td>
                                <td>5000</td>
                                <td>10000</td>
                                <td>5000</td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                 
                      
                      <!-- /.row -->
						<div class="x_content">

                  <!-- modals -->
                  <!-- Large modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">提现</button>
                   

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">提交金额</h4>
                        </div>
                        <div class="modal-body">
                          
                          <input type="text" class="form-control"  placeholder="number" >
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
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" data-dismiss="modal">提交</button>
                          
                          
                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- Small modal -->
                 
                  <!-- /modals -->
                </div>
                      
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      
                    </section>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>提现记录 <small>一目了然</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                       

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Qty</th>
                                <th>提现时间</th>
                                <th>提现金额</th>
                                <th>剩余可提现</th>
                             
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>7</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>8</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>9</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>10</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>11</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>12</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>13</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>14</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>15</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>16</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>17</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>18</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>19</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              <tr>
                                <td>20</td>
                                <td>2017/01/01</td>
                                <td>200,800</td>
                                <td>200,800</td>
                                
                              </tr>
                              

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection