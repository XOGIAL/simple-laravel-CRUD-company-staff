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




Auth::routes();

Route::group([ 'middleware' => 'auth'],function()
{
    Route::get('/','perusahaancontroller@index')->name('perusahaanindex');

    Route::get('/addperusahaan', 'perusahaancontroller@addview')->name('addview');
    
    Route::post('/addperusahaan', 'perusahaancontroller@store')->name('addperusahaan');
    
    Route::delete('/delete/{id}', 'perusahaancontroller@delete')->name('deleteperusahaan');
    
    Route::get('/addkaryawan/{id}', 'karyawancontroller@viewadd')->name('addkaryawanview');
    
    Route::post('/addkaryawan/{id}', 'karyawancontroller@store')->name('addkaryawan');
    
    Route::get('/listkaryawan/{id}', 'karyawancontroller@list')->name('listkaryawan');
    
    Route::delete('/listkaryawan/{id}', 'karyawancontroller@delete')->name('deletekaryawan');
    
    Route::get('/editperusahaan/{id}','perusahaancontroller@edit')->name('editperusahaan');
    
    Route::patch('/editperusahaan/{id}','perusahaancontroller@update')->name('updateperusahaan');
    
    Route::get('/editkaryawan/{id}','karyawancontroller@edit')->name('editkaryawan');
    
    Route::patch('/updatekaryawan/{id}','karyawancontroller@update')->name('updatekaryawan');
});

Route::get('/home', 'HomeController@index')->name('home');
