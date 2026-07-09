<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';

    protected $fillable = [

    'nama_unit',

    'nama_lengkap_unit',

    'wilayah',

    'alamat',

    'telepon',

    'email',

];

}