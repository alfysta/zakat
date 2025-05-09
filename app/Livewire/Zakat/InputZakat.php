<?php

namespace App\Livewire\Zakat;

use App\Models\Zakat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class InputZakat extends Component
{

    #[Validate('required')]
    public $nama = '';
   
    #[Validate('required')]
    public $bayar;
   
    public $beras;
    
    public $uang;

    #[Validate('required|min:1')]
    public $jiwa;

    #[Validate('required')]
    public $infaq;

    #[Validate('required')]
    public $sedekah = 0;

    public function mount(){

        $this->jiwa = $this->jiwa;
        $this->beras = $this->beras;
        $this->uang = $this->uang;
        $this->bayar = $this->bayar;    
        $this->sedekah = $this->sedekah;    
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

        return view('livewire.zakat.input-zakat');
    }

    public function created()
    {
        Zakat::create([
            'user_id' => Auth::user()->id,
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
