<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ambil semua pengguna
        return view('user.index', compact('users'));
    }

    public function updateRole(Request $request, User $user)
    {
        // Pastikan hanya admin yang bisa mengubah role
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to change roles.');
        }

        $validated = $request->validate([
            'role' => 'required|in:user,admin', // Validasi agar hanya bisa memilih antara 'user' atau 'admin'
        ]);

        $user->update([
            'role' => $validated['role'],
        ]);

        return redirect()->route('users.index')->with('success', 'Role updated successfully.');
    }
}
