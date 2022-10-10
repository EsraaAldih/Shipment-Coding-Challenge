<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\JournalController;


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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/shipments/create',[ShipmentController::class,'create'])->name('shipments.create');
Route::get('/shipments',[ShipmentController::class,'index'])->name('shipments');
Route::POST('/shipments/search',[ShipmentController::class,'search'])->name('shipments.search');

Route::post('/shipments/store',[ShipmentController::class,'store'])->name('shipments.store');
Route::get('/shipments/{shipment}/edit',[ShipmentController::class,'edit'])->name('shipments.edit');
Route::get('/shipments/{shipment}',[ShipmentController::class,'show'])->name('shipments.show');
Route::put('/shipments/{shipment}',[ShipmentController::class,'update'])->name('shipments.update');
Route::delete('/shipments/{shipment}',[ShipmentController::class,'destroy'])->name('shipments.destroy');
// Route::resource('shipments',ShipmentController::class)->names([
//     'create' => 'shipments.create',
//     'store' => 'shipments.store',
// ]);
// Route::resource('/journals', JournalController::class);


Route::POST('/journals/search',[JournalController::class,'search'])->name('journals.search');
Route::get('/journals/create',[JournalController::class,'create'])->name('journals.create');
Route::get('/journals',[JournalController::class,'index'])->name('journals');
Route::post('/journals/store',[JournalController::class,'store'])->name('journals.store');

 


