<?php

namespace App\Livewire\Zakat;

use App\Models\Zakat as ModelsZakat;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ZakatEdit extends Component
{
    #[Validate('required')]
    public $nama;
   
    #[Validate('required')]
    public $bayar;
   
    public $beras;
    public $uang;

    #[Validate('required|min:1')]
    public $jiwa;

    #[Validate('required')]
    public $infaq;

    #[Validate('required')]
    public $sedekah;

    public $userID;

    public $zakatID;

    public function mount(ModelsZakat $zakat){

        $this->userID = $zakat->user_id;
        $this->zakatID = $zakat->id;
        $this->nama = $zakat->nama;
        $this->jiwa = $zakat->jiwa;
        $this->bayar = $zakat->bayar;
        $this->beras = $zakat->beras;
        $this->uang = $zakat->uang;
        $this->infaq = $zakat->infaq;
        $this->sedekah = $zakat->sedekah;
    }

    public function render()
    {
        if($this->bayar == 'beras') 
        {
            $this->sedekah = $this->beras - (2.5 * $this->jiwa);
        }else if($this->bayar == 'uang')
        {
            $this->sedekah = $this->uang - 25000 * $this->jiwa;
        };

        
        return view('livewire.zakat.zakat-edit');
    }


    public function updateZakat(){
  
        $data = ModelsZakat::find($this->zakatID);
        $data->update([
            'user_id' => auth()->user()->id,
            'nama' => $this->nama,
            'jiwa' => $this->jiwa,
            'bayar' => $this->bayar,
            'beras' => $this->beras,
            'uang' => $this->uang,
            'infaq' => $this->infaq,
            'sedekah' => $this->sedekah,
        ]);


        
        $this->redirectIntended(route('zakat.index', absolute: false), navigate: true);
        $this->dispatch('sweetalert', icon: 'success' , title: 'Data Berhasil disimpan' );
        
    }
}
