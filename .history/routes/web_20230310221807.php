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
    Route::get('/datapengaduan',[App\Http\Controllers\Admin\DataLaporanController::class,"index"])->name('datapengaduan');
    Route::post('/tambahpengguna', [\App\Http\Controllers\Admin\PengaturanAkunController::class,"tambahPengguna"])->name("pengguna.tambah");
    Route::post('/assignpetugas', [\App\Http\Controllers\PengaduanController::class, 'assignpetugas'])->name('admin.assignpetugas');
    Route::post('/updatepetugas', [\App\Http\Controllers\PengaduanController::class, 'updatepetugas'])->name('admin.updatepetugas');
    Route::post('/hapuspengaduan', [\App\Http\Controllers\PengaduanController::class, "deletepengaduan"])


    Route::get('/jenispengaduan', [\App\Http\Controllers\Admin\JenisPengaduanController::class, "index"])->name('admin.jenispengaduan');


    Route::get('/cetaklaporan', [\App\Http\Controllers\Admin\CetakLaporanController::class, "index"])->name('admin.cetaklaporan');
    Route::put('/ubahjenispengaduan', [\App\Http\Controllers\Admin\JenisPengaduanController::class,"ubah"])->name('jenispengaduan.ubah');
    Route::post('/tambahjenispengaduan', [\App\Http\Controllers\Admin\JenisPengaduanController::class,"
    "])->name('jenispengaduan.buat');


    Route::get('/getdatadashboard', [\App\Http\Controllers\Admin\DashboardController::class,"getdata"])->name('dashboard.getdata');


    Route::get('/getsingleuser',[\App\Http\Controllers\Admin\PengaturanAkunController::class, "getSingleUser"])->name("account.getsingleuser");
    Route::put('/hapuspengguna',[\App\Http\Controllers\Admin\PengaturanAkunController::class, "hapusPengguna"])->name("account.delete");

    
});


Route::group(['middleware'=>['role:Admin|Masyarakat']], function(){
    Route::get('/pengaduansaya', [App\Http\Controllers\Masyarakat\MasyarakatController::class, "pengaduansaya"])->name("pengaduan.list.user");
    Route::post('/buatpengaduanuser', [App\Http\Controllers\Masyarakat\MasyarakatController::class, "buatpengaduan"])->name("pengaduan.buat.user");
    Route::get('/pengaturanpengguna', [\App\Http\Controllers\Admin\PengaturanAkunController::class,"index"])->name("pengaturan.pengguna");
    Route::post('/pengaturanpengguna/edit', [\App\Http\Controllers\Admin\PengaturanAkunController::class,"editUser"])->name("pengguna.edit");
    Route::get('/jelajahiaduan', [\App\Http\Controllers\Masyarakat\MasyarakatController::class, "jelajahiaduan"])->name("jelajahiaduan");
});



Route::group(['middleware'=>['role:Admin|Petugas']], function(){
    Route::post("ubahstatuslaporan", [\App\Http\Controllers\PengaduanController::class,"ubahstatus"]);
    Route::get('tugassaya', [\App\Http\Controllers\PenugasanController::class, "tugassaya"])->name('petugas.tugassaya');
    Route::post('getpetugaslist', [\App\Http\Controllers\PengaduanController::class,"getPetugasList"])->name('getpetugaslist');
    Route::get('getsinglepengaduan', [\App\Http\Controllers\PengaduanController::class,"getSingle"])->name('getsinglepengaduan');
    
    Route::get('riwayattugas', [\App\Http\Controllers\Petugas\PetugasController::class,"riwayattugas"])->name('petugas.riwayattugas');
    Route::post('/konfirmasiselesai', [\App\Http\Controllers\PenugasanController::class, "konfirmasiselesai"])->name("petugas.konfirmasiselesai");
   
});

Route::get('profil', [\App\Http\Controllers\PengaturanProfilController::class, "index"])->name('pengaturan.profile');
Route::get('/', [App\Http\Controllers\Masyarakat\MasyarakatController::class, "index"])->name("user.home");
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post("/send-tanggapan",[App\Http\Controllers\PengaduanController::class, "sendtanggapan"])->name("laporan.send-tanggapan");
Route::get("/dapatkanlampiran",[App\Http\Controllers\PengaduanController::class, "getlampiran"])->name("pengaduan.lihatlampiran");
Route::get("/getpenugasan",[App\Http\Controllers\PengaduanController::class, "getpenugasan"])->name("pengaduan.getpenugasan");

Route::post('/perbaruiakun', [ProfileController::class, "update"])->name("user.perbaruiakun");

//REDIRECTOR
route::get('/redirector', [\App\Http\Controllers\RedirectorController::class, "index"])->name("route.redirector");










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
