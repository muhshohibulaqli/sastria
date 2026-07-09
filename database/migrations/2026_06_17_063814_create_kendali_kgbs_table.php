<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {

        Schema::create('kendali_kgbs', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | RELASI
            |--------------------------------------------------------------------------
            */

            $table->unsignedBigInteger('user_id');

            $table->unsignedBigInteger('kgb_id');

            /*
            |--------------------------------------------------------------------------
            | IDENTITAS ASN
            |--------------------------------------------------------------------------
            */

            $table->string('nama');

            $table->string('nip');

            $table->enum(

                'status_asn',

                [

                    'PNS',

                    'PPPK'

                ]

            );

            $table->string('pangkat');

            $table->string('golongan');

            $table->string('jabatan');

            $table->string('unit_kerja');

            /*
            |--------------------------------------------------------------------------
            | SK TERAKHIR
            |--------------------------------------------------------------------------
            */

            $table->decimal(

                'gaji_pokok_lama',

                15,

                2

            );

            $table->string(

                'sk_terakhir_oleh'

            );

            $table->string(

                'sk_terakhir_nomor'

            );

            $table->date(

                'sk_terakhir_tanggal'

            );

            $table->date(

                'tmt_lama'

            );

            $table->integer(

                'masa_kerja_tahun'

            );

            $table->integer(

                'masa_kerja_bulan'

            );

            /*
            |--------------------------------------------------------------------------
            | SK BARU
            |--------------------------------------------------------------------------
            */

            $table->decimal(

                'gaji_pokok_baru',

                15,

                2

            );

            $table->integer(

                'masa_kerja_baru_tahun'

            );

            $table->integer(

                'masa_kerja_baru_bulan'

            );

            $table->string(

                'pangkat_baru'

            );

            $table->string(

                'golongan_baru'

            );

            $table->date(

                'tmt_berlaku'

            );

            $table->date(

                'kgb_yad'

            );

            /*
            |--------------------------------------------------------------------------
            | SK BARU
            |--------------------------------------------------------------------------
            */

            $table->string(

                'nomor_sk_baru'

            );

            $table->date(

                'tanggal_sk'

            );

            /*
            |--------------------------------------------------------------------------
            | PENANDATANGAN
            |--------------------------------------------------------------------------
            */

            $table->string(

                'jabatan_penandatangan'

            );

            $table->string(

                'nama_penandatangan'

            );

            $table->string(

                'nip_penandatangan'

            );

            /*
            |--------------------------------------------------------------------------
            | FILE
            |--------------------------------------------------------------------------
            */

            $table->string(

                'file_sk_baru'

            )

            ->nullable();

            /*
            |--------------------------------------------------------------------------
            | STATUS
            |--------------------------------------------------------------------------
            */

            $table->enum(

                'status',

                [

                    'Belum Diproses',

                    'Sudah Diproses'

                ]

            )

            ->default(

                'Belum Diproses'

            );

            $table->unsignedBigInteger(

                'generated_by'

            )

            ->nullable();

            $table->timestamp(

                'generated_at'

            )

            ->nullable();

            $table->timestamps();

        });

    }

    public function down()
    {

        Schema::dropIfExists(

            'kendali_kgbs'

        );

    }

};