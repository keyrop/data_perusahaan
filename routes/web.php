<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\GajiController;

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


Route::get('/hello', function () {
    echo "Hello word";
});
Route::get('/hei', function () {
    return view("hei");
})->name("hei");


//route::get("/hii/{nama}", [TestingController::class, "hii"])->name("hii");


// Route::get("/home/", [HomeController::class, "rumah"])->name("Rumah");

// Route::get("/UMKT", [HomeController::class, "umkaltim"])->name("UMKALTIM");

// route::get("KALTIM", [HomeController::class, "kalimantan"])->name("Samarinda");

// route::get("MATAKULIAH", [HomeController::class, "jadwal"])->name("Jadwalkuliah");

// route::get("/salam/{nama}", [HomeController::class, "introduction"])->name("hii");

// Route::get("DATAKEUANGAN", [HomeController::class, "keuangan"])->name("Uangbulanan");

// route::get("/hii/{nama}", function($nama) {
//     echo "hii $nama";
// })->name("hii");

// route::get("/hii/{nama}/{gender}", function($nama) {
//     echo "hii $nama";
// })->name("hii");


Route::get('/index', function () {
    return view("index");
});

Route::get("/tampil-semua-user", [UserController::class,"tampil"])->name("user");
Route::get("/input-user", [UserController::class,"formInput"])->name( "user_input");
Route::post("/simpan-user", [UserController::class,"simpan"])->name( "user_simpan");

Route::get("/edit-user/{id}", [UserController::class,"formEdit"])->name( "user_edit");
Route::put("/update-user/{id}", [UserController::class,"update"])->name( "user_update");

Route::delete("/hapus-user/{id}", [UserController::class,"hapus"])->name( "user_hapus");
Route::get("/tampil-user/{id}", [UserController::class,"show"])->name( "user_show");

Route::get("/login", [SecurityController::class,"formLogin"])->name( "login");
Route::post("/proses-login", [SecurityController::class,"prosesLogin"])->name( "proses_login");
Route::get("/logout", [SecurityController::class,"logout"])->name( "logout");
Route::middleware("auth")->group(function(){
    route::get("/tampil-semua-user",[UserController::class, "tampil"])->name("user_all");
});

Route::middleware("auth")->group(function(){
Route::get("perusahaan/buat", [PerusahaanController::class, 'buat'])->name("buat_perusahaan");
    Route::post("perusahaan/simpan", [PerusahaanController::class, 'simpan'])->name("simpan_perusahaan");
    Route::get("perusahaan/tampil/{id}", [PerusahaanController::class, 'tampil'])->name("tampil_perusahaan");
    Route::get("perusahaan/semua", [PerusahaanController::class, 'semua'])->name("semua_perusahaan");
    Route::get("perusahaan/ubah/{id}", [PerusahaanController::class, 'ubah'])->name("ubah_perusahaan");
    Route::put("perusahaan/update/{id}", [PerusahaanController::class, 'update'])->name("update_perusahaan");
    Route::delete("perusahaan/hapus/{id}", [PerusahaanController::class, 'hapus'])->name("hapus_perusahaan");

Route::get("karyawan/buat", [KaryawanController::class, 'buat'])->name("buat_karyawan");
    Route::post("karyawan/simpan", [KaryawanController::class, 'simpan'])->name("simpan_karyawan");
    Route::get("karyawan/tampil/{id}", [KaryawanController::class, 'tampil'])->name("tampil_karyawan");
    Route::get("karyawan/semua", [KaryawanController::class, 'semua'])->name("semua_karyawan");
    Route::get("karyawan/ubah/{id}", [KaryawanController::class, 'ubah'])->name("ubah_karyawan");
    Route::put("karyawan/update/{id}", [KaryawanController::class, 'update'])->name("update_karyawan");
    Route::delete("karyawan/hapus/{id}", [KaryawanController::class, 'hapus'])->name("hapus_karyawan");

Route::get("jabatan/buat", [JabatanController::class, 'buat'])->name("buat_jabatan");
    Route::post("jabatan/simpan", [JabatanController::class, 'simpan'])->name("simpan_jabatan");
    Route::get("jabatan/tampil/{id}", [JabatanController::class, 'tampil'])->name("tampil_jabatan");
    Route::get("jabatan/semua", [JabatanController::class, 'semua'])->name("semua_jabatan");
    Route::get("jabatan/ubah/{id}", [JabatanController::class, 'ubah'])->name("ubah_jabatan");
    Route::put("jabatan/update/{id}", [JabatanController::class, 'update'])->name("update_jabatan");
    Route::delete("jabatan/hapus/{id}", [JabatanController::class, 'hapus'])->name("hapus_jabatan");

Route::get("gaji/buat", [GajiController::class, 'buat'])->name("buat_gaji");
    Route::post("gaji/simpan", [GajiController::class, 'simpan'])->name("simpan_gaji");
    Route::get("gaji/tampil/{id}", [GajiController::class, 'tampil'])->name("tampil_gaji");
    Route::get("gaji/semua", [GajiController::class, 'semua'])->name("semua_gaji");
    Route::get("gaji/ubah/{id}", [GajiController::class, 'ubah'])->name("ubah_gaji");
    Route::put("gaji/update/{id}", [GajiController::class, 'update'])->name("update_gaji");
    Route::delete("gaji/hapus/{id}", [GajiController::class, 'hapus'])->name("hapus_gaji");

});