<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::get("/login",[UserController::class,'login']);
Route::get("/register",[UserController::class,'register']);
Route::post("/login",[UserController::class,'loginUser'])->name('login-user');
Route::post("/register-user",[UserController::class,'registerUser'])->name('register-user');
Route::get('/listUser',[UserController::class,'index']);

Route::get('/addCategory',[CategoryController::class,'addCategory']);
Route::get('/addProduct',[CategoryController::class,'index']);
Route::post('/addProduct',[ProductController::class,'store']);
Route::get('/',[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::get('/filter',[ProductController::class,'filter'] )->name('filter');
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
// admin---------------------------------------------------
Route::get("/admin",[AdminController::class,'index']);
Route::get("/admin/product",[AdminController::class,'index_product']);
Route::get("/admin/product_edit/{id}",[AdminController::class,'edit_product']);
Route::PATCH("/admin/product_update/{id}",[AdminController::class,'update_product']);
Route::DELETE("/admin/product_delete/{id}",[AdminController::class,'destroy_product']);
// color----------------------------------------------------
Route::get("/admin/color",[AdminController::class,'index_color']);
Route::post("/admin/color_insert",[AdminController::class,'store_color']);
Route::get("/admin/color_edit/{id}",[AdminController::class,'edit_color']);
Route::PATCH("/admin/color_update/{id}",[AdminController::class,'update_color']);
Route::DELETE("/admin/color_delete/{id}",[AdminController::class,'destroy_color']);
// size----------------------------------------
Route::get("/admin/size",[AdminController::class,'index_size']);
Route::post("/admin/size_insert",[AdminController::class,'store_size']);
Route::get("/admin/size_edit/{id}",[AdminController::class,'edit_size']);
Route::PATCH("/admin/size_update/{id}",[AdminController::class,'update_size']);
Route::DELETE("/admin/size_delete/{id}",[AdminController::class,'destroy_size']);
// category------------------------------
Route::get("/admin/category",[AdminController::class,'index_category']);
Route::post("/admin/category_insert",[AdminController::class,'store_category']);
Route::get("/admin/category_edit/{id}",[AdminController::class,'edit_category']);
Route::PATCH("/admin/category_update/{id}",[AdminController::class,'update_category']);
Route::DELETE("/admin/category_delete/{id}",[AdminController::class,'destroy_category']);
// Shipping-------------------------------------------------------
Route::get("/admin/shipping",[AdminController::class,'index_shipping']);
Route::post("/admin/shipping_insert",[AdminController::class,'store_shipping']);
Route::get("/admin/shipping_edit/{id}",[AdminController::class,'edit_shipping']);
Route::PATCH("/admin/shipping_update/{id}",[AdminController::class,'update_shipping']);
Route::DELETE("/admin/shipping_delete/{id}",[AdminController::class,'destroy_shipping']);
//payment------------------------------------------------------------
Route::get("/admin/payment",[AdminController::class,'index_payment']);
Route::post("/admin/payment_insert",[AdminController::class,'store_payment']);
Route::get("/admin/payment_edit/{id}",[AdminController::class,'edit_payment']);
Route::PATCH("/admin/payment_update/{id}",[AdminController::class,'update_payment']);
Route::DELETE("/admin/payment_delete/{id}",[AdminController::class,'destroy_payment']);