@extends('layouts.app')

@section('title','Tambah Mahasiswa')

@section('content')
    <h1>Tambah Mahasiswa</h1>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="text" class="form-control" id="nim" name="nim"  required>
        </div>
        <div class="mb-3">
            <label for="nama_mahasiswa" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"  required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="jurusan_mahasiswa" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan_mahasiswa" name="jurusan_mahasiswa" required>
        </div>
        <button type="submit" class="btn btn-success">simpan</button>
    </form>
@endsection
