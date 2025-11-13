<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Tes Kecermatan</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Poppins", sans-serif;
        }

        .welcome-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            padding: 40px;
            animation: fadeInUp 0.8s ease;
        }

        .welcome-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #0078ff;
        }

        .welcome-text {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
            text-align: justify;
        }

        .btn-register {
            background: linear-gradient(45deg, #0078ff, #00c6ff);
            border: none;
            color: white;
            padding: 12px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.05rem;
            transition: all 0.3s ease;
            margin: 5px;
        }

        .btn-register:hover {
            background: linear-gradient(45deg, #00c851, #00e676);
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 120, 255, 0.4);
        }

        .contact-info {
            font-size: 0.95rem;
            color: #666;
            margin-top: 15px;
            text-align: center;
        }

        .contact-info a {
            color: #0078ff;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Badge Nomor */
        .goal-badge {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            flex-shrink: 0;
            font-size: 0.85rem;
            transition: all 0.2s ease;
            cursor: default;
        }

        .goal-badge:hover {
            transform: scale(1.2);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
        }

        .goal-item {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            margin-bottom: 14px;
        }

        .goal-text {
            flex: 1;
        }

        /* Tombol lanjutkan di tengah */
        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="welcome-card">
                    <h1 class="welcome-title mb-3 text-center">Selamat datang di Simulasi Kecermatan 👋</h1>

                    <p class="welcome-text mb-3">
                        Aplikasi <strong>Simulasi Tes Kecermatan</strong> ini dirancang dengan tujuan sebagai berikut:
                    </p>

                    <div class="mb-4">
                        <div class="goal-item">
                            <div class="goal-badge" style="background-color:#007bff;">1</div>
                            <p class="goal-text welcome-text">Menilai ketelitian – memastikan calon mampu bekerja dengan
                                teliti tanpa melewatkan detail penting.</p>
                        </div>
                        <div class="goal-item">
                            <div class="goal-badge" style="background-color:#28a745;">2</div>
                            <p class="goal-text welcome-text">Mengukur konsentrasi dan fokus – kemampuan untuk tetap
                                fokus dalam jangka waktu tertentu.</p>
                        </div>
                        <div class="goal-item">
                            <div class="goal-badge" style="background-color:#ffc107;">3</div>
                            <p class="goal-text welcome-text">Menguji kecepatan dan akurasi – menilai kemampuan
                                menyelesaikan tugas cepat namun tetap tepat.</p>
                        </div>
                        <div class="goal-item">
                            <div class="goal-badge" style="background-color:#dc3545;">4</div>
                            <p class="goal-text welcome-text">Meminimalkan kesalahan – calon yang cermat mampu
                                mengurangi kesalahan administratif maupun lapangan.</p>
                        </div>
                        <div class="goal-item">
                            <div class="goal-badge" style="background-color:#6f42c1;">5</div>
                            <p class="goal-text welcome-text">Mempersiapkan tugas lapangan dan administratif –
                                memastikan calon siap menghadapi pekerjaan yang memerlukan perhatian terhadap detail.
                            </p>
                        </div>
                    </div>

                    @auth
                        <p class="welcome-text mb-3 text-center">
                            Anda login sebagai <strong>{{ ucfirst(auth()->user()->role) }}</strong>.
                        </p>

                        <div class="btn-container">
                            @if (auth()->user()->role === 'admin')
                                <a href="{{ url('/dashboard/hasil') }}" class="btn-register">🧭 Lanjut ke Dashboard
                                    Admin</a>
                            @elseif(auth()->user()->role === 'peserta')
                                <a href="{{ url('/dashboard/hasil') }}" class="btn-register">🚀 Lanjutkan simulasi</a>
                            @elseif(auth()->user()->role === 'guest')
                                <button id="logoutBtn" class="btn-register">🚪 Logout</button>
                                <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display:none;">
                                    @csrf
                                </form>
                            @else
                                <a href="{{ url('/') }}" class="btn-register">🏠 Kembali ke Beranda</a>
                            @endif
                        </div>
                    @else
                        <p class="welcome-text mb-3 text-center">
                            Silakan login atau daftar untuk menggunakan aplikasi.
                        </p>
                        <div class="btn-container">
                            <a href="{{ url('/register') }}" class="btn-register">📝 Daftar / Registrasi</a>
                            <a href="{{ url('/login') }}" class="btn-register">🔑 Login Sekarang</a>
                        </div>
                    @endauth

                    <div class="contact-info mt-4">
                        Setelah registrasi, hubungi admin <strong>@mando</strong> di WhatsApp:
                        <a href="https://wa.me/6282341436666" target="_blank">082341436666</a>
                        untuk diaktifkan sebagai peserta simulasi.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Logout Script -->
    <script>
        const logoutBtn = document.getElementById('logoutBtn');
        const logoutForm = document.getElementById('logoutForm');
        if (logoutBtn) {
            logoutBtn.addEventListener('click', () => {
                Swal.fire({
                    title: 'Yakin ingin logout?',
                    text: "Sesi Anda akan berakhir.",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#0078ff',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, logout',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        logoutForm.submit();
                    }
                });
            });
        }
    </script>
</body>

</html>
