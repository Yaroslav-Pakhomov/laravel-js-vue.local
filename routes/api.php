<?php

declare(strict_types = 1);

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request): mixed {
    return $request->user();
});

Route::group(['namespace' => 'Person', 'prefix' => 'people', 'middleware' => 'throttle:6000,1'], static function () {
    Route::get('/', 'IndexController');
    Route::post('/store', 'StoreController');
    Route::patch('/{person}', 'UpdateController');
    Route::delete('/{person}', 'DeleteController');
});

