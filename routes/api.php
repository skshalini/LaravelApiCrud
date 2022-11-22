<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("lists",[ApiController::class,'lists']);

Route::get("list/{id}",[ApiController::class,'list']);

Route::Post("list",[ApiController::class,'create']);

Route::Put("list/{id}",[ApiController::class,'update']);

Route::Patch("list/{id}",[ApiController::class, 'patch']);

Route::delete("list/{id}/delete",[ApiController::class,'destroy']);




/*Route::get('/get-data', function() {
    return "Routed";
});

Route::any('/test', function() {
      echo "Successfully accepted";*/