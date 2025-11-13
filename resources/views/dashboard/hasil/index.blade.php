@extends('dashboard.layouts.main')

@section('container')
    <div class="container mt-4">
        <h3 class="mb-4">
            📊
            @if (auth()->user()->role === 'admin')
                Daftar Hasil Semua Peserta
            @else
                Hasil Ujian Anda
            @endif
        </h3>

        <!-- Tabel -->
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Peserta</th>
                    @for ($i = 1; $i <= 10; $i++)
                        <th>Kol {{ $i }}</th>
                    @endfor
                    <th>Total Skor</th>
                    <th>Waktu Ujian</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($hasil as $row)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $row->user->name ?? 'Tidak ada' }}</td>
                        @for ($i = 1; $i <= 10; $i++)
                            <td class="text-center">{{ $row->{'kol_' . $i} }}</td>
                        @endfor
                        <td class="fw-bold text-center">{{ $row->total_skor }}</td>
                        <td class="text-center">{{ $row->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="14" class="text-center text-muted">Belum ada hasil ujian</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Grafik -->
        <h3 class="mt-5">
            📈
            @if (auth()->user()->role === 'admin')
                Grafik Perbandingan Peserta
            @else
                Grafik Skor Anda
            @endif
        </h3>
        <canvas id="chartHasil" height="120"></canvas>

        <!-- Aksi khusus admin -->
        @can('admin')
            <div class="mt-3">
                <a href="{{ route('hasil.exportPdf') }}" class="btn btn-danger mb-2">📄 Export PDF</a>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('hasil-ujian.reset') }}" method="POST"
                    onsubmit="return confirm('Yakin reset hasil ujian?')">
                    @csrf
                    <button type="submit" class="btn btn-danger">Reset Hasil Ujian</button>
                </form>
            </div>
            {{-- Copywrite Footer --}}
            <footer class="text-center mt-4 mb-3">
                &copy; 2025 Programer Mando Ubuntu
            </footer>
        @endcan
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('chartHasil').getContext('2d');
        const chartHasil = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($chartLabels),
                datasets: @json($chartDatasets).map((dataset, index) => ({
                    label: dataset.label,
                    data: dataset.data,
                    borderWidth: 2,
                    fill: false,
                    borderColor: `hsl(${index * 50}, 70%, 50%)`,
                    backgroundColor: `hsl(${index * 50}, 70%, 50%)`
                }))
            },
            options: {
                responsive: true,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                plugins: {
                    title: {
                        display: true,
                        text: @json(auth()->user()->role === 'admin' ? 'Perbandingan Hasil Ujian Peserta' : 'Grafik Skor Anda')
                    }
                }
            }
        });
    </script>
@endsection
