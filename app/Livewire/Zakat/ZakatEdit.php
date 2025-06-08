<?php

namespace App\Livewire\Zakat;

use App\Models\Zakat as ModelsZakat;
use Livewire\Attributes\Validate;
use Livewire\Component;
use PDO;

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
        $this->beras = $zakat->beras + $zakat->sedekah;
        $this->uang = $zakat->uang + $zakat->infaq + $zakat->sedekah;
        $this->infaq = $zakat->infaq;
        $this->sedekah = $zakat->sedekah;
    }

    public function render()
    {
        if($this->bayar == 'uang'){
            if($this->uang == 0 ){
                $this->infaq = ($this->jiwa)*2000;
            }else if($this->uang <= (25000* $this->jiwa) ){
                $this->infaq = 0;
            }else if($this->uang <= ((25000* $this->jiwa)+($this->jiwa)*2000)){
                $this->infaq = $this->uang - (25000*$this->jiwa);
            }else if($this->uang > ((25000* $this->jiwa)+($this->jiwa)*2000)){
                $this->infaq = (2000*$this->jiwa);
            } 
        }else if($this->bayar == 'beras'){
            $this->infaq = (2000*$this->jiwa);
        }

        if($this->bayar == 'beras') 
        {
            $this->sedekah = ($this->beras - (2.5 * $this->jiwa) <= 0 ? 0 : $this->beras - (2.5 * $this->jiwa));

        }else if($this->bayar == 'uang')
        {
            $this->sedekah = ($this->uang < ((25000* $this->jiwa) + ($this->jiwa)*2000) ? 0 : $this->uang -($this->infaq) - (25000 * $this->jiwa));
        };

        
        return view('livewire.zakat.input-zakat', [
            'page_meta' => [
                'title' => 'Update Data Zakat Fitrah',
                'description' => 'Silahkan update data Penyetor Zakat Fitrah dengan Teliti',
                'method' => 'updateZakat',
                'submit' => 'Update Data'
            ]
        ]);
    }


    public function updateZakat(){

        $bayar_beras = ($this->bayar == 'beras' ? ($this->beras)-($this->sedekah) : $this->beras);

        $bayar_uang = ($this->bayar == 'uang' ? ($this->uang)-($this->infaq)-($this->sedekah) : $this->uang);
  
        $data = ModelsZakat::find($this->zakatID);

        $data->update([
            'user_id' => auth()->user()->id,
            'nama' => $this->nama,
            'jiwa' => $this->jiwa,
            'bayar' => $this->bayar,

            'beras' => $bayar_beras,
            'uang' => $bayar_uang,

            'infaq' => $this->infaq,
            'sedekah' => $this->sedekah,
        ]);


        
        $this->redirectIntended(route('zakat.index', absolute: false), navigate: true);
        $this->dispatch('sweetalert', icon: 'success' , title: 'Data Berhasil disimpan' );
        
    }
}
