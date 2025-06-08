<?php

namespace App\Livewire\Zakat;

use App\Models\Zakat;
use Illuminate\Support\Facades\Auth;
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

    #[Validate('required')]
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
        if($this->uang == 0 ){
            $this->infaq = ($this->jiwa)*2000;
        }else if($this->uang <= (25000* $this->jiwa) ){
            $this->infaq = 0;
        }else if($this->uang <= ((25000* $this->jiwa)+($this->jiwa)*2000)){
            $this->infaq = $this->uang - (25000*$this->jiwa);
        }else if($this->uang > ((25000* $this->jiwa)+($this->jiwa)*2000)){
            $this->infaq = (2000*$this->jiwa);
        }

        if($this->bayar == 'beras') 
        {
            $this->sedekah = ($this->beras - (2.5 * $this->jiwa) <= 0 ? 0 : $this->beras - (2.5 * $this->jiwa));

        }else if($this->bayar == 'uang')
        {
            $this->sedekah = ($this->uang < ((25000* $this->jiwa) + ($this->jiwa)*2000) ? 0 : $this->uang -($this->infaq) - (25000 * $this->jiwa));
        };


        return view('livewire.zakat.input-zakat',[
            'page_meta' => [
                'title' => 'Input Data Zakat Fitrah',
                'description' => 'Silahkan Input data Penyetor Zakat Fitrah dengan Teliti',
                'method' => 'created',
                'submit' => 'Input Data'
            ]
        ]);
    }

    public function created()
    {
        $bayar_beras = ($this->bayar == 'beras' ? ($this->beras)-($this->sedekah) : $this->beras);

        $bayar_uang = ($this->bayar == 'uang' ? ($this->uang)-($this->infaq)-($this->sedekah) : $this->uang);

       $data =  [
            'user_id' => Auth::user()->id,
            'nama' => $this->nama,
            'jiwa' => $this->jiwa,
            'bayar' => $this->bayar,

            'beras' => $bayar_beras,
            'uang' => $bayar_uang,

            'infaq' => $this->infaq,
            'sedekah' => $this->sedekah,
        ];

        Zakat::create($data);

        $this->redirectIntended(route('zakat.index', absolute: false), navigate: true);

        $this->dispatch('sweetalert', icon: 'success' , title: 'Data Berhasil disimpan' );
    }



}
