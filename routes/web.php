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

//route::get('/', function () {
//    return view('welcome');
//});
//=================================================前台=================================================================
route::get('mail/send', 'MailController@send');
route::get('/login', 'home\loginController@index');//前台登录cui
route::post('/login/check', 'home\loginController@check');//前台登录cui
route::get('/forget', 'home\forgetController@index');//前台忘记密码cui
route::get('/register', 'home\registerController@index');//前台注册页面cui
route::post('/register/add', 'home\registerController@add');//前台注册cui

route::group(['middleware' => 'homeLogin'], function () {
    route::get('/', 'home\indexController@index');//前台主页
    route::get('/home/person', 'home\personController@index');//个人资料
    route::post('/home/person/update', 'home\personController@update');//个人资料修改
    route::get('/home/person/password', 'home\personController@password');//修改个人密码
    route::get('/home/system', 'home\systemController@index');//系统列表
    route::get('/home/system/add', 'home\systemController@add');//生成系统
    route::post('/home/system/insert', 'home\systemController@insert');//执行生成系统
    route::post('/home/system/edit', 'home\systemController@edit');//修改系统
    route::post('/home/system/update', 'home\systemController@update');//执行修改系统
    route::post('/home/system/renew', 'home\systemController@renew');//执行修改系统
    route::get('/home/package', 'home\packageController@index');//安装包列表
    route::get('/home/package/add', 'home\packageController@add');//生成安装包
    route::post('/home/package/insert', 'home\packageController@insert');//执行生成安装包
    route::post('/home/package/edit', 'home\packageController@edit');//修改安装包
    route::post('/home/package/update', 'home\packageController@update');//执行修改安装包
    route::post('/home/person/pwdupdate', 'home\personController@pwdupdate');//修改个人密码
    route::get('/home/pay', 'home\payController@index');//缴费页面
    route::get('/home/pay/add', 'home\payController@add');//充值
    route::post('/home/pay/insert', 'home\payController@insert');//执行充值
    route::get('/home/contribution', 'home\contributionController@index');//缴费记录页面
    route::get('/home/work/order', 'home\workController@order');//工单发布
    route::post('/home/work/insert', 'home\workController@insert');//执行工单发布
    route::get('/home/work/record', 'home\workController@record');//工单记录
    route::get('/home/withdrawals', 'home\withdrawalsController@index');//提现页面
    route::get('/home/user/check', 'home\userController@check');//普通账户审核页面
    route::get('/home/user/index', 'home\userController@index');//普通账户管理
    route::get('/home/agency/check', 'home\agencyController@check');//代理账户审核页面
    route::get('/home/agency/index', 'home\agencyController@index');//普通账户管理
    route::get('/home/customer', 'home\customerController@index');//客户系统管理
    route::get('/home/send/mail', 'home\sendController@mail');//发送邮件
    route::get('/home/send/box', 'home\sendController@box');//邮件收件箱
    route::get('/home/send/message', 'home\sendController@message');//发送短信
    route::get('/home/send/inbox', 'home\sendController@inbox');//短信收件箱
    route::get('/home/register_email', 'home\register_emailController@index');//前台发注册
    route::post('/home/register_email/send', 'home\register_emailController@send');//前台发邮件
    route::get('/home/my_users', 'home\my_usersController@index');//前台我的用户列表
    route::get('/home/exit', 'home\exit_signController@exit');//前台我的用户列表
    route::post('/home/exit/sign', 'home\exit_signController@sign');//前台权限设置
    route::post('/home/template', 'home\templateController@show');//模板展示
    route::post('/home/template/reshow', 'home\templateController@reshow');//模板续费
    route::get('/home/template/index','home\templateController@index');//模板金额修改
    route::post('/home/template/agent_template','home\templateController@agent_template');//代理商模板价格金额修改数据
    route::post('/home/template/agent_template_show','home\templateController@agent_template_show');//代理商模板价格金额修改数据显示
});



