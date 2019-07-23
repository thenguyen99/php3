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
Route::get('user/{id}/{name}', function ($index, $name) {
    return 'tham so truyen vao la' . $index . '---' . $name;
});
//Route::view('welcome','welcome');
//Route::get('hello','HelloController@index');
Route::get('student','StudentController@index')->name('student');
Route::get('classes', 'ClassRoomController@index')->name('class-room');
Route::get('input','SumController@sumView')->name('sum-view');
Route::post('sum','SumController@sum')->name('sum');