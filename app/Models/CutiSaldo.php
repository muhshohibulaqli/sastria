<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CutiSaldo extends Model
{
    protected $table = 'cuti_saldos';

    protected $fillable = [

        'user_id',

        'tahun',

        'hak_awal',

        'carry_n1',

        'carry_n2',

        'hak_aktif',

        'terpakai',

        'sisa'

    ];

    protected $casts = [

        'tahun' => 'integer',

        'hak_awal' => 'integer',

        'carry_n1' => 'integer',

        'carry_n2' => 'integer',

        'hak_aktif' => 'integer',

        'terpakai' => 'integer',

        'sisa' => 'integer'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}