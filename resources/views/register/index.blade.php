@extends('layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">

            <main class="form-registration mt-5 p-4 shadow rounded bg-light">
                <h1 class="h3 mb-4 fw-normal text-center">Form Registrasi</h1>

                {{-- Pesan sukses atau gagal --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="/register" method="post">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">User Name</label>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            id="password_confirmation" placeholder="Confirm Password" required>
                        <label for="password_confirmation">Konfirmasi Password</label>
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>

                <small class="d-block text-center mt-3">
                    Already registered? <a href="/login">Login</a>
                </small>
            </main>

        </div>
    </div>
    {{-- Copywrite Footer --}}
    <footer class="text-center mt-4 mb-3">
        &copy; 2025 Editor Mando Ubuntu <p>@082341436666</p>
    </footer>
@endsection
