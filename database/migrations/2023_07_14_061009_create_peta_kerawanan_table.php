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
        Schema::create('peta_kerawanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_kerawanan_id')->require();
            $table->foreign('jenis_kerawanan_id')->references('id')->on('jeniskerawanan')->onDelete('restrict');
            $table->unsignedBigInteger('nama_id')->require();
            $table->foreign('nama_id')->references('id')->on('siswa')->onDelete('restrict');
            $table->unsignedBigInteger('nipd_id')->require();
            $table->foreign('nipd_id')->references('id')->on('siswa')->onDelete('restrict');
            $table->unsignedBigInteger('walas_id')->require();
            $table->foreign('walas_id')->references('id')->on('walas')->onDelete('restrict');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void

    {
        $table->dropForeign(['jenis_kerawanan_id']);
        $table->dropColumn('jenis_kerawanan_id');
        $table->dropForeign(['nama_id']);
        $table->dropColumn('nama_id');
        $table->dropForeign(['nipd_id']);
        $table->dropColumn('nipd_id');
        $table->dropForeign(['walas_id']);
        $table->dropColumn('walas_id');
        Schema::dropIfExists('peta_kerawanan');
    }
};
