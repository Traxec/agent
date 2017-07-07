@extends('Layout.admin')

@section('title','个人资料')

@section('content')
    <form action="{{action('admin\personController@update')}}" method="post">
        <input type="text" name="nick">
        <input type="text" name="phone">
        <input type="text" name="email">
        {{ csrf_field() }}
        <input type="submit">
    </form>
@endsection
