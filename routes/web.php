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

// Route::get('/cobaform', function () {
//     return view('auth.cobaform');
// });

Route::get('/','HomeController@index')->name('external');

Route::get('/about','AboutController@index')->name('about');

Route::get('/contact','ContactController@index')->name('contact');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/do_login','AuthController@do_login')->middleware('login');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::get('/register', 'AuthController@register')->name('register');
Route::post('/do_register','AuthController@do_register')->middleware('register');

Route::post('/do_filldata', 'AuthController@do_filldata');
Route::get('/filldata', 'AuthController@filldata')->name('filldata');
Route::post('/do_filldata1', 'AuthController@do_filldata1');
Route::post('/do_filldata2', 'AuthController@do_filldata2');
Route::post('/do_filldata3', 'AuthController@do_filldata3');
Route::post('/do_filldata4', 'AuthController@do_filldata4');

Route::group(['middleware' => ['grouphome']], function () {
	
	Route::get('/home','HomeController@index')->name('home');

    Route::get('/profile','AuthController@show_myprofile')->name('profile');
	Route::get('/profile/{username}','AuthController@show_profile');

	Route::get('/members','MemberController@index')->name('members');
	
	Route::get('/news','NewsController@index')->name('news');
	Route::get('/news/{id}', 'NewsController@detail')->name('detail');
	Route::post('/do_comment','NewsController@do_comment')->name('do_comment');
	Route::post('/do_like', 'NewsController@do_like');
	Route::get('/create_news',array('as'=>'summernote.get','uses'=>'NewsController@getSummernote'));
	Route::post('/do_create_news',array('as'=>'summernote.post','uses'=>'NewsController@postSummernote'));

	Route::get('/nearme','NearmeController@index')->name('nearme');

	Route::get('/members/admin','MemberController@admin_view');
	Route::post('/members/add','MemberController@admin_add');
	Route::get('/members/delete/{nrp}','MemberController@admin_delete');
});

//Route::get('summernote',array('as'=>'summernote.get','uses'=>'NewsController@getSummernote'));
//Route::post('summernote',array('as'=>'summernote.post','uses'=>'NewsController@postSummernote'));



