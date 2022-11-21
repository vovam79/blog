<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace'=>'Main'], function (){
   Route::get('/','IndexController')->name('main');
});

Route::group(['namespace'=>'Post', 'prefix'=>'post'],function(){
    Route::get('/', 'IndexController')->name('post.index');

    Route::get('/{post}', 'ShowController')->name('post.show');

    Route::group( ['namespace'=>'Comment', 'prefix'=>'{post}/comments'], function(){
        Route::post('/', 'StoreController')->name('post.comment.store');
    });
    Route::group( ['namespace'=>'Like', 'prefix'=>'{post}/like'], function(){
        Route::post('/', 'StoreController')->name('post.like.store');
    });

});
Route::group(['namespace'=>'Category', 'prefix'=>'category'],function(){
    Route::get('/', 'IndexController')->name('category.index');
    Route::get('/{category}', 'ShowController')->name('category.post.index');
});

/*Route::get('/home','HomeController@index')->name('home');*/

Route::group(['namespace'=>'Person', 'prefix'=>'person','middleware'=>['auth','verified']], function (){
    Route::group(['namespace'=>'Main','prefix'=>'main'],function () {
        Route::get('/', 'IndexController')->name('person.main.index');
        /*function(){return view('person.main.index');*/
    });

   Route::group(['namespace'=>'Like','prefix'=>'like'], function(){
       Route::get('/', 'IndexController')->name('person.like.index');
       Route::get('/{like}', 'ShowController')->name('person.like.show');
       Route::delete('/{like}','DeleteController')->name('person.like.delete');
    });
    Route::group(['namespace'=>'Comment', 'prefix'=>'comment'], function(){
        Route::get('/', 'IndexController')->name('person.comment.index');
        Route::get('/{comment}', 'ShowController')->name('person.comment.show');
        Route::get('/{comment}/edit', 'EditController')->name('person.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('person.comment.update');
        Route::delete('/{comment}', 'DeleteController')->name('person.comment.delete');
    });

});

Route::group(['namespace'=>'Admin', 'prefix'=>'admin','middleware'=>['auth','admin','verified']], function (){
    Route::group(['namespace'=>'Main'],function () {
        Route::get('/', 'IndexController')->name('admin.index');
        Route::get('/test', 'TestController')->name('admin.test');
    });
    Route::group(['namespace'=>'category','prefix'=>'categories'], function(){
        Route::get('/','IndexController')->name('admin.category.index');
        Route::get('/create','CreateController')->name('admin.category.create');
        Route::post('/','StoreController')->name('admin.category.store');
        Route::get('/{category}','ShowController')->name('admin.category.show');
        Route::get('/{category}/edit','EditController')->name('admin.category.edit');
        Route::patch('/{category}','UpdateController')->name('admin.category.update');
        Route::delete('/{category}','DeleteController')->name('admin.category.delete');
    });
    Route::group(['namespace'=>'tag','prefix'=>'tags'], function(){
        Route::get('/','IndexController')->name('admin.tag.index');
        Route::get('/create','CreateController')->name('admin.tag.create');
        Route::post('/','StoreController')->name('admin.tag.store');
        Route::get('/{tag}','ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit','EditController')->name('admin.tag.edit');
        Route::patch('/{tag}','UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}','DeleteController')->name('admin.tag.delete');
    });
    Route::group(['namespace'=>'post','prefix'=>'posts'],function (){
        Route::get('/','IndexController')->name('admin.post.index');
        Route::get('/create','CreateController')->name('admin.post.create');
        Route::post('/','StoreController')->name('admin.post.store');
        Route::get('/{post}','ShowController')->name('admin.post.show');
        Route::get('/{post}/edit','EditController')->name('admin.post.edit');
        Route::patch('/{post}','UpdateController')->name('admin.post.update');
        Route::delete('/{post}','DeleteController')->name('admin.post.delete');
    });
    Route::group(['namespace'=>'User','prefix'=>'user'], function(){
        Route::get('/','IndexController')->name('admin.user.index');
        Route::get('/create','CreateController')->name('admin.user.create');
        Route::post('/','StoreController')->name('admin.user.store');
        Route::get('/{user}','ShowController')->name('admin.user.show');
        Route::get('/{user}/edit','EditController')->name('admin.user.edit');
        Route::patch('/{user}','UpdateController')->name('admin.user.update');
        Route::delete('/{user}','DeleteController')->name('admin.user.delete');
    });
    Route::group(['namespace'=>'Role','prefix'=>'role'], function (){
        Route::get('/','IndexController')->name('admin.role.index');
        Route::get('/create','CreateController')->name('admin.role.create');
        Route::post('/','StoreController')->name('admin.role.store');
        Route::get('/{role}','ShowController')->name('admin.role.show');
        Route::get('/{role}/edit','EditController')->name('admin.role.edit');
        Route::patch('/{role}','UpdateController')->name('admin.role.update');
        Route::delete('/{role}','DeleteController')->name('admin.role.delete');
    });

});

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
