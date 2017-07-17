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
route::get('/login', 'home\loginController@index');//登录cui


//=================================================后台=======================================================　想==========
route::group(['middleware' => 'adminLogin'], function () {
    route::get('/admin/index', 'admin\indexController@index');//后台主页cui
    route::get('/admin/person', 'admin\personController@index');//个人简介页面xu
    route::post('/admin/person/update', 'admin\personController@update');//修改个人资料xu
    route::post('/admin/person/password', 'admin\personController@password');//修改个人密码cui
    route::get('/admin/admin', 'admin\adminController@index');//管理员管理列表cui
    route::post('/admin/admin/add', 'admin\adminController@add');//管理员添加cui
    route::post('/admin/admin/edit', 'admin\adminController@edit');//管理员修改cui
    route::post('/admin/admin/delete','admin\adminController@delete');//管理员删除cui
    route::post('/admin/admin/judge_show','admin\adminController@judge_show');//管理员权限修改展示cui
    route::post('/admin/admin/judge_update','admin\adminController@judge_update');//管理员权限修改cui
    route::post('/admin/admin/update', 'admin\adminController@update');//管理员添加cui
    route::get('/admin/exit_admin', 'admin\adminController@exit_admin');//后台退出cui
    route::post('/admin/sign/add','admin\signController@add');//后台签到cui
    //后台xu路由
    route::get('/admin/work','admin\workController@index');//工单管理页面xu
    route::get('/admin/capital','admin\capitalController@index');//资金管理页面xu
    route::get('/admin/person','admin\personController@index');//个人简介页面xu
    route::get('/admin/user','admin\userController@index');//用户列表页面xu
    route::get('/admin/work','admin\workController@index');//工单管理页面xu
    route::get('/admin/capital','admin\capitalController@index');//资金管理页面xu
    route::get('/admin/admin','admin\adminController@index');//管理员页面xu
    route::get('/admin/system','admin\systemController@index');//系统管理页面xu
    route::get('/admin/sign','admin\signController@index');//签到管理页面xu
});

route::get('/admin/login', 'admin\loginController@index');//后台登录cui
route::post('/admin/login/check', 'admin\loginController@check');//登录验证cui
route::get('/vcode', 'admin\loginController@vcode');//验证码cui

