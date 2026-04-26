<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi Data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:affiliates',
            'whatsapp' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed', // 'confirmed' mencari 'password_confirmation'
        ]);

        // 2. Simpan ke Database
        Affiliate::create([
            'name' => $request->name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'password' => Hash::make($request->password),
        ]);

        // 3. Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil! Silakan masuk ke akunmu.');
    }
}