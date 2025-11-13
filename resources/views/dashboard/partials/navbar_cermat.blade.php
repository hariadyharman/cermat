<div class="header blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col logo_section">
                <div class="full">
                    <div class="center-desk">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('img/lencana-tribrata-polri-logo.png') }}" alt="logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <nav class="navigation navbar navbar-expand-md navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav nav-pills mr-auto">
                            <li class="nav-item">
                                <a class="nav-link-primary nav-link {{ Request::is('dashboard') ? 'active' : '' }}"
                                    href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link-primary nav-link {{ Request::is('dashboard/angka*') ? 'active' : '' }}"
                                    href="{{ url('/dashboard/angka') }}">Angka</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link-primary nav-link {{ Request::is('dashboard/huruf*') ? 'active' : '' }}"
                                    href="{{ url('/dashboard/huruf') }}">Huruf</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link-primary nav-link {{ Request::is('dashboard/kombinasi*') ? 'active' : '' }}"
                                    href="{{ url('/dashboard/kombinasi') }}">Kombinasi</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link-primary nav-link {{ Request::is('dashboard/simbol*') ? 'active' : '' }}"
                                    href="{{ url('/dashboard/simbol') }}">Simbol</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link-primary nav-link {{ Request::is('dashboard/hasil*') ? 'active' : '' }}"
                                    href="{{ route('hasil.index') }}">Hasil</a>
                            </li>


                            <li class="nav-item">
                                <form action="/logout" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="nav-link px-3 bg-danger border-0">
                                        Logout <span data-feather="log-out"></span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
