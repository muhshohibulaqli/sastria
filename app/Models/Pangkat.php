<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',

        'jenis_sk',

        'jenis_pangkat',

        'nama_pangkat',

        'tmt_pangkat',

        'no_sk',

        'tgl_sk',

        'pejabat_penetap',

        'masa_kerja_tahun',

        'masa_kerja_bulan',

        'keterangan',

        'file_pangkat',

        'validasi_admin_unit'

    ];
}