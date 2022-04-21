<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
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
Route::get('/', function () {
    return view('showcase.welcome');
});

Route::get('/travels', [TravelController::class, 'all']);
Route::post('/travels', [TravelController::class, 'create']);

Route::get('/travels/edit/{id}', [TravelController::class, 'change']);
Route::post('/travels/edit/{id}', [TravelController::class, 'update']);

Route::get('/travels/add', [TravelController::class, 'add']);

Route::get('/search', [TravelController::class, 'search']);

Route::get('/travels/delete-data/{id}', [TravelController::class, 'deletedata']); 
