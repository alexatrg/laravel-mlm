<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MLMController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MLMController::class, 'index']);
Route::get('mlm', [MLMController::class, 'index']);
Route::get('mlm/tambah', [MLMController::class, 'tambah']);
Route::post('mlm/store', [MLMController::class, 'store']);
Route::get('mlm/edit/{id}', [MLMController::class, 'edit']);
Route::post('mlm/update', [MLMController::class, 'update']);
Route::get('mlm/hapus/{id}', [MLMController::class, 'hapus']);
Route::get('mlm/cari', [MLMController::class, 'cari']);