<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'cutis';

    protected $fillable = [

        'user_id',

        'nomor_surat',

        'jenis_cuti',

        'tanggal_mulai',
        'tanggal_selesai',

        'jumlah_hari',

        'alasan',

        'file_formulir',
        'file_final',

        'status',

        'catatan_admin',

        'approved_by',
        'approved_at',
        'tanggal_disetujui'

    ];

    protected $casts = [

        'tanggal_mulai'      => 'date',
        'tanggal_selesai'    => 'date',
        'approved_at'        => 'datetime',
        'tanggal_disetujui'  => 'date',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}