<?php

namespace App\Livewire\Zakat;

use App\Models\Amil;
use Livewire\Component;

class EditAmilZakat extends Component
{

    public $nama_amil ="";
    public $jabatan ="";
    public $alamat ="";
    public $amilId;

    public function mount(Amil $amil){
        $this->amilId = $amil->id;
        $this->nama_amil = $amil->nama_amil;
        $this->jabatan = $amil->jabatan;
        $this->alamat = $amil->alamat;
    }

    public function render()
    {
        return view('livewire.zakat.input-amil-zakat',[
            'page_meta' => [
                'title' => 'Update Data Amil Zakat Fitrah',
                'description' => 'Silahkan Update data Amil Zakat Fitrah dengan Teliti',
                'method' => 'update',
                'submit' => 'Update Data'

            ],
        ]);
    }

    public function update() {
        $amil = Amil::find($this->amilId);
        $amil->update([
                'nama_amil' => $this->nama_amil,
                'jabatan' => $this->jabatan,
                'alamat' => $this->alamat,

        ]);

        $this->redirectIntended(route('amil.list', absolute: false), navigate: true);

        $this->dispatch('sweetalert', icon: 'success' , title: 'Data Berhasil diupdate' );
    }
}
