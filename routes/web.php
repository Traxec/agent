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
//=================================================后台=================================================================
//后台cui路由
route::get('/admin/login','admin\loginController@index');
route::get('/admin/index','admin\indexController@index');
//后台xu路由


