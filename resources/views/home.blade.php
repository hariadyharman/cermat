@extends('layout.main')

@section('container')
    <div
        class="min-h-screen bg-gradient-to-br from-blue-100 via-indigo-200 to-purple-200 py-12 px-4 flex justify-center items-center">
        <div class="max-w-4xl w-full bg-white rounded-3xl shadow-2xl p-10 text-center space-y-6">

            <h1 class="text-3xl md:text-4xl font-extrabold text-indigo-700 mb-4">
                🧠 Aplikasi Tes Kecermatan / Sikap Kerja
            </h1>

            <p class="text-gray-700 text-lg leading-relaxed">
                Aplikasi ini dirancang untuk <span class="font-semibold text-indigo-600">melatih kemampuan dan
                    kecermatan</span>
                peserta yang sedang mengikuti seleksi calon anggota <span class="font-semibold text-indigo-600">Polri</span>.
            </p>

            <p class="text-gray-700 text-lg leading-relaxed">
                Aplikasi simulasi ini juga memberikan gambaran dalam menghadapi
                <span class="font-semibold text-indigo-600">ujian psikologi</span>,
                yang dilaksanakan setelah peserta menyelesaikan ujian kecerdasan dan kepribadian.
            </p>

            <div class="bg-indigo-50 p-5 rounded-2xl shadow-inner mt-8">
                <p class="text-gray-600 text-base leading-relaxed">
                    Jika mengalami kendala saat proses login, silakan menghubungi admin
                    <span class="font-semibold text-indigo-700">@mando_ubuntu</span>
                    melalui WhatsApp di
                    <a href="https://wa.me/6282341436666" target="_blank"
                        class="text-green-600 font-semibold hover:underline">
                        082341436666
                    </a>.
                </p>

                <p class="mt-3 text-gray-600 text-base">
                    Untuk memulai latihan, silakan tekan tombol di bawah ini:
                </p>

                <a href="{{ url('/dashboard/hasil') }}" class="btn-mando">
                    🚀 Mulai Tes
                </a>




                <p class="mt-3 text-sm text-gray-500">
                    Selamat berlatih dan semoga sukses!
                </p>
            </div>

            <footer class="pt-8 text-gray-500 text-sm">
                © {{ date('Y') }} Simulasi Tes Kecermatan Polri · Dibuat oleh
                <span class="text-indigo-600 font-semibold">@Mando Ubuntu</span>
            </footer>

        </div>
    </div>
@endsection
