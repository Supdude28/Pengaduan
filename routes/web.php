<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\ValidasiIn;
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



Route::prefix('admin')->group(function(){
    Route::get('/',function(){
        return view('Administrator.index');
    })->middleware(ValidasiIn::class);
    Route::get('login',[AdminController::class,'login']);
    Route::post('login',[AdminController::class,'ceklogin']);
    route::get('logout',[AdminController::class,'logout']);
});

// Route masyarakat
Route::get('/', function () {
    return view('Masyarakat.Index');
});