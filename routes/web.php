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

// Route::resource('supplier', SupplierController::class)->parameters([
//     'supplier' => 'supplier' // Menyesuaikan dengan nama folder Anda
// ]);

Route::resource('supplier', SupplierController::class)->parameters([
    'supplier' => 'supplier' // Menyesuaikan dengan nama folder Anda
]);

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

Route::get('/about', function () {
    return view('about');
});