<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('hasil_ujian'); // hapus dulu kalau sudah ada

        Schema::create('hasil_ujian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            for ($i = 1; $i <= 10; $i++) {
                $table->integer('kol_'.$i)->default(0);
            }
            $table->integer('total_skor')->default(0);
            $table->json('jawaban')->nullable(); // opsional
            $table->timestamps();

            // relasi ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hasil_ujian');
    }
};
