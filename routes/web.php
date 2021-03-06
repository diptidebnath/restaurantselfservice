<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ImportExportController;

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

Route::get('/', [PizzaController::class, 'listingPizza']);
Route::get('listOrders', [OrderController::class, 'listOrders']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('pizza', PizzaController::class)->middleware('auth');
Route::resource('order', OrderController::class);
Route::get('createorder/{id}', [PizzaController::class, 'showProduct']);

Route::get('import-export', [ImportExportController::class, 'importExport']);
Route::post('import-file', [ImportExportController::class, 'importFile'])->name('import-file');
Route::get('export-file', [ImportExportController::class, 'exportFile'])->name('export-file');



require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
