<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // hapus kolom lama
            $table->dropColumn(['is_admin', 'is_peserta']);

            // tambahkan kolom role
            $table->enum('role', ['admin', 'peserta'])->default('peserta');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_peserta')->default(0);
        });
    }
};
