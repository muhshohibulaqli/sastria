<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',

        'nama_jabatan',

        'tmt_jabatan',

        'no_sk',

        'tgl_sk',

        'jenis_jabatan',

        'pejabat_penetap',

        'keterangan',

        'file_jabatan',

        'validasi_admin_unit'

    ];
}
