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
    return view('index');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::post('/addStudent', 'StudentController@addStudent');

