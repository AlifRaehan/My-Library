<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LibraryController extends Controller
{
    public function index_admin()
    {
        $siswas = Siswa::all();
        return view('index_admin', compact("siswas"));
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function profil()
    {
        return view('profil');
    }

    public function store_siswa(Request $request)
    {
        // $datas = $request->validate([
        //     'nama' => 'required|string',
        //     'kelas' => 'required|string',
        //     'email' => 'required|email|unique:siswa',
        //     'password' => 'required|min:6',
        // ]);
        Siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_status' => 'siswa',
        ]);
        

        return redirect()->route('dashboard_admin')->with('success', 'Siswa created successfully.');
    }

    public function edit_siswa(Request $request, $id)
    {
        // $datas = $request->validate([
        //     'nama' => 'required|string',
        //     'kelas' => 'required|string',
        //     'email' => 'required|email|unique:siswa',
        //     'password' => 'required|min:6',
        // ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_status' => 'siswa',
        ]);

        return redirect()->route('dashboard_admin')->with('success', 'Siswa updated successfully');
    }

    public function delete_siswa($id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()->route('dashboard_admin')->with('success', 'Siswa deleted successfully');
    }

    public function buku()
    {
        $bukus = Buku::all();
        return view('panel_buku_admin', compact('bukus'));
    }

    public function store_buku(Request $request)
    {
        $datas = $request->validate([
            'judul' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'pengarang' => 'required|string|max:255',
            'stok_buku' => 'required|integer',
        ]);

        Buku::create($datas);

        return redirect()->route('buku')->with('success', 'Book added successfully');
    }

    public function edit_buku(Request $request, $id)
    {
        $datas = $request->validate([
            'judul' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'pengarang' => 'required|string|max:255',
            'stok_buku' => 'required|integer',
        ]);

        $buku = Buku::findOrFail($id);

        $buku->update($datas);

        return redirect()->route('buku')->with('success', 'Book updated successfully');
    }

    public function delete_buku($id)
    {
        $buku = Buku::findOrFail($id);

        $buku->delete();

        return redirect()->route('buku')->with('success', 'Book deleted successfully');
    }
}
