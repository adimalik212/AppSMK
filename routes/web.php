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

Route::get('/', function () { return view('pages/dashboard'); });
Route::get('ptk', 'ptks@index');
Route::POST('addPtk','ptks@store');
Route::get('addPtk', 'ptks@create');
Route::get('editPtk/{ptk}', 'ptks@edit');
Route::patch('editPtk/{ptk}', 'ptks@update');
Route::patch('editImg/{ptk}', 'ptks@editImg');
Route::delete('hapusPtk/{ptk}', 'ptks@destroy');

Route::get('pd', 'pds@index');
Route::get('addPd', 'pds@create');
Route::POST('addPd', 'pds@store');

Route::get('romble', 'rombles@index');
Route::POST('addRomble', 'rombles@store');
