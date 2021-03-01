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

// llamar al modelo
// use App\Image;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // // Probar orm 
    // $images = Image::all();
    // foreach($images as $r){
    //     echo $r->image_path. "<br/>";
    //     echo '<strong>';
    //     foreach($r->comments as $r){
    //         echo $r->content;
    //     };
    //     echo $r->user->name."<br/>";
    // }
    // die();


    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Rutas de los user
Route::get('/configuracion','UserController@config')    ->name('user.config');
Route::post('/user/edit','UserController@update')       ->name('user.update');
Route::get('/user/avar/{filename}','UserController@getImage')->name('user.avatar');
Route::get('/user/profile/{id}','UserController@profile')->name('user.profile');
Route::get('/users/{search?}','UserController@users')->name('user.users');

// Subir img
Route::get('/subir-imagen','ImageController@create')    ->name('image.create');
Route::post('/image/save','ImageController@save')       ->name('image.save');
// Buscar imagen Pub
Route::get('/image/file/{filename}','ImageController@getImage')->name('image.get');
// Buscar una imagen detail
Route::get('/image/{id}','ImageController@detail')      ->name('image.detail');
Route::post('/comment/save','CommentController@store')  ->name('comment.save');
Route::get('/comment/delete/{id}','CommentController@delete')->name('comment.delete');
// Eliminar imagen
Route::get('/image/delete/{id}','ImageController@delete')     ->name('image.delete');
// Editar Imagen
Route::get('/image/edit/{id}','ImageController@edit')      ->name('image.edit');
Route::post('/imagen/update','ImageController@update')      ->name('image.update');

// Like
Route::get('/like/{image_id}','LikeController@like')    ->name('like.save');
Route::get('/dislike/{image_id}','LikeController@dislike')->name('like.delete');
Route::get('/likes','LikeController@likes')             ->name('like.likes');