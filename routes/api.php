<?php

use App\Http\Controllers\GeometryController;
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


Route::get('/triangle/{side_a}/{side_b}/{side_c}',                                [GeometryController::class, 'triangle']);
Route::get('/circle/{radius}',                                                    [GeometryController::class, 'circle']);
