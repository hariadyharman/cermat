<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilUjian extends Model
{
    use HasFactory;

    protected $table = 'hasil_ujian';


    protected $fillable = [
        'user_id',
        'kol_1',
        'kol_2',
        'kol_3',
        'kol_4',
        'kol_5',
        'kol_6',
        'kol_7',
        'kol_8',
        'kol_9',
        'kol_10',
    ];



    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Hitung total skor otomatis
    public function getTotalSkorAttribute()
    {
        return $this->kol_1 + $this->kol_2 + $this->kol_3 + $this->kol_4 + $this->kol_5
             + $this->kol_6 + $this->kol_7 + $this->kol_8 + $this->kol_9 + $this->kol_10;
    }
    protected $casts = [
    'jawaban' => 'array', // otomatis decode JSON ke array
];


}