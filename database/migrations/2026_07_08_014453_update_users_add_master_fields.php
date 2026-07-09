<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersAddMasterFields extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            if (!Schema::hasColumn('users','unit_id')) {

                $table->unsignedBigInteger('unit_id')
                      ->nullable()
                      ->after('role');

            }

            if (!Schema::hasColumn('users','jabatan_id')) {

                $table->unsignedBigInteger('jabatan_id')
                      ->nullable()
                      ->after('unit_id');

            }

            if (!Schema::hasColumn('users','status_pegawai')) {

                $table->enum(
                    'status_pegawai',
                    ['PNS','PPPK']
                )->default('PNS');

            }

            if (!Schema::hasColumn('users','status_aktif')) {

                $table->enum(
                    'status_aktif',
                    ['Aktif','Non Aktif']
                )->default('Aktif');

            }

        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            if (Schema::hasColumn('users','status_aktif')) {

                $table->dropColumn('status_aktif');

            }

            if (Schema::hasColumn('users','status_pegawai')) {

                $table->dropColumn('status_pegawai');

            }

            if (Schema::hasColumn('users','jabatan_id')) {

                $table->dropColumn('jabatan_id');

            }

            if (Schema::hasColumn('users','unit_id')) {

                $table->dropColumn('unit_id');

            }

        });
    }
}