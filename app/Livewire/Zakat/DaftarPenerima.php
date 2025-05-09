<?php

namespace App\Livewire\Zakat;

use App\Models\Kategori;
use App\Models\Penerima;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarPenerima extends Component
{

    use WithPagination;
    public $search ="";
    public $paginate = 10;

    public function render()
    {
        $kategori_penerima = Kategori::get();

        $penerima_zakat = Penerima::with('kategori')->where('nama_penerima', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.zakat.daftar-penerima',[
            'kategori_penerima' => $kategori_penerima,
            'penerima_zakat' => $penerima_zakat,
        ]);

        
    }
    
    public function penerimaDelete($get_id){

        $zakat = Penerima::destroy($get_id);

    }
}
