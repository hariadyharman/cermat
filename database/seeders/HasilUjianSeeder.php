<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\HasilUjian;

class HasilUjianSeeder extends Seeder
{
    public function run(): void
    {
        // Buat 5 user dummy kalau belum ada
        if (User::count() < 5) {
            $users = User::factory()->count(5)->create();
        } else {
            $users = User::all()->take(5);
        }

        foreach ($users as $user) {
            $kolom = [];
            $total = 0;

            for ($i = 1; $i <= 10; $i++) {
                $nilai = rand(1, 10); // skor random 1–10
                $kolom["kol_$i"] = $nilai;
                $total += $nilai;
            }

            HasilUjian::create(array_merge([
                'user_id'    => $user->id,
                'total_skor' => $total,
            ], $kolom));
        }
    }
}
