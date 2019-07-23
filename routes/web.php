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
})->name('home');

Auth::routes();

Route::get('/admin', function ()
{
    return redirect()->route('login');
});

Route::get('/register', function ()
{
    return abort(404);
});

Route::prefix('contacts')->group(function ()
{
    Route::get('/', 'ContactController@index')->name('mails.index');
    Route::post('/store', 'ContactController@store')->name('mails.store');
});


