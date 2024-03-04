<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpusController;

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
    return view('user.homepage');
});

Route::get('/homepage', [App\Http\Controllers\PerpusController::class, 'katalog'])->name('homepage');
Route::get('/buku/{bukuID}', [App\Http\Controllers\PerpusController::class, 'detail'])->name('detail');
Route::post('/buku/{bukuID}/ulasan', [App\Http\Controllers\PerpusController::class, 'komen'])->name('komen');
Route::post('/addkoleksi/{bukuID}', [App\Http\Controllers\PerpusController::class, 'store'])->name('simpan');
Route::post('/buku/proses/peminjaman/{bukuID}', [App\Http\Controllers\PerpusController::class, 'pinjam'])->name('pinjam');
Route::get('/buku/peminjaman/{bukuID}', [App\Http\Controllers\PerpusController::class, 'showpinjam'])->name('showpinjam');
Route::get('/profile/{id}', [App\Http\Controllers\PerpusController::class, 'profile'])->name('profile');
Route::get('/profile/edit/{id}', [App\Http\Controllers\PerpusController::class, 'editprofile'])->name('editprofile');
Route::put('/profile/edit/proses/{id}', [App\Http\Controllers\PerpusController::class, 'prosesedit'])->name('prosesedit');
Auth::routes();


Route::middleware('auth', 'auth.admin')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\PerpusController::class, 'dashboard'])->name('dashboard');

    //tampil databuku
    Route::get('/databuku', [App\Http\Controllers\PerpusController::class, 'dataBook'])->name('databuku');

    //tampil form add buku
    Route::get('/tambahbuku', [App\Http\Controllers\PerpusController::class, 'addData'])->name('tambahbuku');

    //proses input data
    Route::post('/prosesaddbuku', [App\Http\Controllers\PerpusController::class, 'insertData'])->name('insertdata');

    //tampil form edit buku
    Route::get('/editbuku/{bukuID}', [App\Http\Controllers\PerpusController::class, 'editData'])->name('editdata');

    // proses edit data
    Route::put('/proseseditdata/{bukuID}', [App\Http\Controllers\PerpusController::class, 'updateData'])->name('updatedata');

    //delete data buku
    Route::delete('/delete/{bukuID}', [App\Http\Controllers\PerpusController::class, 'deleteData'])->name('deletedata');

    //tampil data user
    Route::get('/datauser', [App\Http\Controllers\PerpusController::class, 'dataUser'])->name('datauser');

    //add data petugas
    Route::get('/addpetugas', [App\Http\Controllers\PerpusController::class, 'formPetugas'])->name('addpetugas');
    Route::post('/prosesaddpetugas', [App\Http\Controllers\PerpusController::class, 'create'])->name('prosesaddpetugas');
    Route::get('/datapetugas', [App\Http\Controllers\PerpusController::class, 'datapetugas'])->name('datapetugas');

    //tampil form create kategori
    Route::get('/createkategori', [App\Http\Controllers\PerpusController::class, 'createkategori'])->name('createkategori');

    //proses create kategori
    Route::post('/prosesaddkategori', [App\Http\Controllers\PerpusController::class, 'addkategori'])->name('prosesaddkategori');
    
    //relasikategori
    Route::get('/addrelasikategori', [App\Http\Controllers\PerpusController::class, 'kategori'])->name('addrelasi');
    
    //proses relasi
    Route::post('/prosesrelasi', [App\Http\Controllers\PerpusController::class, 'addrelasi'])->name('prosesrelasi');
});
