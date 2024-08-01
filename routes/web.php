<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\homecontrollers;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\usercontrollers;
use App\Http\Controllers\MapController;

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

// Route::head('/', function () {
//     return view('front-end.home');
// });

route::get('login',[usercontrollers::class,'login']);
route::post('user_login',[usercontrollers::class,'user_login']);
route::get('register',[usercontrollers::class,'register']);
route::post('user_register',[usercontrollers::class,'user_register']);




route::get('/',[homecontrollers::class,'home']);
route::get('home',[homecontrollers::class,'home']);
route::get('about',[homecontrollers::class,'about']);
route::get('discography',[homecontrollers::class,'discography']);
route::get('tour',[homecontrollers::class,'tour']);
route::get('contact',[homecontrollers::class,'contact']);
route::post('contact_send',[homecontrollers::class,'contact_send']);
route::get('tickets/{id}', [homecontrollers::class, 'buyTicket'])->name('tickets');
route::post('buy_ticket/{id}', [homecontrollers::class, 'buy_ticket'])->name('buy_ticket');


route::get('admin-dashboard',[admincontroller::class,'dashboard']);
route::get('admin-category',[admincontroller::class,'category']);
route::get('add_categeroy',[AdminController::class,'add_categeroy']);
route::post('get_categeroy',[AdminController::class,'get_categeroy']);
route::get('delete_categeroy/{id}',[AdminController::class,'delete_categeroy']);
route::get('c_edit/{id}',[AdminController::class,'c_edit']);
route::post('edit_c/{id}',[AdminController::class,'edit_c']);

route::get('admin-event',[admincontroller::class,'event']);
route::get('add_event',[admincontroller::class,'add_event']);
route::post('get_event',[admincontroller::class,'get_event']);
route::get('delete_event/{id}',[admincontroller::class,'delete_event']);
route::get('e_edit/{id}',[admincontroller::class,'e_edit']);
route::post('edit_e/{id}',[admincontroller::class,'edit_e']);


Route::get('/create-order', [PaymentController::class, 'createOrder'])->name('payment.create');
Route::post('/payment-callback', [PaymentController::class, 'paymentCallback'])->name('payment.callback');

Route::post('payment-callback', [homecontrollers::class, 'paymentCallback'])->name('payment.callback');


Route::post('/save-coordinates', [MapController::class, 'saveCoordinates'])->name('save_coordinates');
route::get('map', [MapController::class, 'map'])->name('map');