<?php

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

Route::get('/', function () {
    return view('welcome');
    //return view('home');
});


Route::get('/livros/listar','BooksController@index');
Route::get('/livros/gravar','BooksController@registar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/backoffice', 'BAckOffieController@index')->name('home');


Route::prefix('backoffice')->group(function () {
    Route::get('/', 'BAckOffieController@index')->name('home');
    Route::get('/livros/listar','BooksController@listar')->name('listarlivros');
    Route::get('/livros/registar','BooksController@registar')->name('registarlivros');
    Route::post('/livros/gravar','BooksController@store')->name('livros.gravar');
});

//teste com rotas 
Route::get('/admin','AuthController@dashboard')->name('admin');
Route::get('/admin/login','AuthController@showlogin')->name('admin.login');