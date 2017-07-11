<?php

/*
|--------------------------------------------------------------------------
| web routes
|--------------------------------------------------------------------------
|
| here is where you can register web routes for your application. these
| routes are loaded by the routeserviceprovider within a group which
| contains the "web" middleware group. now create something great!
|
*/

route::get('/', function () {
    return view('welcome');
});
//=================================================前台=================================================================
//前台cui路由
route::get('/login', 'home\loginController@index');


//前台xu路由
//=================================================后台=======================================================　想==========
//后台cui路由
route::group(['middleware' => 'adminLogin'], function () {
    route::get('/admin/index', 'admin\indexController@index');//后台主页
});

route::get('/admin/login', 'admin\loginController@index');//后台登录
route::post('/admin/login/check', 'admin\loginController@check');//登录验证
route::get('/vcode', 'admin\loginController@vcode');//验证码
route::get('/admin/person','admin\personController@index');//个人资料列表
route::post('/admin/person/update','admin\personController@update');//修改个人资料
//后台xu路由

//后台xu路由
route::get('/admin/person','admin\personController@index');//个人简介页面
route::get('/admin/user','admin\userController@index');//用户列表页面
route::get('/admin/work','admin\workController@index');//工单管理页面
route::get('/admin/capital','admin\capitalController@index');//资金管理页面
route::get('/admin/admin','admin\adminController@index');//管理员页面
route::get('/admin/system','admin\systemController@index');//系统管理页面
