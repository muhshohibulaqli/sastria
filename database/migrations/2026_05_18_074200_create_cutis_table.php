<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

Schema::create('cutis', function (Blueprint $table) {

    $table->id();

    $table->unsignedBigInteger('user_id');

    $table->string('nomor_surat');

    $table->string('jenis_cuti');

    $table->date('tanggal_mulai');

    $table->date('tanggal_selesai');

    $table->integer('jumlah_hari')->default(0);

    $table->integer('sisa_cuti')->default(12);

    $table->string('file_formulir')->nullable();

    $table->string('status')->default('menunggu');

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
        Schema::dropIfExists('cutis');
    }
}
