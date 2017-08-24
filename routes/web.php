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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/change', 'ChangeController@index');
Route::post('/postchange', 'ChangeController@post');
Route::get('/profil', 'ProfilController@index');
Route::post('/postprofil', 'ProfilController@post');

Route::get('/datauser', 'ListinguserController@index');
Route::get('/datauser/post', 'ListinguserController@dataUser');
Route::get('/datauser/{id}/edit', 'ListinguserController@editform');
Route::post('/datauser/postedit', 'ListinguserController@editpost');
Route::get('/datauser/{id}/delete', 'ListinguserController@deleteform');
Route::post('/datauser/postdelete', 'ListinguserController@deletepost');


Route::get('/dataproduct', 'ListingproductController@index');
Route::get('/dataproduct/post', 'ListingproductController@dataProduct');
Route::get('/dataproduct/{id}/edit', 'ListingproductController@editform');
Route::post('/dataproduct/postedit', 'ListingproductController@editpost');
Route::get('/dataproduct/{id}/delete', 'ListingproductController@deleteform');
Route::post('/dataproduct/postdelete', 'ListingproductController@deletepost');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mail', 'MailController@index');
Route::get('/mail/daftar', 'MailController@daftar');
