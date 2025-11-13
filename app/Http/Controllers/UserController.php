<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Middleware hanya admin yang bisa mengakses
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    // Tampilkan semua peserta dan guest
    public function index()
    {
        $users = User::whereIn('role', ['guest', 'peserta'])
                     ->paginate(10);

        return view('users.index', compact('users'));
    }

    // Form tambah peserta
    public function create()
    {
       return view('dashboard.users.create', [
    'title' => 'Tambah Peserta'
]);

    }

    // Simpan peserta baru
   public function store(Request $request)
{
    $request->validate([
        'name'      => 'required|string|max:255',
        'username'  => 'required|string|max:255|unique:users',
        'email'     => 'required|email|unique:users',
        'password'  => 'required|min:6|confirmed',
    ]);

    User::create([
        'name'     => $request->name,
        'username' => $request->username,
        'email'    => $request->email,
        'password' => $request->password, // otomatis di-hash oleh mutator / casts
        'role'     => 'guest',
    ]);

    return redirect()->route('users.index')->with('success', 'Peserta berhasil ditambahkan!');
}


    // Form edit peserta
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Update peserta
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email'    => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        $user->name     = $request->name;
        $user->username = $request->username;
        $user->email    = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password); // ✅ hash
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'Peserta berhasil diupdate!');
    }

    // Update role
    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:guest,peserta,admin',
        ]);

        // Cegah admin menurunkan dirinya sendiri
        if ($user->id === auth()->id() && $request->role !== 'admin') {
            return back()->with('error', 'Anda tidak bisa mengubah role Anda sendiri.');
        }

        $user->role = $request->role;
        $user->save();

        return back()->with('success', "Role {$user->name} berhasil diubah menjadi {$request->role}");
    }

    // Hapus peserta
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Peserta berhasil dihapus!');
    }
}
