@extends('Layout.admin')

@section('title','个人资料')

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
                            <form action="{{action('admin\personController@update')}}" method="post">
                                <input type="hidden" name="id" value="{{$id}}">
                                <div class="container">
                                    <label for="exampleInputEmail1">姓名</label>
                                    <input type="account-type" class="form-control" name="nick" id="account-type"
                                           value="{{$nick}}">
                                </div>
                                <br/>
                                <div class="container">
                                    <label for="exampleInputEmail1">手机</label>
                                    <input type="phone" class="form-control" name="phone" id="phone" value="{{$phone}}">
                                </div>
                                <br/>
                                <div class="container">
                                    <label for="exampleInputEmail1">邮箱</label>
                                    <input type="mail" class="form-control" id="email" name="email" value="{{$email}}">
                                </div>
                                <br/>
                                <div class="col-md-offset-5">
                                    <button type="submit" class="btn btn-default">修改</button>
                                    　　　　　
                                    <button type="button" class="btn btn-default" data-toggle="modal"
                                            data-target="#demoModal">修改密码
                                    </button>
                                </div>
                                <!-- Button trigger modal -->
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- Modal -->

                <div class="modal fade" style="z-index='9999'" id="demoModal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{action('admin\personController@password')}}" method="post">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">修改密码</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="container col-lg-12">
                                        <label for="exampleInputEmail1">旧密码</label>
                                        <input type="password" name="old_password" class="form-control" id="password" placeholder="">
                                    </div>
                                    <br/>
                                    <div class="container col-lg-12">
                                        <label for="exampleInputEmail1">新密码</label>
                                        <input type="password" name="new_password" class="form-control" id="password" placeholder="">
                                    </div>
                                    <br/>
                                    <div class="container col-lg-12">
                                        <label for="exampleInputEmail1">重复新密码</label>
                                        <input type="password" name="re_password" class="form-control" id="password" placeholder="">
                                    </div>
                                    <br/>
                                </div>　　　　　
                                <div class="modal-footer">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-default">确定</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@endsection
