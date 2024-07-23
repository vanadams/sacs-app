<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaryController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('sacs', BeneficiaryController::class);

Route::get('/sacs/beneficiaries', [BeneficiaryController::class, 'index'])->name('beneficiaries.index');
Route::get('/sacs/beneficiaries/create', [BeneficiaryController::class, 'create'])->name('beneficiaries.create');
Route::post('/sacs/beneficiaries', [BeneficiaryController::class, 'store'])->name('beneficiaries.store');
Route::get('/sacs/beneficiaries/{/beneficiary}', [BeneficiaryController::class, 'show'])->name('beneficiaries.show');
Route::get('/sacs/beneficiaries/{beneficiary}/edit', [BeneficiaryController::class, 'edit'])->name('beneficiaries.edit');
Route::put('/sacs/beneficiaries/{beneficiary}', [BeneficiaryController::class, 'update'])->name('beneficiaries.update');
Route::delete('/sacs/beneficiaries/{beneficiary}', [BeneficiaryController::class, 'destroy'])->name('beneficiaries.destroy');
