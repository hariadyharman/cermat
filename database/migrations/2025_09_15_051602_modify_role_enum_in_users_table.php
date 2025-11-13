<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Ubah kolom role jadi enum('admin','peserta','guest') default guest
        DB::statement("ALTER TABLE users MODIFY role ENUM('admin','peserta','guest') NOT NULL DEFAULT 'guest'");
    }

    public function down(): void
    {
        // Balikkan ke kondisi sebelumnya (misal hanya admin dan peserta)
        DB::statement("ALTER TABLE users MODIFY role ENUM('admin','peserta') NOT NULL DEFAULT 'peserta'");
    }
};
