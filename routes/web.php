<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

route::get('/', [HomeController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/
    dashboard', function (){
    return view('dashboard');
})->name('dashboard');

route::get('/redirect',[HomeController::class,'redirect']);
route::get('/view_category',[AdminController::class,'view_category']);
route::post('/add_category',[AdminController::class,'add_category']);
route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
route::get('/view_product',[AdminController::class,'view_product']);
route::post('/add_product',[AdminController::class,'add_product']);
route::get('/show_product',[AdminController::class,'show_product']);
route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/edit_product/{id}',[AdminController::class,'edit_product']);
route::post('/edit_product_confirm/{id}',[AdminController::class,'edit_product_confirm']);
route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
route::get('/home.show_cart',[HomeController::class,'show_cart']);
route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);
route::get('/cash_order',[HomeController::class,'cash_order']);
route::get('/show_order',[AdminController::class,'show_order']);
route::get('/delivered/{id}',[AdminController::class,'delivered']);
route::get('/deleted/{id}',[AdminController::class,'deleted']);