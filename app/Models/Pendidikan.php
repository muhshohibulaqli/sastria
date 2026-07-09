<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{

    use HasFactory;

    protected $fillable = [

        'user_id',

        /*
        |--------------------------------------------------------------------------
        | PENDIDIKAN
        |--------------------------------------------------------------------------
        */

        'jenjang_pendidikan',
        'nama_institusi',
        'fakultas',
        'prodi',
        'jurusan',
        'lokasi',
        'alamat_institusi',
        'kepala_institusi',
        'judul_penelitian',
        'gelar',
        'singkatan_gelar',
        'letak_gelar',
        'no_ijazah',
        'tgl_ijazah',
        'tahun_masuk',
        'tahun_lulus',
        'ipk',

        /*
        |--------------------------------------------------------------------------
        | FILE
        |--------------------------------------------------------------------------
        */

        'file_ijazah',
        'file_transkrip',

        /*
        |--------------------------------------------------------------------------
        | VALIDASI
        |--------------------------------------------------------------------------
        */

        'validasi_admin_unit'

    ];

    /*
    |--------------------------------------------------------------------------
    | RELASI USER
    |--------------------------------------------------------------------------
    */

    public function user()
    {

        return $this->belongsTo(User::class);

    }

}