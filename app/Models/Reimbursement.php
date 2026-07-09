<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reimbursement extends Model
{
    protected $fillable = [

        'user_id',

        'nomor_pengajuan',

        'tanggal_nota',

        'jenis',

        'deskripsi',

        'jumlah',

        'file_nota',

        'status',

        'dicairkan_at',

        'dicairkan_oleh',

        'catatan_admin'

    ];

    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }
}