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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nipd');
            $table->string('nama_siswa');
            $table->unsignedBigInteger('user_id')->require();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('ttl');
            $table->unsignedBigInteger('kelas_id')->require();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('restrict');
            $table->string('jenis_kelamin');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {$table->dropForeign(['users_id']);
        $table->dropColumn('users_id');
        
        Schema::dropIfExists('siswa');
    }
};
