<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\CrapIndex;

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
// Route::get('toughts', '\App\Http\Controllers\ToughtsController@index');

Route::post('toughts', '\App\Http\Controllers\ToughtsController@index');


Route::get('toughts', '\App\Http\Controllers\ToughtsController@index');