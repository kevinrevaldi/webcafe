<?php

use App\Http\Controllers\userController;
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

Route::get('/',[userController::class, 'index']);
Route::get('/login_admin',[userController::class, 'login']);
Route::get('/table',[userController::class, 'dataTable']);

Route::fallback(function(){
    return view('pages.404');
});