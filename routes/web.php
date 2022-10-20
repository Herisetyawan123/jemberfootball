<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WaliController;
use App\Models\Siswa;
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function() {
    Route::prefix('/dashboard')->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/profile', [SettingController::class, 'index'])->name('dashboard.profile');
    });
    Route::prefix('/wali')->group(function(){
        Route::get('/', [WaliController::class, 'index'])->name('wali.index');
        Route::get('/tambah', [WaliController::class, 'create'])->name('wali.tambah');
        Route::post('/store', [WaliController::class, 'store'])->name('wali.store');
    });
    Route::prefix('/pertandingan')->group(function(){
        Route::get('/', [PostController::class, 'index'])->name('pertandingan.index');
        Route::get('/tambah/{category}', [PostController::class, 'create'])->name('pertandingan.tambah');
    });
    Route::prefix('/pertemuan')->group(function(){
        Route::get('/', [PostController::class, 'meet'])->name('pertemuan.index');
        Route::get('/tambah/{category}', [PostController::class, 'create'])->name('pertemuan.tambah');
    });
    Route::post('/posts/store', [PostController::class, 'store'])->name("posts.store");
    Route::prefix('/pemain')->group(function(){
        Route::get('/', [SiswaController::class, 'index'])->name('pemain.index');
        Route::get('/tambah', [PostController::class, 'create'])->name('pemain.tambah');
    });
});


require __DIR__.'/auth.php';
