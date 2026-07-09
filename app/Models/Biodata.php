<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cuti;
use App\Models\CutiSaldo;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',

        /*
        |--------------------------------------------------------------------------
        | FOTO
        |--------------------------------------------------------------------------
        */

        'foto',

        /*
        |--------------------------------------------------------------------------
        | BIODATA
        |--------------------------------------------------------------------------
        */

        'gelar_depan',
        'gelar_belakang',
        'jenis_kelamin',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'status_nikah',
        'hp1',
        'email_pribadi',
        'warga_negara',

        /*
        |--------------------------------------------------------------------------
        | KEPEGAWAIAN
        |--------------------------------------------------------------------------
        */

        'unit_kerja',
        'status_aktif',
        'status_pegawai',
        'jabatan_atasan',
        'karpeg',
        'file_karpeg',
        'taspen',
        'file_taspen',
        'nuptk',
        'npwp',
        'file_npwp',
        'nip_pppk',

        /*
        |--------------------------------------------------------------------------
        | ALAMAT DOMISILI
        |--------------------------------------------------------------------------
        */

        'alamat',
        'rt_rw',
        'kelurahan',
        'kode_pos',
        'jarak_tempat_tinggal',

        /*
        |--------------------------------------------------------------------------
        | ALAMAT KTP
        |--------------------------------------------------------------------------
        */

        'no_ktp',
        'tanggal_ktp',
        'alamat_ktp',
        'rt_rw_ktp',
        'kelurahan_ktp',
        'kode_pos_ktp',
        'file_ktp',
        'file_kk',

        /*
        |--------------------------------------------------------------------------
        | IDENTITAS FISIK
        |--------------------------------------------------------------------------
        */

        'golongan_darah',
        'tinggi_badan',
        'berat_badan',
        'hobby',
        'ukuran_baju',

        /*
        |--------------------------------------------------------------------------
        | REKENING BANK
        |--------------------------------------------------------------------------
        */

        'nama_bank',
        'no_rekening',
        'atas_nama_rekening',
        'cabang_bank',
        'keterangan_bank',
        'file_rekening',

        /*
        |--------------------------------------------------------------------------
        | DATA PENTING
        |--------------------------------------------------------------------------
        */

        'tmt_cpns',
        'file_sk_cpns',
        'tmb',
        'tkgb',
        'file_sk_kgb',

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