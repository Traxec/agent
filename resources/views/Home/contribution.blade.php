@extends('Layout.home')

@section('title','资金流动')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>资金流动</h3>
              </div>


            </div>
            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>资金流动 <small>一目了然</small></h2>

                    <h2 style="float:right; color:red" >账户余额：{{$pay->pay}} 元</h2 >
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">


                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>序号</th>
                                <th>姓名</th>
                                <th>流动时间</th>
                                <th>明细</th>
                                <th>类型</th>

                              </tr>
                            </thead>
                            <tbody>
                              <?php $a=0 ?> @foreach ($capital as $key=> $value)
                              <?php $a++ ?>
                              <tr>
                                <td>{{ $a }}</td>
                                <td>{{ $value->nick }}</td>
                                <td>{{ $value->date }}</td>
                                <td>{{ $value->money}}</td>
                                <td>{{ $value->used }}</td>
                                @endforeach
                            </tbody>
                          </table>
                          {{$capital->links()}}
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
