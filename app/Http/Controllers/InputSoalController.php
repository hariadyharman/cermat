<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputSoalController extends Controller
{
    public function index()
    {
        // bisa ambil data soal dari database nanti
        return view('dashboard.input_soal.index', [
            'title' => 'Input Soal',
            'active' => 'input_soal'
        ]);
    }
}
