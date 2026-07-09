<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {

        Schema::table('kgbs', function (Blueprint $table) {

            $table->string('status_generate')
            ->default('Belum')
            ->after('validasi_admin_unit');

            $table->string('nomor_sk_baru')
            ->nullable()
            ->after('status_generate');

            $table->date('kgb_yad')
            ->nullable()
            ->after('nomor_sk_baru');

            $table->string('file_sk_baru')
            ->nullable()
            ->after('kgb_yad');

            $table->unsignedBigInteger('generated_by')
            ->nullable()
            ->after('file_sk_baru');

            $table->timestamp('generated_at')
            ->nullable()
            ->after('generated_by');

        });

    }

    public function down()
    {

        Schema::table('kgbs', function (Blueprint $table) {

            $table->dropColumn([

                'status_generate',

                'nomor_sk_baru',

                'kgb_yad',

                'file_sk_baru',

                'generated_by',

                'generated_at'

            ]);

        });

    }

};