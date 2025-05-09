<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Models\Zakat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Zakat $zakat)
    {

        $beras = Zakat::sum('beras');
        $uang = Zakat::sum('uang');
        $infaq = Zakat::sum('infaq');
        $jiwa = Zakat::sum('jiwa');
        $kk = Zakat::count('nama');
        $penerima = Penerima::count('nama_penerima');
        $sedekah_uang = Zakat::where('bayar', 'uang')->sum('sedekah');
        $sedekah_beras= Zakat::where('bayar', 'beras')->sum('sedekah');

        return view('dashboard',[
            'beras' => $beras,
            'uang' => $uang,
            'infaq' => $infaq,
            'jiwa' => $jiwa,
            'kk' => $kk,
            'penerima' => $penerima,
            'sedekah_uang' => $sedekah_uang,
            'sedekah_beras' => $sedekah_beras,
        ]);
    }
}
