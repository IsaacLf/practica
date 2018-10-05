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
Route::get('/1', function() {
    return view('practices/ejercicio1');
});
Route::get('/2', function() {
    return view('practices/ejercicio2');
});
Route::get('/3', function() {
    return view('practices/ejercicio3');
});
Route::get('/4', function() {
    return view('practices/ejercicio4');
});

/** Public routes */
Route::get('/chess/main', function() {
    return view('chess/main');
});
Route::get('/chess/info', function() {
    return view('chess/info');
});

/** Language  routs */
Route::get('/chess/language', function() {
    return view('chess/language/language');
});
Route::get('/chess/language/info', function() {
    return view('chess/language/info');
});

/** Documentation routes */
Route::get('/chess/doc/helloworld', function() {
    return view('chess/doc/helloworld');
});
Route::get('/chess/doc/classes', function() {
    return view('chess/doc/classes');
});
Route::get('/chess/doc/methods', function() {
    return view('chess/doc/methods');
});

/** Gallery Routes */
Route::get('/chess/gallery/images', function() {
    return view('chess/gallery/images');
});
Route::get('/chess/gallery/other', function() {
    return view('chess/gallery/other');
});

/** About routes */
Route::get('/chess/about', function() {
    return view('chess/about/language');
});
Route::get('/chess/about/team', function() {
    return view('chess/about/team');
});