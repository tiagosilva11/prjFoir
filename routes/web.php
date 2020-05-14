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

Route::get('/companhia/home', 'CompanhiaController@index')->name('home');
Route::get('/companhia/create', 'CompanhiaController@create')->name('create');
Route::get('/companhia/{id}/edit', 'CompanhiaController@edit')->name('edit');

Route::get('/edital/home', 'EditalController@index')->name('home');
Route::get('/edital/create', 'EditalController@create')->name('create');
Route::get('/edital/{id}/edit', 'EditalController@edit')->name('edit');

Route::get('/pelotao/home', 'PelotaoController@index')->name('home');
Route::get('/pelotao/create', 'PelotaoController@create')->name('create');
Route::get('/pelotao/{id}/edit', 'PelotaoController@edit')->name('edit');

Route::get('/aluno/home', 'AlunoController@index')->name('home');
Route::get('/aluno/create', 'AlunoController@create')->name('create');
Route::get('/aluno/{id}/edit', 'AlunoController@edit')->name('edit');
Route::get('/aluno/{id}/retornaId', 'AlunoController@retornaId')->name('edit');

Route::get('/observacao/{id}/edit', 'ObservacaoController@edit')->name('edit');
Route::get('/observacao/create', 'ObservacaoController@create')->name('create');
Route::get('/observacao/home', 'ObservacaoController@index')->name('home');

Route::get('/layouts/menus', 'PelotaoController@index')->name('home');

Route::get('admin', function(){
  return view('admin_template');
});

Route::resource('companhias', 'CompanhiaController')->middleware('auth');
Route::resource('editals', 'EditalController')->middleware('auth');
Route::resource('pelotaos', 'PelotaoController')->middleware('auth');
Route::resource('alunos', 'AlunoController')->middleware('auth');
Route::resource('observacaos', 'ObservacaoController')->middleware('auth');

Auth::routes();

Route::group(['middleware'=>'auth'], function () {
	Route::get('permissions-all-users',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']);
	Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin|superadmin','uses'=>'HomeController@adminSuperadmin']);
	Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);
});
Route::get('/home', 'HomeController@index')->name('home');
