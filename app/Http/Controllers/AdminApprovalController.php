<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminApprovalController extends Controller
{
    public function index()
    {
        // Tampilkan hanya user guest
        $guests = User::where('role', 'guest')->get();
        return view('admin.approvals', compact('guests'));
    }

    public function approve(User $user)
    {
        $user->update(['role' => 'peserta']);
        return redirect()->route('admin.approvals')->with('success', "User {$user->name} diterima sebagai Peserta.");
    }

    public function reject(User $user)
    {
        // Bisa tetap guest, atau kalau mau bisa delete user
        // $user->delete();

        return redirect()->route('admin.approvals')->with('error', "User {$user->name} ditolak.");
    }
}
