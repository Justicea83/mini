<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware'=>['web']],function(){
	Route::get('/', function () {
    return view('welcome');
    })->name('login');

    Route::post('/register',[
    	'as'=>'register.user',
    	'uses'=>'RegisterController@register',
        'auth'=>'middleware',
    ]);
    Route::post('/login',[
    	'as'=>'login.user',
    	'uses'=>'RegisterController@login'
    ]);
    Route::get('/tweety/home', [
        'as'=>'home',
        'uses'=>'UserController@home',
        'middleware'=>'auth',
    ]);

    Route::get('/tweety/home/profile',[
        'as'=>'user.profile',
        'uses'=>'UserController@ViewProfile',
        'middleware'=>'auth',
    ]);
     Route::get('/register/user', [
        'as'=>'user.chooseUserName',
        'uses'=>'RegisterController@getUser',
        'middleware'=>'auth',
     ]);

    Route::post('/register/user/{id}', [
        'as'=>'user.redirect',
        'uses'=>'RegisterController@update'

    ]);

    Route::get('/tweety/editprofile', [
        'as'=>'user.editprofile',
        'uses'=>'UserController@editprofile',
        'middleware'=>'auth',
     ]);
    Route::get('/tweety/user/logout',[
        'as'=>'user.logout',
        'uses'=>'UserController@logout',
        'middleware'=>'auth',
    ]);
     Route::post('/tweety/user/edit', [
        'as'=>'user.edit',
        'uses'=>'UserController@edit',
        'middleware'=>'auth',

    ]);

	 Route::get('/tweety/user/settings',[
        'as'=>'user.settings',
        'uses'=>'UserController@settings',
        'middleware'=>'auth',
    ]);
Route::get('/tweety/user/settings/load',function(){
    return view('user.showUserForm');
});
Route::get('/tweety/user/settings/load/pass',function(){
    return view('user.chooseUserPassword');
});
 Route::post('/tweety/user/account/save', [
        'as'=>'user.saveacc',
        'uses'=>'UserController@submitUserAccountSettings',
        'middleware'=>'auth',
   ]);
  Route::post('/tweety/user/password/save', [
        'as'=>'user.savepass',
        'uses'=>'UserController@submitUserPasswordSettings',
        'middleware'=>'auth',
   ]);



});

