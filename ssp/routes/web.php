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

Route::get('/claims', 'claimsFormController@index');
Route::post('/claims', 'claimsFormController@save');

Route::get('/feedback', 'feedBackController@index');

Route::post('/feedback', 'feedBackController@save');


Route::get('/print', function () {
    return view('print');
});

Route::get('/printFeedBack', function () {
    return view('printFeedBack');
});

/* Route::get('/claims', function () {
    return view('claims');
}); */
