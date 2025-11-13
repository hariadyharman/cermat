<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\HasilUjian;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ====== ADMIN ======
        User::firstOrCreate(
            ['email' => 'mando@gmail.com'], // cek duplikat berdasarkan email
            [
                'name'     => 'Harman Hariady',
                'username' => 'mando',
                'password' => Hash::make('Sumda#0046'),
                'role'     => 'admin',
            ]
        );

        // ====== USERS ======
        $users = [
            ['name' => 'Agung Wahyudi', 'username' => 'agung_wahyudi', 'email' => 'agung@gmail.com'],
            ['name' => 'Muh Fahrurrozi', 'username' => 'ozi_jomblo', 'email' => 'fahrurrozi@gmail.com'],
            ['name' => 'Nizelya Andhika', 'username' => 'nizelya_patidino', 'email' => 'andhika@gmail.com'],
            ['name' => 'Bagus Amri Cahyadi', 'username' => 'bages', 'email' => 'bagesazmi@gmail.com'],
            ['name' => 'Ratna Dewi Rengganis', 'username' => 'cantik', 'email' => 'ratna@gmail.com'],
            ['name' => 'Selamat Jayadi', 'username' => 'memet', 'email' => 'memet@gmail.com'],
            ['name' => 'Senim Polen', 'username' => 'senim_jaka', 'email' => 'polin@gmail.com'],
            ['name' => 'Anugera', 'username' => 'anugera_hajwibaan', 'email' => 'anugera@gmail.com'],
            ['name' => 'Oja Karasiwi', 'username' => 'oja_karasiwi', 'email' => 'ojakarasiwi@gmail.com'],
            ['name' => 'Azwa Nisyiatul Rizki', 'username' => 'azwa_rizki', 'email' => 'azwa@gmail.com'],
        ];

        foreach ($users as $u) {
            User::firstOrCreate(
                ['email' => $u['email']],
                [
                    'name'     => $u['name'],
                    'username' => $u['username'],
                    'password' => Hash::make('password'), // hash password agar bisa login
                    'role'     => 'guest',
                ]
            );
        }

        // ====== HASIL UJIAN (opsional) ======
        // Contoh untuk generate hasil ujian random:
        /*
        $users = User::where('role', 'guest')->inRandomOrder()->take(10)->get();

        foreach ($users as $user) {
            HasilUjian::create([
                'user_id'    => $user->id,
                'total_skor' => rand(60, 100),
                'kol_1' => rand(1, 10),
                'kol_2' => rand(1, 10),
                'kol_3' => rand(1, 10),
                'kol_4' => rand(1, 10),
                'kol_5' => rand(1, 10),
                'kol_6' => rand(1, 10),
                'kol_7' => rand(1, 10),
                'kol_8' => rand(1, 10),
                'kol_9' => rand(1, 10),
                'kol_10'=> rand(1, 10),
            ]);
        }
        */
    }
}
