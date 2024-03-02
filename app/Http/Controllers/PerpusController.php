<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Models\Perpus;
use App\Models\Kategori;
use App\Models\Koleksi;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PerpusController extends Controller
{
    public function index(){
        return view ('user.homepage');
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
        $kategori = new Kategori;
        $kategori->namakategori = $request->input('kategori');
        $buku = new Perpus;
        $buku->judul = $request->input('judul');
        $buku->penulis = $request->input('penulis');
        $buku->penerbit = $request->input('penerbit');
        $buku->tahunterbit = $request->input('thn');
        $buku->deskripsi = $request->input('deskripsi');
        $buku->gambar = $request->input('gambar');

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

    public function simpan($bukuID){
        $buku = Perpus::all();
        $user = Auth::user()->id;
        if($user->koleksiPribadi()->where('bukuID', $bukuID)->exist())
        {
            $user->koleksi()->detech($bukuID);
            return redirect()->route('detail', ['bukuID' => $bukuID]);
        }
        else
        {
            $user->koleksi()->attach($bukuID);
            return redirect()->route('detail', ['bukuID' => $bukuID]);
        }
    }
}

