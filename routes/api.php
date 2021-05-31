<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EmpolyeeController;
use App\Models\Candidate;
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
