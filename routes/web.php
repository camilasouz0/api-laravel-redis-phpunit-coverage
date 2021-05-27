<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;

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
    return phpinfo();
});

Route::get('/cat', [CatController::class, 'index'])->middleware(['auth'])->name('inicio');

// Route::get('/testRedis','RedisController@testRedis')->name('testRedis');

require __DIR__.'/auth.php';