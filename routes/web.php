<?php

use App\Http\Controllers\GuestBookController;
use App\Models\GuestBook;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/tes', function () {
    return view('welcome');
});

Route::post('/store', [GuestBookController::class, 'store']);
Route::put('/update', [GuestBookController::class, 'update']);
Route::delete('/delete', [GuestBookController::class, 'delete']);
