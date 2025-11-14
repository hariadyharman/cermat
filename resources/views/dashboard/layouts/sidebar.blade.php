<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Setting</span>
                </h6>

                <a class="nav-link {{ Request::is('dashboard/input_soal*') ? 'active' : '' }}" href="/dashboard/input_soal">
                    <span data-feather="file-text"></span>
                    Generate Soal
                </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}"
                        href="{{ route('users.index') }}">
                        <span data-feather="file-text"></span>
                        Manage Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-primary nav-link {{ Request::is('dashboard/hasil*') ? 'active' : '' }}"
                        href="{{ route('hasil.index') }}">Hasil</a>
                </li>


                </li>
            @endcan
        </ul>

        @if (auth()->user()->role === 'admin' || auth()->user()->role === 'peserta')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Simulasi</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/angka*') ? 'active' : '' }}" href="/dashboard/angka">
                        <span data-feather="dribbble"></span>
                        Cermat Angka
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/huruf*') ? 'active' : '' }}" href="/dashboard/huruf">
                        <span data-feather="dribbble"></span>
                        Cermat Huruf
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/kombinasi*') ? 'active' : '' }}"
                        href="/dashboard/kombinasi">
                        <span data-feather="dribbble"></span>
                        Cermat Kombinasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/simbol*') ? 'active' : '' }}"
                        href="/dashboard/simbol">
                        <span data-feather="dribbble"></span>
                        Cermat Simbol
                    </a>
                </li>
            </ul>
        @endif
    </div>
</nav>
