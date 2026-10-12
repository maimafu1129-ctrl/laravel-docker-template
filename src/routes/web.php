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
//web.phpファイル アクセスされたURLに応じて、どの処理を実行するかを定義する
// ルーティング（URLの案内版）を設定している記述

// ユーザーがトップページにアクセスした時に、welcome.blade.phpを表示する処理を実行する
Route::get('/', function () {
    return view('welcome');
});
// Todo作成画面の表示
Route::get('/todo/create', 'TodoController@create')->name('todo.create');

Route::post('/todo', 'TodoController@store')->name('todo.store');

Route::get('/todo', 'TodoController@index')->name('todo.index');
