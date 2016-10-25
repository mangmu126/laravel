<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware'=>['web']],function(){
	Route::get('/',function(){
		return view('welcome');
	});
	Route::get('admin/login','Admin\LoginController@login');
	Route::get('admin/code','Admin\LoginController@code');
	Route::get('admin/getcode','Admin\LoginController@getcode');
});


//Route::get('test','Admin\IndexController@index');

//Route::get('test',['as'=>'profile','user'=>'Admin\IndexController@index']);
//
//Route::get('user',['as'=>'profile',function(){
//	echo route('profile');
//	return '<h1>命名路由</h1>';
//}]);
//Route::get('/',function(){
//	return view('welcome');
//});
//Route::get('view','ViewController@index');
//Route::get('mao','ViewController@views');

//Route::match(['get', 'post'], '/', function () {
//  echo 'haha';
//});

/**
 * 必选参数
 */
//Route::get('user/{id}',function($id){
//		return 'User '.$id;
//});
// 可以按需要在路由定义多个参数:
//Route::get('posts/{post}/comments/{comment}',function($postId,$commentId){
//	echo 'posts '.$postId.'---- comments '.$commentId;
//});

// 可选参数
//Route::get('user/{name?}',function($name=null){
//	return $name;
//});

//Route::get('user/{name?}',function($name='John'){
//	return $name;
//});


// 正则约束
/*
Route::get('user/{name}',function($name){
	echo '字符的';
})->where('name','[A-Za-z]+');
//Route::get('user/{id}',function($name){
//	echo '数字的';
//})->where('id','[0-9]+');
Route::get('user/{id}/{name}',function($id,$name){
	echo '字符与数字';
})->where(['id'=>'[0-9]+','name'=>'[a-z]+']);

// 全局约束
Route::get('user/{id}',function($name){
	echo '数字的';
});

*/

//Route::get('user/profile', [
//  'as' => 'profile', 'uses' => 'PasswordController@index'
//]);




