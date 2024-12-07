<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class dosen extends Model
{
    use HasFactory;

    //
    protected $table = 'dosens';
    //
    protected $fillable = [
        'kode_dosen',
        'nama_dosen',
        'NIP',
        'email_dosen',
        'nomor_telepon_dosen',
    ];
}
