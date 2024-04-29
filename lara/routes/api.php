<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\SchoolController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/school',[SchoolController::class,'create']);
Route::get('/school/{id}',[SchoolController::class,'item']);
Route::get('/schools/',[SchoolController::class,'list']);
Route::put('/school/{id}', [SchoolController::class, 'update']);
Route::delete('/school/{id}', [SchoolController::class, 'delete']);
