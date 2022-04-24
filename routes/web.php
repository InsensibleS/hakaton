<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'main']);

Route::get('/iq', [PageController::class, 'iq']);

Route::get('/tasks', [PageController::class, 'tasks']);

Route::get('/personal', [PageController::class, 'personal']);

Route::get('/commerce', [PageController::class, 'commerce']);

Route::get('/analytics', [PageController::class, 'analytics']);

Route::get('/files', [PageController::class, 'files']);

Route::get('/chat', [PageController::class, 'chat']);

Route::get('/camera', [PageController::class, 'camera']);

Route::get('/settings', [PageController::class, 'settings']);

Route::get('/maps', [PageController::class, 'maps']);

Route::get('/map/{id}', [PageController::class, 'getMap']);

Route::get('/maps/create', [PageController::class, 'mapsCreate']);

Route::post('/maps/create', [PageController::class, 'createMap']);

Route::get('popup', [PageController::class, 'popup']);

