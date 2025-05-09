<?php

namespace App\Livewire\Zakat;

use App\Models\Amil;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class InputAmilZakat extends Component
{
    public $nama_amil ="";
    public $jabatan ="";
    public $alamat ="";


    public function render()
    {
        return view('livewire.zakat.input-amil-zakat',[
            'page_meta' => [
                'title' => 'Input Data Amil Zakat Fitrah',
                'description' => 'Silahkan Input data Amil Zakat Fitrah dengan Teliti',
                'method' => 'submit',
                'submit' => 'Input Data',
            ]
        ]);
    }

    public function submit(){

        $validated = $this->validate([
            'nama_amil' => ['required'],
            'jabatan' => ['required'],
            'alamat' => ['required'],
        ]);

        Amil::create($validated);

        $this->redirectIntended(route('amil.list', absolute: false), navigate: true);

        $this->dispatch('sweetalert', icon: 'success' , title: 'Data Berhasil disimpan' );

    }


}
