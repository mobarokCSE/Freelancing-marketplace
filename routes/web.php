<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\SellerController;
use App\Models\Seller;
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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/freelanweb/info', function () {
    return view('pages.info');
})->name('info');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/',[HomeContoller::class,'home'])->name('home');

Route::get('/redirects',[HomeContoller::class,'index'])->name('header');

Route::get('/buyer/gig-request/{id}',[HomeContoller::class,'buyer_gig'])->name('buyer_req_gig');

Route::get('/buyer/gig-checkout/{id}',[HomeContoller::class,'buyer_gig_checkout'])->name('buyer_gig_checkout')->middleware('auth');

Route::get('/buyer/delivery-work/{id}',[HomeContoller::class, 'delivery_work'])->name('delivery_work');

Route::post('/buyer/order-delivery',[HomeContoller::class, 'orderDelivery'])->name('order.delivary');

Route::get('/seller/apply-work/{id}',[HomeContoller::class, 'applyWork'])->name('apply_work')->middleware('auth');
Route::post('/seller/apply-work-store/',[HomeContoller::class, 'applyWorkStore'])->name('apply_work.store');

Route::post('seller-order-request',[HomeContoller::class, 'sellerOrderRequest']);

// Route::get('buyer/seller-request',[HomeContoller::class, 'sellerRequest'])->name('buyer.sellerRequest');

Route::get('/profile',[HomeContoller::class,'profile'])->name('profile');
Route::get('buyer/profile-edit/{id}',[HomeContoller::class,'buyerProfileEdit'])->name('buyerProfile.edit');
Route::post('buyer/profile-update/{id}',[HomeContoller::class,'buyerProfileUpdate'])->name('buyerProfile.update');


Route::get('/job',[HomeContoller::class,'job'])->name('job');
Route::get('/service',[HomeContoller::class,'service'])->name('service');


// Route::get('/createSeller/{id}',[SellerController::class,'createSeller'])->name('createSeller');


Route::resource('seller',SellerController::class)->middleware('auth');
Route::resource('buyer',BuyerController::class)->middleware('auth');



Route::get('/buyer/seller-request',[BuyerController::class,'sellerRequest'])->name('buyer.sellerRequest');
