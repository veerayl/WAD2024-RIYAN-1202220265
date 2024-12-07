@extends('layouts.app')

@section('title','Tambah Dosen')

@section('content')
    <h1>Tambah Dosen</h1>
    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kode_dosen" class="form-label">Kode Dosen</label>
            <input type="text" class="form-control" id="kode_dosen" name="kode_dosen"  required>
        </div>
        <div class="mb-3">
            <label for="nama_dosen" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen"  required>
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="NIP" name="NIP"  required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email_dosen" name="email_dosen" required>
        </div>
        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon_dosen" name="nomor_telepon_dosen" >
        </div>
        <button type="submit" class="btn btn-success">simpan</button>
    </form>
@endsection
