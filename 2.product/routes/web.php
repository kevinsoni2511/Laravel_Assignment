<?php

use App\Http\Controllers\ProductController;
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

Route:: post('/submit-form',[ProductController::class,'submitForm']);
Route::get('/form',[ProductController::class,'form']);

Route::get('/', function () {
    return view('CreateEntryForm');
});
Route::get('/form', function () {
    return view('form');
});
