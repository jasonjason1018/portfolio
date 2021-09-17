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
//index
Route::get('/', function () {
    return view('welcome');
});
//--------------------------------------------------------------------------
//knorr
Route::get('/knorr', function () {
    return view('knorr.index');
});
Route::get('/questions', function () {
    return view('knorr.questions');
});
Route::get('/recipelist', 'KnorrController@recipelist');
Route::get('/event', function () {
    return view('knorr.event');
});
Route::get('/sales', 'KnorrController@sales');
Route::post('/knorr_result', 'KnorrController@result');
Route::get('/knorr_form', function () {
    return view('knorr.form');
});
Route::get('/recipe1/{id}', 'KnorrController@recipe1');
Route::get('/recipe2/{id}', 'KnorrController@recipe2');
Route::post('/congratulations', 'KnorrController@congratulations');
Route::get('/check/{Q1}/{Q2}', 'KnorrController@check');

//--------------------------------------------------------------------------
//fukushima
Route::get('/fukushima', function () {
    return view('fukushima.index');
});
Route::get('/qa', function () {
    return view('fukushima.qa');
});
Route::get('/a', function () {
    return view('fukushima.result-a');
});
Route::get('/b', function () {
    return view('fukushima.result-b');
});
Route::get('/c', function () {
    return view('fukushima.result-c');
});
Route::get('/d', function () {
    return view('fukushima.result-d');
});
Route::get('/e', function () {
    return view('fukushima.result-e');
});
Route::get('/fukushima_form', function () {
    return view('fukushima.form');
});
Route::post('/data', 'FukushimaController@data');
Route::get('/share', function () {
    return view('fukushima.share');
});
//--------------------------------------------------------------------------
//fukushima_forest
Route::get('/fukushima_forest', 'FukushimaforestController@index');
Route::get('/info/{no}', 'FukushimaforestController@info');
Route::get('/qa/{no}', 'FukushimaforestController@qa');
Route::get('/form', 'FukushimaforestController@form');
Route::post('/share', 'FukushimaforestController@share');
//--------------------------------------------------------------------------
//fukushima_database
Route::get('/fukushima_database', function () {
    return view('fukushima_database.index');
});
Route::post('/login', 'FukushimadatabaseController@login');
Route::get('/logout', 'FukushimadatabaseController@logout');
Route::get('/delete/{id}', 'FukushimadatabaseController@delete');
Route::post('/update', 'FukushimadatabaseController@update');
Route::post('/update_data', 'FukushimadatabaseController@update_data');
Route::get('/index', 'FukushimadatabaseController@index');
//--------------------------------------------------------------------------
//skoda_ecard
Route::get('/skoda_ecard', 'SkodaecardController@index');
Route::post('/result', 'SkodaecardController@result');
Route::get('/card/{id}', 'SkodaecardController@card');
//--------------------------------------------------------------------------
//SideProject
Route::get('/mySideProject', 'SideProjectController@test');
Route::get('/mySideProject_index', 'SideProjectController@check_login');
Route::get('/mySideProject_room', 'SideProjectController@room');