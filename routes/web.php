<?php

use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\PostdbController;
use App\Models\postdb;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('post',[Postcontroller::class,'index']);
Route::get('post/create',[Postcontroller::class,'create']);
Route::post('post/insert',[Postcontroller::class,'insert'])->name(name:'post.insert');

Route::resource('postdb',PostdbController::class);