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

Route::post('datapegawais', function () {
    return datapegawai::create(request()->all());
});

Route::get('datapegawais', function(){
        return datapegawai::all();
});

Route::get('datapegawais/{datapegawai}', function($id_pegawai){
    return datapegawai::all();
});


Route::put('datapegawais/{datapegawais:id}', [DataPegawaisController::class,'update']);

Route::delete('datapegawais/{datapegawai}', function (datapegawai $datapegawai){
    $datapegawai->delete();
    return 'Data Berhasil Dihapus';
}); 


Route::post('datapelatihans', function () {
    return datapelatihan::create(request()->all());
});

Route::get('datapelatihans', function(){
    return datapelatihan::all();
});

Route::get('datapelatihans/{datapegawai}', function($id) {
    return datapelatihan::find($id);
});

Route::put('datapelatihans/{datapelatihans:id}', [DataPelatihansController::class,'update']);

Route::delete('datapelatihans/{datapelatihan}', function (datapelatihan $datapelatihan){
    $datapelatihan->delete();
    return 'Data Berhasil Dihapus';
}); 


