<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;

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

Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'hasil']);

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('toko')->group(function () {
    Route::get(
        '/',
        [TokoController::class, 'index']
    );

    Route::get(
        '/profile',
        [TokoController::class, 'profile']
    );

    Route::get(
        '/detail',
        [TokoController::class, 'detail']
    );

    Route::get(
        '/about',
        [TokoController::class, 'about']
    );

    Route::get(
        '/admin',
        [TokoController::class, 'admin']
    )->name('produk.admin');
    
    Route::get(
        '/create',
        [TokoController::class, 'create']
    )->name('produk.create');

    Route::post(
        '/store',
        [TokoController::class, 'store']
    )->name('produk.store');

});
