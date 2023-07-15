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
        Schema::create('gurubk', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('deskripsi');
            $table->unsignedBigInteger('layanan_bk_id')->require();
            $table->foreign('layanan_bk_id')->references('id')->on('layanan_bk')->onDelete('restrict');

            $table->unsignedBigInteger('bk_id')->require();
            $table->foreign('bk_id')->references('id')->on('bk')->onDelete('restrict');
            $table->string('nama');

            // $table->unsignedBigInteger('nipd_id')->require();
            // $table->foreign('nipd_id')->references('id')->on('siswa')->onDelete('restrict');
            

            $table->unsignedBigInteger('walas_id')->require();
            $table->foreign('walas_id')->references('id')->on('walas')->onDelete('restrict');

            $table->date('tanggal_konseling');
            $table->string('hasil_konseling');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropForeign(['layanan_bk_id']);
        $table->dropColumn('layanan_bk_id');
        $table->dropForeign(['bk_id']);
        $table->dropColumn('bk_id');
        $table->dropForeign(['walas_id']);
        $table->dropColumn('walas_id');
        Schema::dropIfExists('gurubk');
    }
};
