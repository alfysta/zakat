<?php

namespace App\Livewire\Posts;

use App\Models\PostKategori;
use Livewire\Component;

class KategoriUpdate extends Component
{
    public $nama;
    public $slug;

    public $kategoriID;

    public function mount(PostKategori $kategori){
        $this->kategoriID = $kategori->id;
        $this->nama = $kategori->nama;
        $this->slug = $kategori->slug;
    }

    public function render()
    {
        return view('livewire.posts.kategori-create',[
            'page_meta' => [
                'title' => 'Update Data Kategori',
                'description' => 'Silahkan Update data Kategori dengan Teliti',
                'method' => 'update',
                'submit' => 'Update Data',
            ]  
        ]);
    }

    public function update(){
        $kategori = PostKategori::findOrFail($this->kategoriID);
        $kategori->update([
            'nama' => $this->nama
        ]);

        $this->redirectIntended(route('kategori.index', absolute: false), navigate: true);
        $this->dispatch('sweetalert', icon: 'success' , title: 'Data Berhasil diupdate' );
    }
}
