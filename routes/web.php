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

//后台xu路由
route::get('/admin/person','admin\personController@index');//个人简介页面
route::get('/admin/userlist','admin\userlistController@index');//用户列表页面
route::get('/admin/work','admin\workController@index');//工单管理页面
route::get('/admin/capital','admin\capitalController@index');//资金管理页面

