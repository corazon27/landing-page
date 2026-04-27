<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\AffiliateUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // Tambahkan import ini untuk login otomatis
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi Data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:affiliate_users',
            'whatsapp' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 2. Simpan ke Database & Tangkap hasilnya ke variabel $affiliate
        $affiliate = AffiliateUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'password' => Hash::make($request->password),
        ]);

        // 3. Memicu pengiriman email verifikasi (Event Registered)
        event(new Registered($affiliate));

        // 4. Login otomatis menggunakan guard affiliate
        // Ini dilakukan agar Laravel tahu "siapa" yang sedang menunggu verifikasi
        Auth::guard('affiliate')->login($affiliate);

        // 5. Redirect ke halaman pemberitahuan verifikasi
        // Bukan kembali ke form (back), tapi ke route khusus verifikasi
        return redirect()->route('verification.notice');
    }
}