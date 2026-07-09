<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReimbursementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reimbursements', function (Blueprint $table) {

    $table->id();

    $table->unsignedBigInteger('user_id');

    $table->string('nomor_pengajuan')->nullable();

    $table->date('tanggal_nota');

    $table->string('jenis');

    $table->text('deskripsi')->nullable();

    $table->decimal('jumlah',15,2)->default(0);

    $table->string('file_nota')->nullable();

    $table->enum(
        'status',
        [
            'belum_dicairkan',
            'sudah_dicairkan'
        ]
    )->default('belum_dicairkan');

    $table->timestamp('dicairkan_at')->nullable();

    $table->unsignedBigInteger('dicairkan_oleh')->nullable();

    $table->text('catatan_admin')->nullable();

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
        Schema::dropIfExists('reimbursements');
    }
}
