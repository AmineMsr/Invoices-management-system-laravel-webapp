<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredInvoiceController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Adding Invoice
    Route::post('/invoices/new', [RegisteredInvoiceController::class, 'store']);
    Route::get('/invoices', [RegisteredInvoiceController::class, 'invoicesList'])->name('invoices.show');
    Route::get('/invoices/myinvoice', [RegisteredInvoiceController::class, 'showInvoice'])->name('invoices.invoice');

});

require_once __DIR__ . '/jetstream.php';
