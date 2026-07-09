<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kgb extends Model
{
    
        protected $fillable = [

        'user_id',

        'gaji_pokok_lama',

        'oleh_pejabat',

        'no_sk_terakhir',

        'tgl_sk_berkala',

        'tmt_berkala',

        'masa_kerja_berkala',

        'gaji_pokok_baru',

        'masa_kerja_baru',

        'pangkat_golongan',

        'tmt_baru',

        'file_sk_kgb',

        'validasi_admin_unit',

        'status_generate',

        'nomor_sk_baru',

        'kgb_yad',

        'file_sk_baru',

        'generated_by',

        'generated_at'

    ];
    
        /*
    |--------------------------------------------------------------------------
    | RELASI USER
    |--------------------------------------------------------------------------
    */

    public function user()
    {

        return $this->belongsTo(

            User::class,

            'user_id'

        );

    }

}