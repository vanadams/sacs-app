<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\BeneficiaryFamilyMemberController;

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

Route::get('/sacs/beneficiaries', [BeneficiaryController::class, 'index'])->name('beneficiaries.index');
Route::get('/sacs/beneficiaries/create', [BeneficiaryController::class, 'create'])->name('beneficiaries.create');
Route::post('/sacs/beneficiaries', [BeneficiaryController::class, 'store'])->name('beneficiaries.store');
Route::get('/sacs/beneficiaries/{beneficiary}', [BeneficiaryController::class, 'show'])->name('beneficiaries.show');
Route::get('/sacs/beneficiaries/{beneficiary}/edit', [BeneficiaryController::class, 'edit'])->name('beneficiaries.edit');
Route::put('/sacs/beneficiaries/{beneficiary}', [BeneficiaryController::class, 'update'])->name('beneficiaries.update');
Route::delete('/sacs/beneficiaries/{beneficiary}', [BeneficiaryController::class, 'destroy'])->name('beneficiaries.destroy');

Route::get('/sacs/beneficiaries/{beneficiary}/family-member/create', [BeneficiaryFamilyMemberController::class, 'create'])->name('family_members.create');
Route::post('/sacs/beneficiaries/{beneficiary}/family-member', [BeneficiaryFamilyMemberController::class, 'store'])->name('family_members.store');
Route::get('/sacs/beneficiaries/{beneficiary}/family-member/{familyMember}/edit', [BeneficiaryFamilyMemberController::class, 'edit'])->name('family_members.edit');
Route::put('/sacs/beneficiaries/{beneficiary}/family-member/{familyMember}', [BeneficiaryFamilyMemberController::class, 'update'])->name('family_members.update');
Route::delete('/sacs/beneficiaries/{beneficiary}/family-member/{familyMember}', [BeneficiaryFamilyMemberController::class, 'destroy'])->name('family_members.destroy');
