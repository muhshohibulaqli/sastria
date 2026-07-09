<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skps', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');

            $table->year('tahun');

            $table->string('capaian_kinerja_organisasi');

            $table->string('predikat_kinerja_pegawai');

            $table->string('file_skp')->nullable();

            $table->enum(
                'validasi_admin_unit',
                [
                    'Belum Validasi',
                    'Disetujui',
                    'Ditolak'
                ]
            )->default('Belum Validasi');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skps');
    }
};