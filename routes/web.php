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

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')-> middleware('verified');

Route::get('/', function () {

    return 'Home';
});

route::get('/dashboard',function (){
   return'dashboard';
});

/*
route::get('index','Front\UserController@getIndex');


Route::get('/test1', function () {
    return 'welcome';
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

//route parameters

Route::get('/show-number/{id}', function ($id) {
    return $id;
});

Route::get('/show-string/{id?}', function () {
    return 'welcome';
});

// route name
/*Route::namespace('Front')->group(function(){
    //all routes only access controller or methods only from Front
    route::get('users','UserController@showUserName');
});
*/

//without route prefix
//route group means st of routes
/*
route::prefix('users') ->group(function (){
    route::get('users/show','UserController@showUserName');
    route::delete('users/delete','UserController@showUserName');
    route::get('users/edit','UserController@showUserName');
    route::put('users/update','UserController@showUserName');
});
*/

//with route prefix
/*
route::prefix('users') ->group(function (){
    route::get('show','UserController@showUserName');
    route::delete('delete','UserController@showUserName');
    route::get('edit','UserController@showUserName');
    route::put('update','UserController@showUserName');
});
*/

/*route::group(['prefix'=>'users','middleware' => 'auth'], function (){
    //set of routes

    route::get('/',function (){
       return 'work';
    });
    route::get('show','UserController@showUserName');
    route::delete('delete','UserController@showUserName');
    route::get('edit','UserController@showUserName');
    route::put('update','UserController@showUserName');
});
*/
//middleware for single route example
/*route::get('check',function (){
    return 'middleware';
    })->middleware('auth');
*/
/*
Route::group(['namespace'=>'Admin'],function(){
    route::get('second','SecondController@showString0');
    route::get('second1','SecondController@showString1');
    route::get('second2','SecondController@showString2');
    route::get('second3','SecondController@showString3');

});

route::get('login',function (){
    return 'must be login to access this route';
}) ->name('login');

/*route::get('users','UserController@index');
*/
/*
Route::group(['middleware'=>'auth'],function(){
    route::get('users','UserController@index');

});*/
/*
route::resource('news','NewsController');
*/
