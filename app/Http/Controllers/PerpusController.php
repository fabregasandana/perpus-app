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
        $kategori = Kategori::take(5)->get();
        $buku = Buku::all();
        return view ('user.homepage', compact('buku', 'kategori'));
    }

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['detail', 'index']]);
    }

    public function dashboard(){
        $kategori_nav = Kategori::all()->take(5);
        $buku = Buku::all()->count();
        $petugas = User::all()->count();
        $user = User::all()->count();
        return view ('admin.index-admin', compact('buku', 'petugas', 'user', 'kategori_nav'));
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
            'username' => $request['username'],
            'alamat' => $request['alamat'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);

        $petugas->save();
        
        return redirect('/datapetugas');
    }
    
    //formedit
    public function editpetugas($id)
    {   
        $petugas = User::find($id);
        return view('admin.editpetugas', compact('petugas'));
    }
    
    //edit petugas
    public function editptgs(Request $request, $id)
    {
        $petugas = User::find($id)->update([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'alamat' => $request['alamat'],
        ]);
        
        return redirect('/datapetugas');
    }

    public function deletepetugas($id){
        $petugas = User::find($id);
        $petugas->delete();
        return redirect('/datapetugas');
    }

    public function deleteuser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/datauser');
    }

    //Katalog
    public function katalog(){
    $kategori_nav = Kategori::all()->take(5);
        $buku = Buku::all();
        return view('user.catalog', compact('buku', 'kategori_nav'));
    }

    //Detail
    public function detail($bukuID){
        $buku = Buku::find($bukuID);
        $u = $buku->ulasan()->get();
        $uu = $u->first();
        $ulasan = Ulasan::where('bukuID', $bukuID);
        return view('user.detailbuku', compact('buku','u', 'uu', 'ulasan'));
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

    public function showkoleksi(){
    $kategori_nav = Kategori::all()->take(5);
        $user = Auth::user();
        $buku = Buku::all();
        $koleksi = $user->koleksi()->get();

        return view('user.koleksi', compact('user', 'buku', 'koleksi', 'kategori_nav'));
    }
    
    //menampilkan form tgl pengembalian
    public function showpinjam($bukuID){
        $buku = Buku::find($bukuID);
        return view('user.pengembalian', compact('buku'));
    }

    //proses penginputan data peminjaman
    public function pinjam(Request $request, $bukuID){
        $user = Auth::user()->id;
        $buku = Buku::find($bukuID);

        if($buku->stok > 0){
            $buku->stok--;
            $buku->save();
            
            $pinjam = new Peminjaman([
                'userID' => $user,
                'bukuID' => $bukuID,
                'tanggalpeminjaman' => now()->toDateString(),
                'tanggalpengembalian' => $request['tglbalik'],
                'status' => 'Dipinjam',
            ]);
            $pinjam->save();
            return redirect()->route('homepage', ['bukuID' => $bukuID])->with('success', 'Buku berhasil dipinjam');
        }
        else{
            return redirect()->back()->with('error', 'Maaf stok buku habis');
        }
            
    }

    //proses pengembalian buku
    public function ubahstatus(Request $request, $peminjamanID){
        $status = Peminjaman::find($peminjamanID);
        return view('admin.kembalibuku', compact('status'));
    }

    public function prosespengembalian(Request $request, $peminjamanID){
        $pengembalian = Peminjaman::find($peminjamanID);
        $status = $request['status'];
        if($pengembalian && $status === 'Dikembalikan'){
            $buku = Buku::find($pengembalian->bukuID);
            $buku->stok++;
            $buku->save();
        }
        $pengembalian->status = $status;
        $pengembalian->save();

        return redirect('/laporanpeminjam');
    }

    //menampilkan data peminjaman
    public function datapinjam(){
    $kategori_nav = Kategori::all()->take(5);
        $user = Auth::user();
        $book = Buku::all();
        $daftar = $user->peminjaman()->where('status', 'Dipinjam')->get();

        return view('user.peminjaman', compact('user', 'book', 'daftar', 'kategori_nav'));
    }

    public function showkategori(){
        $kategori = Kategori::all();
        return view('admin.kategori', compact('kategori'));
    }

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
        return redirect('/kategori');
    }

    //tampil form kategori relasi
    public function kategori(){
        $buku = Buku::all();
        $kategori = Kategori::all();
        return view('admin.addkategori', compact('buku', 'kategori'));
    }

    //proses relasi
    public function addrelasi(Request $request){
        $buku = Buku::find($request->input('bukuID'));
        $kategori = Kategori::find($request->input('kategoriID'));
        $buku->kategori()->attach($kategori);

        return redirect('/dashboard');
    }

    public function profile($id)
    {   
    $kategori_nav = Kategori::all()->take(5);
        $user = Auth::user()->id;
        return view('user.profile', compact('user', 'kategori_nav'));
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

    public function showlaporan(){
        $buku = Buku::all();
        $user = User::all();
        $dtpeminjam = Peminjaman::all();

        return view('admin.datapeminjaman', compact('dtpeminjam', 'buku', 'user'));
    }

    public function cetaklaporan(){
        $buku = Buku::all();
        $user = User::all();
        $dtpeminjam = Peminjaman::all();

        return view('admin.cetakdata', compact('dtpeminjam', 'buku', 'user'));
    }

    public function viewkategori($kategoriID){
        $kategori = Kategori::find($kategoriID);
        $buku = $kategori->buku;
        // $buku = Buku::with('kategori')->get();
        return view('user.kategoriview', compact('kategori', 'buku'));
    }
}

