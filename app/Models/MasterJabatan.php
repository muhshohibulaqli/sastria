<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterJabatan extends Model
{
    use HasFactory;

    protected $table = 'master_jabatans';

    protected $fillable = [

        'nama_jabatan'

    ];

    /*
    |--------------------------------------------------------------------------
    | RELASI USER
    |--------------------------------------------------------------------------
    */

    public function users()
    {
        return $this->hasMany(
            User::class,
            'jabatan_id'
        );
    }

}