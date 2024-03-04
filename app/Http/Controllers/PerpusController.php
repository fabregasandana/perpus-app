<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Models\Perpus;
use App\Models\Kategori;
use App\Models\Koleksi;
use App\Models\Peminjaman;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PerpusController extends Controller
{
    public function index(){
        $buku = Buku::all();
        return view ('user.homepage', compact('buku'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view ('admin.index-admin');
    }

    public function dataBook(){
        $buku = Perpus::latest()->get();
        return view ('admin.databook', compact('buku'));
    }

    //Create Data Buku
    public function addData(){
        return view ('admin.create');
    }

    public function insertData(Request $request){
        $request->validate([
            'gambar' => 'required|file|image|mimes:jpg, jpeg, gif|max:2048',
        ]);
        $file = $request->file('gambar');
        $file->move(base_path('\public\images'), $file->getClientOriginalName());
        // $destinationPath = 'C:\xampp\htdocs\ukk-app\public\images';
        
        $buku = new Perpus;
        $buku->judul = $request->input('judul');
        $buku->penulis = $request->input('penulis');
        $buku->penerbit = $request->input('penerbit');
        $buku->tahunterbit = $request->input('thn');
        $buku->deskripsi = $request->input('deskripsi');
        $buku->gambar = $file->getClientOriginalName();

        $buku->save();

        return redirect('/databuku');
    }

    //Edit Data Buku
    public function editData($bukuID){
        $buku = Perpus::find($bukuID);
        return view('admin.edit', compact (['buku']));
    }

    public function updateData(Request $request, $bukuID){
        $buku = Perpus::find($bukuID);
        $buku->judul = $request->input('judul');
        $buku->penulis = $request->input('penulis');
        $buku->penerbit = $request->input('penerbit');
        $buku->tahunterbit = $request->input('thn');
        $buku->deskripsi = $request->input('deskripsi');
        $buku->gambar = $request->input('gambar');

        $buku->save();

        return redirect('/databuku');
    }

    //Delete Data
    public function deleteData($bukuID){
        $buku = Perpus::find($bukuID);
        $buku->delete();
        return redirect('/databuku');
    }

    //menampilkan data user
    public function dataUser(){
        $user = User::where('role', 'user')->get();
        return view('admin.datauser', compact('user'));
    }

    //menampilkan data petugas
    public function dataPetugas(){
        $petugas = User::where('role', 'petugas')->get();
        return view('admin.datapetugas', compact('petugas'));
    }

    public function formPetugas(){
        return view('admin.addpetugas');
    }
    //add petugas
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(Request $request)
    {
        $petugas =  new User([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);

        $petugas->save();

        return view('admin.datapetugas');
    }

    //Katalog
    public function katalog(){
        $buku = Perpus::all();
        return view('user.catalog', compact('buku'));
    }
    //Detail
    public function detail($bukuID){
        $buku = Buku::find($bukuID);
        $ulasan = Ulasan::all();
        return view('user.detailbuku', compact('buku', 'ulasan'));
    }
    //Input Komen
    public function komen(Request $request, $bukuID){
        $user = Auth::user()->id;
        
        $ulasan = new Ulasan([
            'userID' => $user,
            'bukuID' => $bukuID,
            'ulasan' => $request['komen'],
            'rating' => $request['rating'],
        ]);

        $ulasan->save();
        return redirect()->route('detail', ['bukuID' => $bukuID]);
    }

    //proses add koleksi
    public function store($bukuID){
        $book = Buku::find($bukuID);
        
        $user = auth()->user();

        $existingBookmark = Koleksi::where('bukuID', $book->bukuID)
            ->where('userID', $user->id)
            ->first();

        if ($existingBookmark) {
            $existingBookmark->delete();
            return back();
        } else {
            $bookmark = new Koleksi();
            $bookmark->bukuID = $book->bukuID;
            $bookmark->userID = $user->id;
            $bookmark->save();

            return redirect()->back()->with('success', 'Buku Berhasil Ditambahkan');
        }
    }
    
    //menampilkan form tgl pengembalian
    public function showpinjam($bukuID){
        $buku = Buku::find($bukuID);
        return view('user.pengembalian', compact('buku'));
    }

    //proses penginputan data peminjaman
    public function pinjam(Request $request, $bukuID){
        $user = Auth::user()->id;

        $pinjam = new Peminjaman([
            'userID' => $user,
            'bukuID' => $bukuID,
            'tanggalpeminjaman' => now()->toDateString(),
            'tanggalpengembalian' => $request['tglbalik'],
            'status' => 'Dipinjam',
        ]);

        $pinjam->save();
        return redirect()->route('homepage', ['bukuID' => $bukuID]);
    }

    //menampilkan data peminjaman
    // public function datapinjam(){
    //     $user = Auth::user();
    //     $book = Book::all();
    //     $daftar = $user->peminjamans()->where('status', 'Dipinjam')->get();

    //     return view('bubuku.datapeminjaman', compact('daftar'));
    // }

    //tampilan tambah kategori
    public function createkategori(){
        return view('admin.createkategori');
    }

    //proses tambah kategori
    public function addkategori(Request $request){
        $kategori = new Kategori([
            'namakategori' => $request['namakategori'],
        ]);

        $kategori->save();
        return redirect('/dashboard');
    }

    //tampil form kategori relasi
    public function kategori(){
        $buku = Buku::all();
        $kategori = Kategori::all();
        return view('admin.addkategori', compact('buku', 'kategori'));
    }

    //proses relasi
    public function addrelasi(Request $request){
        $bukuId = $request->input('buku');  
        $kategoriId = $request->input('kategori');
        
        $buku = Buku::find($bukuId);
        $buku->kategori()->attach($kategoriId, ['kategoriID' => $kategoriId]);

        return redirect('/dashboard');
    }

    public function profile($id)
    {   
        $user = Auth::user()->id;
        return view('user.profile', compact('user'));
    }

    public function editprofile($id)
    {   
        $user = Auth::user()->id;
        return view('user.editprofile', compact('user'));
    }

    public function prosesedit(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id)->update([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'alamat' => $request['alamat'],
        ]);

        return redirect('/profile/{id}');
    }
}

