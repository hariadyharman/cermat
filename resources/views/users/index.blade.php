<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">

        <!-- Header dengan tombol sejajar -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Daftar Peserta</h1>
            <div>
                <a href="{{ route('users.create') }}" class="btn btn-primary me-2">Tambah Peserta</a>
                <a href="{{ url('/dashboard/hasil') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>

        <!-- Alert pesan sukses/error -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Tabel responsive -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped w-100 text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <td>{{ $users->firstItem() + $index }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>

                            <!-- Form Update Role -->
                            <td>
                                <form action="{{ route('users.updateRole', $user->id) }}" method="POST"
                                    class="d-flex gap-2 justify-content-center">
                                    @csrf
                                    @method('PATCH')
                                    <select name="role" class="form-select form-select-sm w-auto">
                                        <option value="guest" {{ $user->role == 'guest' ? 'selected' : '' }}>Guest
                                        </option>
                                        <option value="peserta" {{ $user->role == 'peserta' ? 'selected' : '' }}>
                                            Peserta</option>
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin
                                        </option>
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                                </form>
                            </td>

                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin hapus?')"
                                        class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination di tengah -->
        <div class="d-flex justify-content-center mt-3">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>

    </div>
    {{-- Copywrite Footer --}}
    <footer class="text-center mt-4 mb-3">
        &copy; 2025 Editor Mando Ubuntu
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
