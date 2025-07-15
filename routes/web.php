<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'home']);
Route::get('/dashboard',[HomeController::class,'dashbard_home'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('home.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth',Admin::class]);
Route::get('viewcategory',[AdminController::class,'vcategory'])->middleware(['auth',Admin::class]);;
Route::post('addcategory',[AdminController::class,'addcategory'])->middleware(['auth',Admin::class]);;
Route::get('deletecategory/{id}',[AdminController::class,'deletecategory'])->middleware(['auth',Admin::class]);;
Route::get('showedit/{id}',[AdminController::class,'showedit'])->middleware(['auth',Admin::class]);;
Route::put('/updatecetorgy/{id}',[AdminController::class,'update'])->middleware(['auth',Admin::class]);
Route::get('addproduct',[AdminController::class,'addproduct'])->middleware(['auth',Admin::class]);
Route::post('storeproduct',[AdminController::class,'storeproduct'])->name('storeproduct');
Route::get('viewproduct',[AdminController::class,'viewproduct']);
Route::get('deleteproduct/{id}',[AdminController::class,'deleteproduct']);
Route::get('editproduct/{id}',[AdminController::class,'editproduct']);
Route::post('updateproduct/{id}',[AdminController::class,'updateproduct']);
Route::get('searchproduct',[AdminController::class,'searchproduct']);
Route::get('productdetail/{id}',[HomeController::class,'productdetail'])->middleware(['auth', 'verified']);
Route::get('addcart/{id}',[HomeController::class,'addcart'])->middleware(['auth', 'verified']);
Route::get('cartdetail',[HomeController::class,'cartdetail']);
Route::get('deleteid/{id}',[HomeController::class,'deleteid']);
Route::post('placeorder',[HomeController::class,'placeorder']);
Route::get('viewcustomer',[AdminController::class,'viewcustomer']);
Route::get('ontheway/{id}',[AdminController::class,'ontheway']);
Route::get('deliver/{id}',[AdminController::class,'deliver']);
Route::get('printpdf/{id}',[AdminController::class,'printpdf']);
