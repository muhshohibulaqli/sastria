<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikansTable extends Migration
{

    public function up()
    {

        Schema::create('pendidikans', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | RELASI USER
            |--------------------------------------------------------------------------
            */

            $table->unsignedBigInteger('user_id');

            /*
            |--------------------------------------------------------------------------
            | DATA PENDIDIKAN
            |--------------------------------------------------------------------------
            */

            $table->string('jenjang_pendidikan')->nullable();

            $table->string('nama_institusi')->nullable();

            $table->string('fakultas')->nullable();

            $table->string('prodi')->nullable();

            $table->string('jurusan')->nullable();

            $table->string('lokasi')->nullable();

            $table->text('alamat_institusi')->nullable();

            $table->string('kepala_institusi')->nullable();

            $table->text('judul_penelitian')->nullable();

            $table->string('gelar')->nullable();

            $table->string('singkatan_gelar')->nullable();

            $table->string('letak_gelar')->nullable();

            $table->string('no_ijazah')->nullable();

            $table->date('tgl_ijazah')->nullable();

            $table->string('tahun_masuk')->nullable();

            $table->string('tahun_lulus')->nullable();

            $table->string('ipk')->nullable();

            /*
            |--------------------------------------------------------------------------
            | FILE
            |--------------------------------------------------------------------------
            */

            $table->string('file_ijazah')->nullable();

            $table->string('file_transkrip')->nullable();

            /*
            |--------------------------------------------------------------------------
            | VALIDASI
            |--------------------------------------------------------------------------
            */

            $table->string('validasi_admin_unit')

            ->nullable();

            $table->timestamps();

        });

    }

    public function down()
    {

        Schema::dropIfExists('pendidikans');

    }

}