<?php

use App\Http\Controllers\DataPegawaisController;
use App\Http\Controllers\DataPelatihansController;
use App\Models\datapegawai;
use App\Models\datapelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//DataPegawai
Route::post('datapegawais', function () {
    return datapegawai::create(request()->all());
});

Route::get('datapegawais', function(){
        return datapegawai::all();
});

Route::get('datapegawais/{datapegawai}', function($id_pegawai){
    return datapegawai::all();
});

Route::delete('datapegawais/{datapegawai}', function (datapegawai $datapegawai){
    $datapegawai->delete();
    return 'Data Berhasil Dihapus';
}); 

//DataPelatihan
Route::post('datapelatihans', function () {
    return datapelatihan::create(request()->all());
});

Route::get('datapelatihans', function(){
    return datapelatihan::all();
});

Route::get('datapelatihans/{datapegawai}', function($id) {
    return datapelatihan::find($id);
});

Route::delete('datapelatihans/{datapelatihan}', function (datapelatihan $datapelatihan){
    $datapelatihan->delete();
    return 'Data Berhasil Dihapus';
}); 

//Presensi
Route::get('/', [PresensiController::class,'index']);
Route::post('/presensi', [PresensiController::class,'store']);
Route::get('/presensi/{Presensi:id}', [PresensiController::class,'show']);
Route::delete('/presensi/{Presensi:id}', [PresensiController::class,'destroy']);
Route::put('/presensi/{Presensi:id}', [PresensiController::class,'update']);

//Gaji dan Pangkat
Route::get('/test', [testcontroller::class,'index']);
Route::get('/salary', [SalaryController::class,'index']);
Route::post('/salary', [SalaryController::class,'store']);
Route::get('/salary/{Salary:id}', [SalaryController::class,'show']);
Route::delete('/salary/{Salary:id}', [SalaryController::class,'destroy']);
Route::put('/salary/{Salary:id}', [SalaryController::class,'update']);

Route::get('/career', 'CareerController@index');
Route::post('/career', 'CareerController@store');
Route::get('/career/{Career:id}', 'CareerController@show');
Route::delete('/career/{Career:id}', 'CareerController@destroy');
Route::put('/career/{Career:id}', 'CareerController@update');

//Pelamar dan Pegawai
Route::get('/candidate', [CandidateController::class,'index']);
Route::post('/candidate', [CandidateController::class,'store']);
Route::get('/candidate/{Candidate:id}', [CandidateController::class,'show']);
Route::delete('/candidate/{Candidate:id}', [CandidateController::class,'destroy']);
Route::put('/candidate/{Candidate:id}', [CandidateController::class,'update']);

Route::get('/employee', [EmpolyeeController::class,'index']);
Route::post('/employee', [EmpolyeeController::class,'store']);
Route::get('/employee/{Employee:id}', [EmpolyeeController::class,'show']);
Route::delete('/employee/{Employee:id}', [EmpolyeeController::class,'destroy']);
Route::put('/employee/{Employee:id}', [EmpolyeeController::class,'update']);

//Cuti
Route::get('/pengajuancuti', [PengajuanCutiController::class,'index']);
Route::post('/pengajuancuti', [PengajuanCutiController::class,'store']);
Route::get('/pengajuancuti/{PengajuanCuti:id}', [PengajuanCutiController::class,'show']);
Route::delete('/pengajuancuti/{PengajuanCuti:id}', [PengajuanCutiController::class,'destroy']);
Route::put('/pengajuancuti/{PengajuanCuti:id}', [PengajuanCutiController::class,'update']);



