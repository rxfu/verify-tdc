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
	return redirect('home');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('get-certificates', 'HomeController@getCertificates')->name('certificates.list');

Route::get('query', 'CertificateController@showQueryForm')->name('query');
Route::post('query', 'CertificateController@query');
Route::get('show', 'CertificateController@show')->name('certificate.show');
