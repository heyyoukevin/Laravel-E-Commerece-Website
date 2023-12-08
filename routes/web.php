<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemnextController;
use App\Http\Controllers\ShopController;

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

route::get('/',[HomeController::class,'index']);
route::get('/loginpage',[HomeController::class,'loginpage']);
route::get('/registerpage',[HomeController::class,'registerpage']);
route::get('/redirect',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/additem',[ItemController::class,'additem']);
Route::post('/aditem',[ItemController::class,'aditem']);
route::get('/viewitem',[ItemnextController::class,'viewitem']);
Route::get('/edititem/{id}',[ItemnextController::class,'edititem']);
Route::post('/updateitem',[ItemnextController::class,'updateitem']);
Route::post('/deleteitem/{id}',[ItemnextController::class,'deleteitem']);
route::get('/shop',[ShopController::class,'shop']);
Route::get('/viewproddetail/{id}',[ShopController::class,'viewproddetail']);
route::post('/adcart/{id}',[ShopController::class,'adcart']);
route::get('/cart',[ShopController::class,'cart']);