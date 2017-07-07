@extends('Layout.admin')

@section('title','工单')

@section('hidden')
@endsection

@section('content')
<div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="col-md-offset-5">请详细写出您的问题</h1>
                    </div>
                    <div>
                            <form>
                              <div class="container">
                                <label for="exampleInputEmail1">代理商信息</label>
                                <input type="account-type" class="form-control" id="account-type" placeholder="">
                              </div><br/>
                              <div class="container">
                                <label for="exampleInputEmail1">系统端口号</label>
                                <input type="phone" class="form-control" id="phone" placeholder="">
                              </div><br/>
                              <div class="container">
                                <label for="exampleInputEmail1">系统简称</label>
                                <input type="mail" class="form-control" id="mail" placeholder="">
                              </div><br/>
                              <div class="container">
                                <label>问题类型：</label>
                                        <select class="select" name="adminRole" size="1">
                                            <option value="0">超级管理员</option>
                                            <option value="1">总编</option>
                                            <option value="2">栏目主辑</option>
                                            <option value="3">栏目编辑</option>
                                        </select></span> 
                              </div><br/>
                              <div class="container">
                                <label for="exampleInputEmail1">问题内容</label>
                                <textarea class="form-control" rows="3"></textarea>
                              </div><br/>
                              <div class="container">
                                  <label for="exampleInputFile">上传图片</label>
                                  <input type="file" id="picture">
                                  <p class="help-block">请上传您的图片。</p>
                                </div>

                              <div class="col-md-offset-6">
                                <button type="submit" class="btn btn-default">提交</button>　　　　　
                              </div>
                              <!-- Button trigger modal -->
                            </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

</div>

@endsection