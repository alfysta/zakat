<?php

namespace App\Http\Controllers;

use App\Models\Amil;
use App\Models\Penerima;
use App\Models\Post;
use App\Models\Zakat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $beras = Zakat::sum('beras');
        $uang = Zakat::sum('uang');
        $infaq = Zakat::sum('infaq');
        $jiwa = Zakat::sum('jiwa');
        $kk = Zakat::count('nama');
        $penerima = Penerima::count('nama_penerima');
        $sedekah_uang = Zakat::where('bayar', 'uang')->sum('sedekah');
        $sedekah_beras= Zakat::where('bayar', 'beras')->sum('sedekah');

        $amil = Amil::latest()->get();

        return view('home.index', [
            'articles' => Post::latest()->limit(3)->get(),
            'beras' => $beras,
            'uang' => $uang,
            'infaq' => $infaq,
            'jiwa' => $jiwa,
            'kk' => $kk,
            'penerima' => $penerima,
            'sedekah_uang' => $sedekah_uang,
            'sedekah_beras' => $sedekah_beras,
            'amil' => $amil
        ]);
    }

    public function amilzakat(){
        
        $amil = Amil::simplePaginate(10);
        return view('home.amil', [
            'amil' => $amil
        ]);
    }

    public function penerima(){
        $penerima = Penerima::with('kategori')->latest()->simplePaginate(10);
        return view('home.penerima', [
            'penerima' => $penerima
        ]);
    }


}
