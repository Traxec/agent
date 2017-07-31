@extends('Layout.home')

@section('title','邮件开户')

@section('hidden')
@endsection

@section('content')
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

<div class="right_col" role="main">
  <div class="newsletter">
    <div class="newsletter-main">
      <div class="stamp">
        <img src="../admin/images/stamp.png" alt="">
      </div>
      <h1>邮件开户</h1>
      <h2>发展你的客户</h2>
      <div class="design">
        <img src="../admin/images/design.png">
      </div>
      <p>请在以下输入新客户的邮箱地址</p>
      <a href="#" class="signup">Sign up right now!</a>
      <form action="{{ action('home\register_emailController@send') }}" method="post">
        <input type="text" name="email" value="Enter Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your email address';}">
        <br>
        <div class="col-md-12">
          <input type="radio" id='catid' name="catid" value="1" checked>
          <label for="catid">
            普通用户
          </label>
          <input type="radio" id='catid2' name="catid" value="2">
          <label for="catid2">
            代理商
          </label>
        </div>
        {{ csrf_field() }}
        <input type="submit" value="Get Goodies">
      </form>
      <div class="design">
        <img src="../admin/images/design.png">
      </div>
      <div class="tlg">
        <div class="tlg-img">
          <img src="../admin/images/tlg.png">
        </div>
        <div class="tlg-text">
          <h3>This Looks Great</h3>
          <h4>By Barin Cristian Doru</h4>
        </div>
        <div class="clear"> </div>
      </div>
    </div>
  </div>
  <div class="copy-right">
    <p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="#">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
  </div>
</div>

@endsection
