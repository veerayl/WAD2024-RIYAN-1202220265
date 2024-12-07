<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswas = mahasiswa::all();
        return view('mahasiswa.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi input
        $validated = $request->validate([
            'nim' => 'required|string|max:15|unique:mahasiswas,nim',
            'nama_mahasiswa' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email',
            'jurusan' => 'required|string|max:100',
        ]);

    // Simpan data menggunakan cara manual
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_mahasiswa = $request->nama_mahasiswa;
        $mahasiswa->email = $request->email;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->save();

    // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('mahasiswa.index')->with('success', "Mahasiswa {$mahasiswa->nama_mahasiswa} berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = mahasiswa::with('dosen')->get();
        return view('mahasiswa.index', compact('mahasiswas'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('mahasiswa.edit ', compact('mahasiswas'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validdateData = $request->validate([
            'nim' => 'required|string|max:144',
            'nama_mahasiswa' => 'required|string|max:144',
            'email' => 'required|string|max:144',
            'jurusan_mahasiswa' => 'required|string|max:144',
        ]);
        Mahasiswa::update($validdateData);
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diperbarui.');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswas->delete();
        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa berhasil dihapus');
        //
    }
}
