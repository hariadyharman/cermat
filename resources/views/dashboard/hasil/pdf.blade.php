<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan Hasil Ujian</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            margin: 0;
            /* margin diganti di @page */
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
            page-break-inside: auto;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }

        th {
            background: #eee;
        }

        h3 {
            text-align: center;
            margin-bottom: 10px;
        }

        /* Atur margin halaman untuk header/footer */
        @page {
            margin: 80px 20px 60px 20px;
            counter-increment: page;
        }

        /* Header (nomor halaman di atas) */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 50px;
            text-align: center;
            font-size: 11px;
        }

        .page-number:before {
            content: "- " counter(page) " -";
        }

        /* Footer (copywrite) */
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 30px;
            text-align: center;
            font-size: 10px;
            color: #555;
        }

        /* Supaya tabel panjang otomatis pecah halaman */
        tr {
            page-break-inside: avoid;
        }

        /* Supaya tabel header ulang tiap halaman saat cetak PDF */
        thead {
            display: table-header-group;
        }

        tbody {
            display: table-row-group;
        }
    </style>
</head>

<body>
    {{-- Header halaman --}}
    <header>
        <span class="page-number"></span>
    </header>

    <h3>📄 Laporan Hasil Tes Kecermatan</h3>

    {{-- Tabel hasil lengkap --}}
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peserta</th>
                @for ($i = 1; $i <= 10; $i++)
                    <th>Kol {{ $i }}</th>
                @endfor
                <th>Total Skor</th>
                <th>Batch / Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hasil as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->user->name ?? 'Tidak ada' }}</td>
                    @for ($i = 1; $i <= 10; $i++)
                        <td>{{ $row->{'kol_' . $i} }}</td>
                    @endfor
                    <td>{{ $row->total_skor }}</td>
                    <td>{{ $row->batch ?? $row->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="page-break-before: always;"></div>

    {{-- Tabel rekap rata-rata --}}
    <h3>📊 Rekap Rata-Rata Skor Peserta</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peserta</th>
                <th>Rata-Rata Skor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rekap as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data['nama'] }}</td>
                    <td>{{ $data['rata_rata'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Footer copywrite --}}
    <footer>
        &copy; 2025 Programer Mando Ubuntu
    </footer>
</body>

</html>
