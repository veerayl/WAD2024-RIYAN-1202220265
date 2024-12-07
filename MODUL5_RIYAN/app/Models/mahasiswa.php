<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mahasiswa extends Model
{
    use HasFactory;
    //
    protected $table = 'mahasiswas';
    //
    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'email',
        'jurusan',
    ];

public function dosen ()
{
    return $this->belongsTo(Dosen::class);
}
}
