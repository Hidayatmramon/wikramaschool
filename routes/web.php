<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


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
    return view('welcome');
});

Route::get('/home', [BlogController::class, 'home']);
Route::get('/home/sejarah', [BlogController::class, 'sejarah']);
Route::get('/home/eskul', [BlogController::class, 'eskul']);
Route::get('/home/martikulasi', [BlogController::class, 'martikulasi']);
Route::get('/home/perpustakaan', [BlogController::class, 'perpustakaan']);
Route::get('/home/kantin', [BlogController::class, 'kantin']);

?>
