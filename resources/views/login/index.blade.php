@extends('layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            {{-- Alert Success --}}
            @if (session()->has('succsess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('succsess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Alert Error --}}
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Form Login --}}
            <main class="form-signin mt-5">
                <h1 class="h3 mb-4 fw-normal text-center">Please Login</h1>
                <form action="/login" method="POST">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>

                <small class="d-block text-center mt-3">
                    Belum registrasi? <a href="/register">Registrasi sekarang</a>
                </small>
            </main>
        </div>
    </div>

    {{-- Copywrite Footer --}}
    <footer class="text-center mt-4 mb-3">
        &copy; 2025 Editor Mando Ubuntu <p <i class="bi bi-whatsapp"></i> 082341436666</p>
    </footer>
@endsection
