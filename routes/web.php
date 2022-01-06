<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Csvdatacontroller;


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
Route::get('import' , [Csvdatacontroller::class,"display"]);
Route::post('import1' , [Csvdatacontroller::class,"index"]);
// Route::get('import2' , [Csvdatacontroller::class,"show1"]);

Route::get('dlist', [Csvdatacontroller::class, 'index'])->name('dlist.list');



