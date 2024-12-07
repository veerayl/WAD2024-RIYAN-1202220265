<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data dosen
        $dosens = Dosen::all();

        // Tampilkan ke view
        return view('dosen.index', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.tambah');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'kode_dosen' => 'required|string|max:3|unique:dosens,kode_dosen',
            'nama_dosen' => 'required|string|max:255',
            'NIP' => 'required|string|unique:dosens,NIP',
            'email_dosen' => 'required|email|unique:dosens,email_dosen',
            'nomor_telepon_dosen' => 'nullable|string|max:15',
        ]);
    
        // Simpan data menggunakan cara manual
        $dosen = new Dosen;
        $dosen->kode_dosen = $request->kode_dosen;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->NIP = $request->NIP;
        $dosen->email_dosen = $request->email_dosen;
        $dosen->nomor_telepon_dosen = $request->nomor_telepon_dosen;
        $dosen->save();
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('dosen.index')->with('success', "Dosen {$dosen->nama_dosen} berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     */
    public function show(dosen $dosens)
    {
        return view('dosen.show', compact('dosens'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dosen.edit', compact('dosens'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validdateData = $request->validate([
            'kode_dosen' => 'required|string|max:144',
            'nama_dosen' => 'required|string|max:144',
            'NIP' => 'required|string|max:144',
            'email_dosen' => 'required|string|max:144',
            'nomor_telepon_dosen' => 'required|string|max:144',
        ]);
        dosen::update($validdateData);
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil perbarui.');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success','Dosen berhasil dihapus');
        //
    }
}
