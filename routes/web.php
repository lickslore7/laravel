<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
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
Route::delete('/supplier/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index');
Route::get('/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
Route::post('/supplier', [SupplierController::class, 'store'])->name('supplier.store');
Route::get('/supplier/{id}', [SupplierController::class, 'show'])->name('supplier.show');
Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit'])->name('supplier.edit');
Route::put('/supplier/{id}', [SupplierController::class, 'update'])->name('supplier.update');
Route::get('/supplier/getDetails/{id}', [SupplierController::class, 'getDetails']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/table', function () {
    return view('tables');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});