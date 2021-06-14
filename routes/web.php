<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPelatihansController;
use App\Http\Controllers\DataPegawaisController;
use App\Http\Controllers\PengajuanCutiController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EmpolyeeController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\PresensiController;
/*
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

//Dashboard
Route::get('/', function () {
    return view('index');
});

Route::get('/Input', function () {
    return view('InputData');
});

Route::get('/Read', function () {
    return view('ReadPegawai');
});

Route::get('/ReadCuti', function () {
    return view('ReadCuti');
});

Route::get('/ReadPelamar', function () {
    return view('DataPelamar');
});

Route::get('/InputPelatihan', function () {
    return view('InputPelatihan');
});

Route::get('/ReadPelatihan', function () {
    return view('ReadPelatihan');
});

Route::get('UpdatePelatihan', function () {
    return view('UpdatePelatihan');
});

Route::get('/DeletePelatihan', function () {
    return view('DeletePelatihan');
});

Route::get('/DataPegawai', function () {
    return view('DataPegawai');
});

Route::get('/DataPangkat', function () {
    return view('DataPangkat');
});

Route::get('/DataGaji', function () {
    return view('DataGaji');
});
//Pelatihan
Route::get('/DeletePelatihan', [DataPelatihansController::class,'index']);

Route::get('/InputPelatihan', [DataPelatihansController::class,'create']);

Route::post('/DeletePelatihan', [DataPelatihansController::class,'store']);

//Pegawai
Route::get('/Read', [DataPegawaisController::class,'index']);

Route::get('/InputData', [DataPegawaisController::class,'create']);

Route::post('/Read', [DataPegawaisController::class,'store']);

//Cuti
Route::get('/ReadCuti', [PengajuanCutiController::class,'index']);

Route::get('/InputCuti', [PengajuanCutiController::class,'create']);

Route::post('/InputCuti', [PengajuanCutiController::class,'store']);

//Pelamar
Route::get('/ReadPelamar', [CandidateController::class,'index']);

Route::get('InputPelamar', [CandidateController::class,'create']);

Route::post('/DataPelamar', [CandidateController::class,'store']);

//Pegawai
Route::get('/DataPegawai', [EmpolyeeController::class,'index']);

Route::get('InputPegawai', [EmpolyeeController::class,'create']);

Route::post('/InputPegawai', [EmpolyeeController::class,'store']);

//Career
Route::get('/DataPangkat', [CareerController::class,'index']);

Route::get('/InputPangkat', [CareerController::class,'create']);

Route::post('/InputPangkat', [CareerController::class,'store']);

//Salary
Route::get('/DataGaji', [SalaryController::class,'index']);

Route::get('/InputGaji', [SalaryController::class,'create']);

Route::post('/InputGaji', [SalaryController::class,'store']);

//Presensi
Route::get('/ReadPresensi', [PresensiController::class,'index']);

Route::get('/InputPresensi', [PresensiController::class,'create']);

Route::post('/InputPresensi', [PresensiController::class,'store']);

