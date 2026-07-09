<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMasterFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            // Relasi ke tabel units
            $table->unsignedBigInteger('unit_id')
                  ->nullable()
                  ->after('role');

            // Relasi ke tabel jabatans
            $table->unsignedBigInteger('jabatan_id')
                  ->nullable()
                  ->after('unit_id');

            // Status Pegawai
            $table->enum('status_pegawai', [
                'PNS',
                'PPPK'
            ])->nullable()->after('jabatan_id');

            // Status Aktif
            $table->enum('status_aktif', [
                'Aktif',
                'Non Aktif'
            ])->default('Aktif')->after('status_pegawai');

            // Foreign Key
            $table->foreign('unit_id')
                  ->references('id')
                  ->on('units')
                  ->onUpdate('cascade')
                  ->onDelete('set null');

            $table->foreign('jabatan_id')
                  ->references('id')
                  ->on('jabatans')
                  ->onUpdate('cascade')
                  ->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropForeign(['unit_id']);

            $table->dropForeign(['jabatan_id']);

            $table->dropColumn([
                'unit_id',
                'jabatan_id',
                'status_pegawai',
                'status_aktif'
            ]);

        });
    }
}