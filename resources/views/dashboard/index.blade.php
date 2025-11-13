@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
    </div>

    <!-- Nav Tabs -->
    <ul class="nav nav-tabs mb-3" id="dashboardTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">
                Home
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">
                Profile
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button"
                role="tab" aria-controls="settings" aria-selected="false">
                Settings
            </button>
        </li>
    </ul>

    <!-- Tab Content -->

    <div class="tab-content" id="dashboardTabContent">
        @can('guest')
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <p>
                <h3>Halaman Home</h3>
                </p>
                <p>Halaman utama yang bisa diakses oleh semua user, jika soal kecermatan tidak keluar kemungkinan anda belum
                    diregistrasi oleh admin</p>
                <p>jika soal kecermatan belum keluar silahkan hubungi admin @mando di no wa 08234136666</p>
                <p>Salam hormat untuk semua peserta . Terima kasih atas kesetiaan anda berkunjung ke blog kami.
                    Sebagai admin, kami berusaha untuk dapat memberikan informasi-informasi yang bermanfaat untuk semua calon
                    peserta
                    , untuk kepentingan proses pembelajaran di tes Psikologi Polri khususnya belajar test kecermatan.</p>
                <p>
                <h5>Abaikan halaman ini jika anda sudah terdaftar sebagai peserta tes</h5>
                </p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p>
                <h5>Halaman Profil</h5>
                <h5>Nama : azwa Nisyiatul Rizki</h5>
                <h5>email : mandoubuntu0046@gmail.com</h5>
                <h5>No Wa : 082341436666</h5>
                <p>
                <h5>Alamat : Barejulat Kecamatan Jonggat Kabupaten Lombok Tengah NTB </h5>
                </p>

            </div>
            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <p>
                <h3> Halaman Administrator</h3>
                </p>
                <p>Ini adalah halaman Settings. hanya dilakukan khusus oleh Administrator .</p>
            </div>
        @endcan
    </div>
@endsection
