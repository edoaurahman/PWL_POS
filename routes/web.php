<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
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

Route::get("/", function () {
    return view("welcome");
});

Route::get("/level", [LevelController::class, "index"])->name("/level");
Route::get("/kategori", [KategoriController::class, "index"]);
Route::get("/user", [UserController::class, "index"])->name("/user");
Route::get("/user/tambah", [UserController::class, "tambah"])->name("/user/tambah");
Route::get("/level/tambah", [LevelController::class, "tambah"])->name("/level/tambah");
Route::get("/user/ubah/{id}", [UserController::class, "ubah"])->name("/user/ubah");
Route::get("/user/hapus/{id}", [UserController::class, "hapus"])->name("/user/hapus");
Route::put("/user/ubah_simpan/{id}", [UserController::class, "ubah_simpan"])->name("/user/ubah_simpan");
Route::post("/user/tambah_simpan", [UserController::class, "tambah_simpan"])->name("/user/tambah_simpan");
Route::post("/level/tambah_simpan", [LevelController::class, "store"])->name("/level/tambah_simpan");
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/edit/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/delete', [KategoriController::class, 'destroy'])->name('kategori.delete');
Route::resource('m_user', POSController::class);