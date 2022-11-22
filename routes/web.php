<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\CategoryController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[CategoryController::class, 'index']);
Route::get('/category-create',[CategoryController::class, 'create']);
Route::post('/category-store',[CategoryController::class, 'store']);
Route::get('/category-edit/{id}',[CategoryController::class, 'edit']);
Route::put('/category-update/{id}',[CategoryController::class, 'update']);
//Route::get('/category-delete/{id}',[CategoryController::class, 'destroy']);
Route::patch('/category-single-update/{id}',[CategoryController::class, 'patch']);
Route::delete('/category-delete/{id}',[CategoryController::class, 'destroy']);