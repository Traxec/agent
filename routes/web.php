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
route::get('/home/index','home\indexController@index');//前台主页
route::get('/home/person','home\personController@index');//个人资料
route::get('/home/person/password','home\personController@password');//修改个人密码
route::get('/home/system','home\systemController@index');//生成系统
route::get('/home/package','home\packageController@index');//生成安装包
route::get('/home/pay','home\payController@index');//缴费页面
route::get('/home/contribution','home\contributionController@index');//缴费记录页面
route::get('/home/work/order','home\workController@order');//工单发布
route::get('/home/work/record','home\workController@record');//工单记录
route::get('/home/withdrawals','home\withdrawalsController@index');//提现页面
route::get('/home/user/check','home\userController@check');//普通账户审核页面
route::get('/home/agency/check','home\agencyController@check');//代理账户审核页面
route::get('/home/user/index','home\userController@index');//普通账户管理
route::get('/home/agency/index','home\agencyController@index');//普通账户管理
route::get('/home/customer','home\customerController@index');//客户系统管理



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
    route::post('/admin/sign/add_sign','admin\signController@add_sign');//后台签到cui
    route::get('/admin/sign/ban_ip', 'admin\signController@ban_ip');//ip黑名单cui
    route::post('/admin/sign/add_ban_ip', 'admin\signController@add_ban_ip');//添加ip黑名单cui
    route::post('/admin/sign/del_ban_ip', 'admin\signController@del_ban_ip');//移除ip黑名单cui
    route::post('/admin/sign/sign_data', 'admin\signController@sign_data');//签到日期cui
    route::post('/admin/sign/signed', 'admin\signController@signed');//当天是否签到cui
    //后台xu路由

    route::get('/admin/work','admin\workController@index');//工单管理页面xu
    route::get('/admin/capital','admin\capitalController@index');//资金管理页面xu
    route::get('/admin/person','admin\personController@index');//个人简介页面
    route::get('/admin/user','admin\userController@index');//用户列表页面
    route::get('/admin/work','admin\workController@index');//工单管理页面
    route::get('/admin/capital','admin\capitalController@index');//资金管理页面
    route::get('/admin/admin','admin\adminController@index');//管理员页面
    route::get('/admin/system','admin\systemController@index');//系统管理页面
    route::get('/admin/sign','admin\signController@index');//签到管理页面
    route::get('/admin/sign/sign','admin\signController@sign');//签到页面

});

route::get('/admin/login', 'admin\loginController@index');//后台登录cui
route::post('/admin/login/check', 'admin\loginController@check');//登录验证cui
route::get('/vcode', 'admin\loginController@vcode');//验证码cui

