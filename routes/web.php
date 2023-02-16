<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Auth;

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




//Route untuk admin
Route::prefix("admin")->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');
    Route::get('/datalaporan',[App\Http\Controllers\Admin\DataLaporanController::class,"index"])->name('datalaporan');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(App\Http\Controllers\PengaduanController::class)->group(function(){
    Route::post("/tambahpengaduan","tambah")->name("laporan.buat");
    Route::post("/getsinglepengaduan","getsingle")->name("laporan.getsingles");
    Route::post("/getpetugaslist","getpetugaslist")->name("laporan.getpetugaslist");
    Route::post("/getpetugaslist","getpetugaslist")->name("laporan.getpetugaslist");
    Route::post("/assign-petugas","assignpetugas")->name("laporan.assignpetugas");
    
});

Route::post("/send-tanggapan",[App\Http\Controllers\PengaduanController::class, "sendtanggapan"])->name("laporan.send-tanggapan");

Route::get('/tugas-saya', [App\Http\Controllers\PenugasanController::class, "tugassaya"]);


Route::get('/flogout', function(){
    Auth::guard("web")->logout();
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
