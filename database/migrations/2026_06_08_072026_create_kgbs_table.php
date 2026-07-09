<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kgbs', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id');

            $table->string('no_sk_terakhir');

            $table->date('tgl_sk_berkala');

            $table->date('tmt_berkala');

            $table->string('masa_kerja_berkala');

            $table->string('file_sk_kgb')->nullable();

            $table->string('validasi_admin_unit')
                  ->default('Belum Validasi');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kgbs');
    }
};