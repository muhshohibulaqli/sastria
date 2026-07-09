<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Unit;
use App\Models\MasterJabatan;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /*
    |--------------------------------------------------------------------------
    | MASS ASSIGNABLE
    |--------------------------------------------------------------------------
    */

    protected $fillable = [

        'nip',

        'name',

        'email',

        'password',

        'role',

        'unit_id',

        'jabatan_id',

        'status_pegawai',

        'status_aktif',

        'unit',

    ];
    
        /*
    |--------------------------------------------------------------------------
    | HIDDEN
    |--------------------------------------------------------------------------
    */

    protected $hidden = [

        'password',

        'remember_token',

    ];

    /*
    |--------------------------------------------------------------------------
    | CASTS
    |--------------------------------------------------------------------------
    */

    protected $casts = [

        'email_verified_at' => 'datetime',

    ];

    /*
    |--------------------------------------------------------------------------
    | RELASI UPLOAD
    |--------------------------------------------------------------------------
    */

    public function uploads()
    {

        return $this->hasMany(

            \App\Models\Upload::class,

            'user_id'

        );

    }

    /*
    |--------------------------------------------------------------------------
    | RELASI CUTI
    |--------------------------------------------------------------------------
    */

    public function cutis()
    {

        return $this->hasMany(

            \App\Models\Cuti::class,

            'user_id'

        );

    }

    /*
    |--------------------------------------------------------------------------
    | RELASI KGB
    |--------------------------------------------------------------------------
    */

    public function kgbs()
    {

        return $this->hasMany(

            \App\Models\Kgb::class,

            'user_id'

        );

    }
    
        /*
    |--------------------------------------------------------------------------
    | RELASI BIODATA
    |--------------------------------------------------------------------------
    */

    public function biodata()
    {

        return $this->hasOne(

            \App\Models\Biodata::class,

            'user_id'

        );

    }

    /*
    |--------------------------------------------------------------------------
    | RELASI UNIT
    |--------------------------------------------------------------------------
    */

    public function unit()
    {

        return $this->belongsTo(

            Unit::class,

            'unit_id',

            'id'

        );

    }

    /*
    |--------------------------------------------------------------------------
    | RELASI MASTER JABATAN
    |--------------------------------------------------------------------------
    */

    public function jabatan()
    {

        return $this->belongsTo(

            MasterJabatan::class,

            'jabatan_id',

            'id'

        );

    }

    /*
    |--------------------------------------------------------------------------
    | RELASI SKP
    |--------------------------------------------------------------------------
    */

    public function skps()
    {

        return $this->hasMany(

            \App\Models\Skp::class,

            'user_id'

        );

    }

    /*
    |--------------------------------------------------------------------------
    | RELASI REIMBURSEMENT
    |--------------------------------------------------------------------------
    */

    public function reimbursements()
    {

        return $this->hasMany(

            \App\Models\Reimbursement::class,

            'user_id'

        );

    }

    /*
    |--------------------------------------------------------------------------
    | RELASI SURAT TUGAS
    |--------------------------------------------------------------------------
    */

    public function suratTugas()
    {

        return $this->hasMany(

            \App\Models\SuratTugas::class,

            'user_id'

        );

    }

}