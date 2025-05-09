<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Models\Zakat as ModelsZakat;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        return view('laporan', [
            'zakat' => ModelsZakat::latest()->get(),
            'beras' => ModelsZakat::sum('beras'),
            'uang' => ModelsZakat::sum('uang'),
            'infaq' => ModelsZakat::sum('infaq'),
            'jiwa' => ModelsZakat::sum('jiwa'),
            'kk' => ModelsZakat::count('nama'),
            'penerima' => Penerima::count('nama_penerima'),
            'sedekah_uang' => ModelsZakat::where('bayar', 'uang')->sum('sedekah'),
            'sedekah_beras' => ModelsZakat::where('bayar', 'beras')->sum('sedekah'),
        ]);
    }
}