//=================================================后台=======================================================　想==========
route::group(['middleware' => 'adminLogin'], function () {
    route::get('/admin/index', 'admin\indexController@index');//后台主页cui
    route::get('/admin/person', 'admin\personController@index');//个人简介页面xu
    route::post('/admin/person/update', 'admin\personController@update');//修改个人资料xu
    route::post('/admin/person/password', 'admin\personController@password');//修改个人密码cui
    route::get('/admin/admin', 'admin\adminController@index');//管理员管理列表cui
    route::post('/admin/admin/add', 'admin\adminController@add');//管理员添加cui
    route::post('/admin/admin/edit', 'admin\adminController@edit');//管理员修改cui
    route::post('/admin/admin/delete', 'admin\adminController@delete');//管理员删除cui
    route::post('/admin/admin/judge_show', 'admin\adminController@judge_show');//管理员权限修改展示cui
    route::post('/admin/admin/judge_update', 'admin\adminController@judge_update');//管理员权限修改cui
    route::post('/admin/admin/update', 'admin\adminController@update');//管理员添加cui
    route::get('/admin/exit_admin', 'admin\adminController@exit_admin');//后台退出cui
    route::post('/admin/sign/add_sign', 'admin\signController@add_sign');//后台签到cui
    route::get('/admin/sign/ban_ip', 'admin\signController@ban_ip');//ip黑名单cui
    route::post('/admin/sign/add_ban_ip', 'admin\signController@add_ban_ip');//添加ip黑名单cui
    route::post('/admin/sign/del_ban_ip', 'admin\signController@del_ban_ip');//移除ip黑名单cui
    route::post('/admin/sign/sign_data', 'admin\signController@sign_data');//签到日期cui
    route::post('/admin/sign/signed', 'admin\signController@signed');//当天是否签到cui
    route::post('/admin/role/show', 'admin\roleController@show');//普通客户权限展示
    route::post('/admin/role/update', 'admin\roleController@update');//普通客户权限展示
    route::post('/admin/user/add', 'admin\userController@add');//普通用户添加
    route::get('/admin/register_email', 'admin\register_emailController@index');//用户邮件注册
    route::post('/admin/register_email/send', 'admin\register_emailController@send');//用户邮件注册发送邮件
    route::post('/admin/user/edit', 'admin\userController@edit');//普通用户修改
    route::post('/admin/user/update', 'admin\userController@update');//普通用户修改
    route::post('/admin/user/delete', 'admin\userController@delete');//删除用户
    route::get('/admin/system/update', 'admin\systemController@update');//系统修改
    route::get('/admin/system/edit', 'admin\systemController@edit');//系统修改
    route::post('/admin/system/update_system', 'admin\systemController@update_system');//修改系统价格
    route::post('/admin/package/update_package', 'admin\packageController@update_package');//修改安装包价格
    route::get('/admin/package/update', 'admin\packageController@update');//系统修改
    route::get('/admin/package/edit', 'admin\packageController@edit');//系统修改
    route::post('/admin/work/update', 'admin\workController@update');//工单回复页面
    route::post('/admin/template/insert', 'admin\templateController@insert');//执行模板添加
    route::post('/admin/template/edit', 'admin\templateController@edit');//模板修改
    route::post('/admin/template/update', 'admin\templateController@update');//执行模板修改
    route::post('/admin/template/delete', 'admin\templateController@delete');//执行模板删除
    route::post('/admin/template/show', 'admin\templateController@show');//模板使用

    route::get('/admin/work', 'admin\workController@index');//工单管理页面xu
    route::get('/admin/capital', 'admin\capitalController@index');//资金管理页面xu
    route::get('/admin/person', 'admin\personController@index');//个人简介页面
    route::get('/admin/user', 'admin\userController@index');//用户列表页面
    route::get('/admin/user_audit', 'admin\user_auditController@index');//用户审核列表页面
    route::get('/admin/agent', 'admin\agentController@index');//代理商列表页面
    route::get('/admin/agent_audit', 'admin\agent_auditController@index');//代理商列表页面
    route::get('/admin/work', 'admin\workController@index');//工单管理页面
    route::get('/admin/capital', 'admin\capitalController@index');//资金管理页面
    route::get('/admin/admin', 'admin\adminController@index');//管理员页面
    route::get('/admin/sys', 'admin\sysController@index');//系统管理页面
    route::get('/admin/sign', 'admin\signController@index');//签到管理页面
    route::get('/admin/sign/sign', 'admin\signController@sign');//签到页面
    route::get('/admin/system', 'admin\systemController@index');//系统管理
    route::get('/admin/package', 'admin\packageController@index');//安装包管理
    route::get('/admin/template', 'admin\templateController@index');//模板管理
});

route::get('/admin/login', 'admin\loginController@index');//后台登录cui
route::post('/admin/login/check', 'admin\loginController@check');//登录验证cui
route::get('/vcode', 'admin\loginController@vcode');//验证码cui
