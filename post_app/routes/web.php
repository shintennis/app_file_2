<?php

use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/', 'PostController@index')->name('index');
    
    Route::get('/create', 'PostController@create')->name('create');
    Route::post('/store', 'PostController@store')->name('store');
    
    Route::get('/edit', 'PostController@edit')->name('edit');
    Route::post('/update', 'PostController@update')->name('update');
    
    Route::get('/delete', 'PostController@delete')->name('delete');
    
    Route::get('/profile', 'PostController@profile')->name('profile');
    Route::post('/upload', 'PostController@upload')->name('upload');
});
