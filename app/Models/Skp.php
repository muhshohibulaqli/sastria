<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skp extends Model
{
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | Nama Tabel
    |--------------------------------------------------------------------------
    */

    protected $table = 'skps';

    /*
    |--------------------------------------------------------------------------
    | Mass Assignment
    |--------------------------------------------------------------------------
    */

    protected $fillable = [

        'user_id',

        'tahun',

        'capaian_kinerja_organisasi',

        'predikat_kinerja_pegawai',

        'file_skp',

        'file_skp_final',

        'validasi_admin_unit',

        'catatan_admin',

    ];

    /*
    |--------------------------------------------------------------------------
    | Casting
    |--------------------------------------------------------------------------
    */

    protected $casts = [

        'tahun' => 'integer',

    ];

    /*
    |--------------------------------------------------------------------------
    | Relasi User
    |--------------------------------------------------------------------------
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}