<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePangkatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pangkats', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id');

            $table->string('jenis_sk')->nullable();

            $table->string('jenis_pangkat')->nullable();

            $table->string('nama_pangkat')->nullable();

            $table->date('tmt_pangkat')->nullable();

            $table->string('no_sk')->nullable();

            $table->date('tgl_sk')->nullable();

            $table->string('pejabat_penetap')->nullable();

            $table->integer('masa_kerja_tahun')->nullable();

            $table->integer('masa_kerja_bulan')->nullable();

            $table->text('keterangan')->nullable();

            $table->string('file_pangkat')->nullable();

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
        Schema::dropIfExists('pangkats');
    }
}