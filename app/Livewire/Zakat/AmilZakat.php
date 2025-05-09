<?php

namespace App\Livewire\Zakat;

use App\Models\Amil;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class AmilZakat extends Component
{
    public $search="";
    public $paginate = 10;

    
    public function render()
    {
        $amil = Amil::where('nama_amil', 'like', '%'.$this->search.'%')->paginate($this->paginate);
        return view('livewire.zakat.amil-zakat',[
            'amil' => $amil,
        ]);
    }

    public function amilDelete($get_id){

        $zakat = Amil::destroy($get_id);

    }
}
