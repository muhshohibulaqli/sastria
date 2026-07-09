<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id');

            /*
            |--------------------------------------------------------------------------
            | FOTO
            |--------------------------------------------------------------------------
            */

            $table->string('foto')->nullable();

            /*
            |--------------------------------------------------------------------------
            | BIODATA
            |--------------------------------------------------------------------------
            */

            $table->string('gelar_depan')->nullable();

            $table->string('gelar_belakang')->nullable();

            $table->string('jenis_kelamin')->nullable();

            $table->string('agama')->nullable();

            $table->string('tempat_lahir')->nullable();

            $table->date('tanggal_lahir')->nullable();

            $table->string('status_nikah')->nullable();

            $table->string('hp1')->nullable();

            $table->string('email_pribadi')->nullable();

            $table->string('warga_negara')->nullable();

            /*
            |--------------------------------------------------------------------------
            | KEPEGAWAIAN
            |--------------------------------------------------------------------------
            */

            $table->string('unit_kerja')->nullable();

            $table->string('status_aktif')->nullable();

            $table->string('status_pegawai')->nullable();

            $table->string('jabatan_atasan')->nullable();

            $table->string('karpeg')->nullable();

            $table->string('file_karpeg')->nullable();

            $table->string('taspen')->nullable();

            $table->string('file_taspen')->nullable();

            $table->string('nuptk')->nullable();

            $table->string('npwp')->nullable();

            $table->string('file_npwp')->nullable();

            $table->string('nip_pppk')->nullable();

            /*
            |--------------------------------------------------------------------------
            | ALAMAT DOMISILI
            |--------------------------------------------------------------------------
            */

            $table->text('alamat')->nullable();

            $table->string('rt_rw')->nullable();

            $table->string('kelurahan')->nullable();

            $table->string('kode_pos')->nullable();

            $table->string('jarak_tempat_tinggal')->nullable();

            /*
            |--------------------------------------------------------------------------
            | ALAMAT KTP
            |--------------------------------------------------------------------------
            */

            $table->string('no_ktp')->nullable();

            $table->date('tanggal_ktp')->nullable();

            $table->text('alamat_ktp')->nullable();

            $table->string('rt_rw_ktp')->nullable();

            $table->string('kelurahan_ktp')->nullable();

            $table->string('kode_pos_ktp')->nullable();

            $table->string('file_ktp')->nullable();

            $table->string('file_kk')->nullable();

            /*
            |--------------------------------------------------------------------------
            | IDENTITAS FISIK
            |--------------------------------------------------------------------------
            */

            $table->string('golongan_darah')->nullable();

            $table->string('tinggi_badan')->nullable();

            $table->string('berat_badan')->nullable();

            $table->string('hobby')->nullable();

            $table->string('ukuran_baju')->nullable();

            /*
            |--------------------------------------------------------------------------
            | REKENING BANK
            |--------------------------------------------------------------------------
            */

            $table->string('nama_bank')->nullable();

            $table->string('no_rekening')->nullable();

            $table->string('atas_nama_rekening')->nullable();

            $table->string('cabang_bank')->nullable();

            $table->text('keterangan_bank')->nullable();

            $table->string('file_rekening')->nullable();

            /*
            |--------------------------------------------------------------------------
            | DATA PENTING
            |--------------------------------------------------------------------------
            */

            $table->date('tmt_cpns')->nullable();

            $table->string('file_sk_cpns')->nullable();

            $table->string('tmb')->nullable();

            $table->date('tkgb')->nullable();

            $table->string('file_sk_kgb')->nullable();

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('biodatas');
    }
}
