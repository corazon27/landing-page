<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackAffiliate
{
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Ambil kode referral (dari URL atau dari Cookie yang sudah ada)
        $referralCode = $request->query('ref') ?: $request->cookie('affiliate_ref');

        // 2. Siapkan variabel suffix untuk WhatsApp
        $suffix = $referralCode ? " (ID Affiliator: $referralCode)" : "";
        
        // 3. Bagikan ke seluruh View Blade (termasuk welcome dan layout)
        view()->share('suffix', $suffix);

        // 4. Lanjutkan request
        $response = $next($request);

        // 5. Jika ada parameter 'ref' di URL, pasangkan/perbarui Cookie di response
        if ($request->has('ref')) {
            $response->cookie('affiliate_ref', $request->query('ref'), 43200);
        }

        return $response;
    }
    
}