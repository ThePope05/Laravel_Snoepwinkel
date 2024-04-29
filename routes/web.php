<?php

use App\Http\Controllers\AllergyController;
use App\Http\Controllers\SupplierController;
use App\Models\Allergy;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/allergy', [AllergyController::class, 'index'])->name('allergy.index');

Route::get('/supplier/{supplier}', [SupplierController::class, 'show'])->name('supplier.show');
