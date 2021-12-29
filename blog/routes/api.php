<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

// Fetching Data Through API
Route::get('getData/{id?}',[RegisterController::class,'getData']);

// Inserting Data Through API
Route::post('add',[RegisterController::class,'add']);

// Updating Data Through API
Route::put('update',[RegisterController::class,'update']);

// Deleting Data Through API
Route::delete('delete/{id}',[RegisterController::class,'deleteData']);

// Search Data Through API
Route::get('search/{name}',[RegisterController::class,'search']);