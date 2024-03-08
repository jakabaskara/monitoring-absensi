<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KebunBatulicinController;
use App\Http\Controllers\KebunDanauSalakController;
use App\Http\Controllers\KebunGunungEmasController;
use App\Http\Controllers\KebunGunungMeliauController;
use App\Http\Controllers\KebunIntiPandawaController;
use App\Http\Controllers\KebunIntiSungaiDekanController;
use App\Http\Controllers\KebunKembayangController;
use App\Http\Controllers\KebunNgabangController;
use App\Http\Controllers\KebunPamungkasController;
use App\Http\Controllers\KebunParinduController;
use App\Http\Controllers\KebunPelaihariController;
use App\Http\Controllers\KebunPKRTambarangan;
use App\Http\Controllers\KebunPKSLongkaliController;
use App\Http\Controllers\KebunRimbaBelianController;
use App\Http\Controllers\KebunSamuntaiController;
use App\Http\Controllers\KebunTabaraController;
use App\Http\Controllers\KebunTajatiController;
use App\Http\Controllers\PKSGunungMeliauController;
use App\Http\Controllers\PKSLongpinangController;
use App\Http\Controllers\PKSNgabangController;
use App\Http\Controllers\PKSPamungkasController;
use App\Http\Controllers\PKSParinduController;
use App\Http\Controllers\PKSPelaihariController;
use App\Http\Controllers\PKSRimbaBelianController;
use App\Http\Controllers\PlasmakalbarController;
use App\Http\Controllers\ProyekBatubaraController;
use App\Http\Controllers\UGKBController;
use App\Http\Controllers\UGKSKTController;
use App\Http\Controllers\UGKTController;
use Illuminate\Support\Facades\Route;

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
})->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticating']);
Route::get('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('dashboard', [DashboardController::class, 'dashboard']);

Route::get('unit_group_kalbar', [UGKBController:: class, 'unit_group_kalbar']);
Route::get('plasma_kalbar', [PlasmakalbarController::class, 'plasma_kalbar']);
Route::get('kebun_gunung_meliau', [KebunGunungMeliauController::class, 'kebun_gunung_meliau']);
Route::get('pks_gunung_meliau', [PKSGunungMeliauController::class, 'pks_gunung_meliau']);
Route::get('kebun_inti_sungai_dekan', [KebunIntiSungaiDekanController::class, 'kebun_inti_sungai_dekan']);
Route::get('kebun_gunung_emas', [KebunGunungEmasController::class, 'kebun_gunung_emas']);
Route::get('kebun_rimba_belian', [KebunRimbaBelianController::class, 'kebun_rimba_belian']);
Route::get('pks_rimba_belian', [PKSRimbaBelianController::class, 'pks_rimba_belian']);
Route::get('kebun_parindu', [KebunParinduController:: class, 'kebun_parindu']);
Route::get('pks_parindu', [PKSParinduController::class, 'pks_parindu']);
Route::get('kebun_ngabang', [KebunNgabangController::class, 'kebun_ngabang']);
Route::get('pks_ngabang', [PKSNgabangController::class, 'pks_ngabang']);
Route::get('kebun_kembayan', [KebunKembayangController::class, 'kebun_kembayan']);
Route::get('unit_group_kaltim', [UGKTController::class, 'unit_group_kaltim']);
Route::get('kebun_inti_pandawa', [KebunIntiPandawaController::class, 'kebun_inti_pandawa']);
Route::get('kebun_tajati', [KebunTajatiController::class, 'kebun_tajati']);
Route::get('pks_longpinang', [PKSLongpinangController:: class, 'pks_longpinang']);
Route::get('kebun_tabara', [KebunTabaraController::class, 'kebun_tabara']);
Route::get('pks_samuntai', [KebunSamuntaiController::class, 'pks_samuntai']);
Route::get('kebun_pks_longkali', [KebunPKSLongkaliController::class, 'kebun_pks_longkali']);
Route::get('unit_group_kalseng_kalteng', [UGKSKTController::class, 'unit_group_kalseng_kalteng']);
Route::get('kebun_pelaihari', [KebunPelaihariController::class, 'kebun_pelaihari']);
Route::get('pks_pelaihari', [PKSPelaihariController::class, 'pks_pelaihari']);
Route::get('kebun_pkr_tambarangan', [KebunPKRTambarangan::class, 'kebun_pkr_tambarangan']);
Route::get('kebun_danau_salak', [KebunDanauSalakController:: class, 'kebun_danau_salak']);
Route::get('kebun_batulicin', [KebunBatulicinController::class, 'kebun_batulicin']);
Route::get('kebun_pamungkas', [KebunPamungkasController::class, 'kebun_pamungkas']);
Route::get('pks_pamungkas', [PKSPamungkasController::class, 'pks_pamungkas']);
Route::get('proyek_batubara_danau_salak', [ProyekBatubaraController::class, 'proyek_batubara_danau_salak']);
