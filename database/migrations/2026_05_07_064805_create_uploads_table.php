<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id');

            $table->string('tahun');

            $table->string('bulan');

            $table->string('file_kinerja')->nullable();

            $table->string('file_absensi')->nullable();

            $table->string('status')->default('belum upload');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('uploads');
    }
}