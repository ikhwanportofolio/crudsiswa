<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/store', [StudentController::class, 'store']);
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [StudentController::class, 'update']);
    Route::get('/show/{id}', [StudentController::class, 'show']);
    Route::get('/destroy/{id}', [StudentController::class, 'destroy']);

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Route::get('/', [StudentController::class, 'logout'])->name('logout');
});
