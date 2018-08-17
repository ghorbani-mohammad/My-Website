<?php

use App\Post;
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

Route::view('/','index');
Route::view('/about','about');
Route::get('/projects',function(){
    $posts=Post::where('type','proj')->latest()->get();
    return view('posts.projects',compact('posts'));

});
Route::view('/daftarMap','dMap');
Route::view('/kargahMap','kMap');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('posts', 'PostController');
Route::get('blog','PostController@index');

Route::post('/posts/{post}/comments', 'CommentController@store');
Route::post('/comments/bot.php', 'CommentController@control');
