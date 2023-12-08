<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Models\User;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Admin

route::get('/product',[AdminController::class, 'product']);

route::post('/uploadproduct',[AdminController::class, 'uploadproduct']);


route::get('/showproduct',[AdminController::class, 'showproduct']);


route::get('/deleteproduct/{id}',[AdminController::class, 'deleteproduct']);

route::get('/updateview/{id}',[AdminController::class, 'updateview']);


route::post('/updateproduct/{id}',[AdminController::class, 'updateproduct']);

route::get('/showorder',[AdminController::class, 'showorder']);


route::get('/updatestatus/{id}',[AdminController::class, 'updatestatus']);


// User
route::get('/redirect',[HomeController::class, 'redirect']);

route::get('/',[HomeController::class, 'index']);


route::get('/search',[HomeController::class, 'search']);


route::post('/addcart/{id}',[HomeController::class, 'addcart']);


route::get('/showcart',[HomeController::class, 'showcart']);


route::get('/delete/{id}',[HomeController::class, 'deletecart']);


route::post('/order',[HomeController::class, 'confirmorder']);


// Seller
// Route::middleware(['auth'])->group(function () {
//     Route::get('/sellerproduct', [SellerController::class, 'sellerproduct']);
//     Route::post('/selleruploadproduct', [SellerController::class, 'selleruploadproduct']);
// });

Route::get('/userlist',[SellerController::class, 'index'])->name('userlist');

Route::get('/updateuser/{id}',[SellerController::class, 'showuser'])->name('edituser');
Route::post('/updateuser/{id}',[SellerController::class, 'updateuser'])->name('updateuser');
Route::get('/deleteuser/{id}',[SellerController::class, 'deleteuser'])->name('deleteuser');

// })->middleware(['auth','verified', 'role:seller'])->name('userlist');
