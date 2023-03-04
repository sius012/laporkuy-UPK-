<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware'=> ["role:Admin"],"prefix"=>"admin"], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');
    Route::get('/datalaporan',[App\Http\Controllers\Admin\DataLaporanController::class,"index"])->name('datalaporan');
    Route::post('/tambahpengguna', [\App\Http\Controllers\Admin\PengaturanAkunController::class,"tambahPengguna"])->name("pengguna.tambah");
});


Route::group(['middleware'=>['role:Admin|Masyarakat']], function(){
    Route::get('/pengaduansaya', [App\Http\Controllers\Masyarakat\MasyarakatController::class, "pengaduansaya"])->name("pengaduan.list.user");
    Route::post('/buatpengaduanuser', [App\Http\Controllers\Masyarakat\MasyarakatController::class, "buatpengaduan"])->name("pengaduan.buat.user");
    Route::get('/pengaturanpengguna', [\App\Http\Controllers\Admin\PengaturanAkunController::class,"index"])->name("pengaturan.pengguna");
    
});



Route::group(['middleware'=>['role:Admin|Petugas']], function(){
    Route::post("ubahstatuslaporan", [\App\Http\Controllers\PengaduanController::class,"ubahstatus"]);
});

//General Route
Route::middleware('auth')->group(function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post("/send-tanggapan",[App\Http\Controllers\PengaduanController::class, "sendtanggapan"])->name("laporan.send-tanggapan");
});













//Route untuk admin
Route::prefix("admin")->group(function(){
   
});


Route::middleware('auth')->group(function () {
   
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
















Route::get('/flogout', function(){
    Auth::guard("web")->logout();
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
