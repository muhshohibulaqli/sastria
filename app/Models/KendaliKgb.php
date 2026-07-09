<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KendaliKgb extends Model
{
    use HasFactory;

    protected $table = 'kendali_kgbs';

    protected $fillable = [

        /*
        |--------------------------------------------------------------------------
        | RELASI
        |--------------------------------------------------------------------------
        */

        'user_id',
        'kgb_id',

        /*
        |--------------------------------------------------------------------------
        | OTOMATIS DARI USER
        |--------------------------------------------------------------------------
        */

        'nama',
        'nip',
        'status_asn',

        /*
        |--------------------------------------------------------------------------
        | DATA KENDALI KGB
        |--------------------------------------------------------------------------
        */

        'jabatan',
        'kantor',

        'gaji_pokok_lama',

        'penandatangan',

        'nomor_sk',

        'tanggal',

        'tmt',

        'masa_kerja',

        'gaji_pokok_baru',

        'berdasarkan_masa_kerja',

        'pangkat_baru',

        'tmt_baru',

        'kgb_yad',

        /*
        |--------------------------------------------------------------------------
        | STATUS
        |--------------------------------------------------------------------------
        */

        'status',

        'generated_by',

        'generated_at',

    ];

    protected $casts = [

        'tanggal'      => 'date',

        'tmt'          => 'date',

        'tmt_baru'     => 'date',

        'kgb_yad'      => 'date',

        'generated_at' => 'datetime',

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

    /*
    |--------------------------------------------------------------------------
    | RELASI KGB
    |--------------------------------------------------------------------------
    */

    public function kgb()
    {

        return $this->belongsTo(Kgb::class);

    }

}