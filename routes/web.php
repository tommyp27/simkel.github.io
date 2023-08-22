<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\AnggotakelController;
use App\Http\Controllers\DebugController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\NamakkController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ProfileController;
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
    return view('frontend.master');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('/penduduk',[PendudukController::class,'index']);
    route::post('/penduduk',[PendudukController::class,'store']);
    route::get('/addpddk',[PendudukController::class,'addpddk']);

    route::get('/namakk',[NamakkController::class,'index']);
    route::get('/addkk',[NamakkController::class,'create']);
    route::post('/namakk',[NamakkController::class,'store']);
    route::get('/detail/{id}',[NamakkController::class,'detail']);

    route::get('/addanggota/{id}',[AnggotakelController::class,'create']);

    });

    route::get('/agama',[AgamaController::class,'agama']);



require __DIR__.'/auth.php';


route::get('/redirect',[HomeController::class,'redirect']);

// buat coba-coba
route::get('/debug',[DebugController::class,'index']);