@extends('dashboard.layouts.main_cermat')
@section('container')
<div class="container mt-4">
    <h3 class="mb-4">📊 Daftar Hasil Ujian</h3>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Grafik Skor Per Peserta -->
    <div class="card mb-4">
        <div class="card-header">Grafik Skor Ujian per Peserta</div>
        <div class="card-body">
            <canvas id="hasilChart" height="100"></canvas>
        </div>
    </div>

    <!-- Grafik Rata-rata Per Kolom -->
    <div class="card mb-4">
        <div class="card-header">Rata-rata Nilai per Kolom</div>
        <div class="card-body">
            <canvas id="kolomChart" height="100"></canvas>
        </div>
    </div>

    <!-- Tabel Data -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Peserta</th>
                <th>Total Skor</th>
                @for ($i = 1; $i <= 10; $i++)
                    <th>Kol{{ $i }}</th>
                @endfor
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($hasil as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->user->name ?? '-' }}</td>
                    <td>{{ $row->total_skor }}</td>
                    @for ($i = 1; $i <= 10; $i++)
                        <td>{{ $row->{'kol'.$i} }}</td>
                    @endfor
                    <td>{{ $row->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="14" class="text-center">Belum ada data ujian</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-between mt-3">
        <a href="{{ route('hasil.pdf') }}" class="btn btn-danger">📄 Export PDF</a>
        <a href="{{ url('/dashboard') }}" class="btn btn-secondary">⬅️ Kembali ke Dashboard</a>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Grafik per peserta
    const ctx1 = document.getElementById('hasilChart').getContext('2d');
    new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: {!! json_encode($chartLabels) !!},
            datasets: [{
                label: 'Skor Ujian',
                data: {!! json_encode($chartData) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: { responsive: true, scales: { y: { beginAtZero: true } } }
    });

    // Grafik rata-rata per kolom
    const ctx2 = document.getElementById('kolomChart').getContext('2d');
    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: {!! json_encode(array_keys($avgKolom)) !!},
            datasets: [{
                label: 'Rata-rata Nilai per Kolom',
                data: {!! json_encode(array_values($avgKolom)) !!},
                backgroundColor: 'rgba(255, 99, 132, 0.6)',
                borderColor: 'rgba(255, 99, 132, 1)',
                fill: false,
                tension: 0.3
            }]
        },
        options: { responsive: true, scales: { y: { beginAtZero: true } } }
    });
</script>
@endsection

