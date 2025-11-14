<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilUjian;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class HasilUjianController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $chartLabels = [];
        for ($i = 1; $i <= 10; $i++) {
            $chartLabels[] = "Kol $i";
        }

        if ($user->role === 'admin') {
            // Admin lihat semua hasil terbaru → terlama
            $hasil = HasilUjian::with('user')
                ->latest()
                ->get();

            // Dataset: setiap peserta → ambil nilai per kolom
            $chartDatasets = $hasil->groupBy('user_id')->map(function ($rows) {
                $row = $rows->first(); // ambil hasil terbaru
                $data = [];
                for ($i = 1; $i <= 10; $i++) {
                    $data[] = $row->{'kol_' . $i};
                }
                return [
                    'label' => $row->user->name . ' (' . $row->created_at->format('d/m H:i') . ')',
                    'data'  => $data
                ];
            })->values()->toArray();
        } else {
            // Peserta → hanya lihat miliknya
            $hasil = HasilUjian::with('user')
                ->where('user_id', $user->id)
                ->latest()
                ->get();

            $row = $hasil->first(); // ambil hasil terbaru
            $data = [];
            if ($row) {
                for ($i = 1; $i <= 10; $i++) {
                    $data[] = $row->{'kol_' . $i};
                }
            }

            $chartDatasets = [
                [
                    'label' => $user->name . ' (' . optional($row)->created_at?->format('d/m H:i') . ')',
                    'data'  => $data,
                ]
            ];
        }

        return view('dashboard.hasil.index', compact('hasil', 'chartLabels', 'chartDatasets'));
    }

public function exportPdf()
{
 $hasil = HasilUjian::with('user')
    ->orderBy('user_id')
    ->orderByDesc('created_at')
    ->get();

// Rekap rata-rata skor per peserta
$rekap = $hasil->groupBy('user_id')->map(function ($rows) {
    $latest = $rows->first(); // hasil terbaru

    $rata = round($latest->total_skor / 10, 2);
    $nilaiAkhir = round($rata * 3, 2);

    return [
        'nama'         => $latest->user->name ?? 'Tidak ada',
        'rata_rata'    => $rata,
        'nilai_akhir'  => $nilaiAkhir
    ];
});


    $pdf = Pdf::loadView('dashboard.hasil.pdf', compact('hasil', 'rekap'))
              ->setPaper('a4', 'landscape');

    return $pdf->download('hasil-ujian.pdf');
}


    public function reset()
    {
        // Jika tidak ada foreign key, bisa pakai truncate:
        // HasilUjian::truncate();

        // Jika ada foreign key:
        DB::table('hasil_ujian')->delete();
        DB::statement('ALTER TABLE hasil_ujian AUTO_INCREMENT = 1');

        return redirect()->back()->with('success', 'Tabel hasil_ujian berhasil di-reset!');
    }

    public function store(Request $request)
    {
        // Validasi minimal
        $data = $request->validate([
            'kol_1' => 'required|integer',
            'kol_2' => 'required|integer',
            'kol_3' => 'required|integer',
            'kol_4' => 'required|integer',
            'kol_5' => 'required|integer',
            'kol_6' => 'required|integer',
            'kol_7' => 'required|integer',
            'kol_8' => 'required|integer',
            'kol_9' => 'required|integer',
            'kol_10' => 'required|integer',
            'total_skor' => 'required|integer',
        ]);

        // Simpan ke database
        $hasil = HasilUjian::create([
            'user_id'    => auth()->id(),
            'kol_1'      => $data['kol_1'],
            'kol_2'      => $data['kol_2'],
            'kol_3'      => $data['kol_3'],
            'kol_4'      => $data['kol_4'],
            'kol_5'      => $data['kol_5'],
            'kol_6'      => $data['kol_6'],
            'kol_7'      => $data['kol_7'],
            'kol_8'      => $data['kol_8'],
            'kol_9'      => $data['kol_9'],
            'kol_10'     => $data['kol_10'],
            'total_skor' => $data['total_skor'],
        ]);

        return response()->json(['success' => true, 'data' => $hasil]);
    }
}