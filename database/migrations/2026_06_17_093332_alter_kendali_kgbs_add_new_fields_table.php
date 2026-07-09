<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('kendali_kgbs', function (Blueprint $table) {

            if (!Schema::hasColumn('kendali_kgbs', 'kantor')) {
                $table->string('kantor')->nullable()->after('jabatan');
            }

            if (!Schema::hasColumn('kendali_kgbs', 'penandatangan')) {
                $table->string('penandatangan')->nullable()->after('gaji_pokok_lama');
            }

            if (!Schema::hasColumn('kendali_kgbs', 'nomor_sk')) {
                $table->string('nomor_sk')->nullable()->after('penandatangan');
            }

            if (!Schema::hasColumn('kendali_kgbs', 'tanggal')) {
                $table->date('tanggal')->nullable()->after('nomor_sk');
            }

            if (!Schema::hasColumn('kendali_kgbs', 'tmt')) {
                $table->date('tmt')->nullable()->after('tanggal');
            }

            if (!Schema::hasColumn('kendali_kgbs', 'masa_kerja')) {
                $table->string('masa_kerja')->nullable()->after('tmt');
            }

            if (!Schema::hasColumn('kendali_kgbs', 'berdasarkan_masa_kerja')) {
                $table->string('berdasarkan_masa_kerja')->nullable()->after('gaji_pokok_baru');
            }

            if (!Schema::hasColumn('kendali_kgbs', 'tmt_baru')) {
                $table->date('tmt_baru')->nullable()->after('pangkat_baru');
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kendali_kgbs', function (Blueprint $table) {

            $dropColumns = [];

            foreach ([
                'kantor',
                'penandatangan',
                'nomor_sk',
                'tanggal',
                'tmt',
                'masa_kerja',
                'berdasarkan_masa_kerja',
                'tmt_baru',
            ] as $column) {

                if (Schema::hasColumn('kendali_kgbs', $column)) {
                    $dropColumns[] = $column;
                }
            }

            if (!empty($dropColumns)) {
                $table->dropColumn($dropColumns);
            }
        });
    }
};