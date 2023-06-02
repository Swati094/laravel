<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\mycontroller;

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

// Route::view('/','InsertRead');
Route::post('insertData',[mycontroller::class,'insert']);//insertdata
Route::get('/',[mycontroller::class,'readdata']);//get data
// Route::view('update','updateview');
Route::get('updatedelete',[mycontroller::class,'updateordelete']);//updateanddelete
Route::get('updatedata',[mycontroller::class,'update']);//only update

?>
