<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('units', function (Blueprint $table) {

            $table->string('wilayah')->nullable()->after('nama_lengkap_unit');

        });
    }

    public function down(): void
    {
        Schema::table('units', function (Blueprint $table) {

            $table->dropColumn('wilayah');

        });
    }
};