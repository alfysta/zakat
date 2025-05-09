<?php

namespace App\Livewire\Zakat;

use App\Models\Kategori;
use App\Models\Penerima;
use Livewire\Component;

class EditPenerimaZakat extends Component
{
    public $nama_penerima;
    public $alamat;
    public $kategori_id;

    public $penerimaId;

    public function mount(Penerima $penerima)
    {
        $this->nama_penerima = $penerima->nama_penerima;
        $this->alamat = $penerima->alamat;
        $this->kategori_id = $penerima->kategori_id;
        $this->penerimaId = $penerima->id;

    }

    public function render()
    {
        $kategori = Kategori::get();
        
        return view('livewire.zakat.penerima-zakat', [
            'kategori' => $kategori,
            'page_meta' => [
                'title' => 'Update Data Penerima Zakat Fitrah',
                'description' => 'Silahkan Update data Penerima Zakat Fitrah dengan Teliti',
                'method' => 'update',
                'submit' => 'Update Data',
            ],
        ]);
    }

    public function update(){
        
        $penerima = Penerima::find($this->penerimaId);
        $penerima->update([
            'nama_penerima' => $this->nama_penerima,
            'alamat' => $this->alamat,
            'kategori_id' => $this->kategori_id,
        ]);

        $this->redirectIntended(route('penerima.list', absolute: false), navigate: true);
        $this->dispatch('sweetalert', icon: 'success' , title: 'Data Berhasil diupdate' );

    }
}
