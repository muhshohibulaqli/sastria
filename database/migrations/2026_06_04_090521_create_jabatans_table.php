<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('jabatans', function (Blueprint $table) {

        $table->id();

        $table->unsignedBigInteger('user_id');

        $table->string('nama_jabatan')->nullable();

        $table->date('tmt_jabatan')->nullable();

        $table->string('no_sk')->nullable();

        $table->date('tgl_sk')->nullable();

        $table->string('jenis_jabatan')->nullable();

        $table->string('pejabat_penetap')->nullable();

        $table->text('keterangan')->nullable();

        $table->string('file_jabatan')->nullable();

        $table->string('validasi_admin_unit')
              ->default('Belum Validasi');

        $table->timestamps();

    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatans');
    }
}
