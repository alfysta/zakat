<?php

namespace App\Livewire\Zakat;

use App\Models\Kategori;
use App\Models\Penerima;
use Livewire\Component;

class PenerimaZakat extends Component
{
    public $nama;
    public $alamat;
    public $kategori_id = "Pilih Kategori";

    public function render()
    {
        
        $kategori = Kategori::get();
        return view('livewire.zakat.penerima-zakat',[
            'kategori' => $kategori,
            'page_meta' => [

                'title' => 'Input Penerima Zakat Fitrah',
                'description' => 'Silahkan Input data Penerima Zakat Fitrah dengan Teliti',
                'method' => 'create',
                'submit' => 'Input Data',
            ],
        ]);
    }
    
    public function create(){

        $validated = $this->validate([
            'nama_penerima' => ['required'],
            'alamat' => ['required'],
            'kategori_id' => ['required'],
        ]);
    

        Penerima::create($validated);

        $this->redirectIntended(route('penerima.list', absolute: false), navigate: true);
        $this->dispatch('sweetalert', icon: 'success' , title: 'Data Berhasil disimpan' );



    }

}
