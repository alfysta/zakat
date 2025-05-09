<?php

namespace App\Livewire\Posts;

use App\Models\PostKategori;
use Livewire\Component;

class KategoriCreate extends Component
{
    public $nama;
    public $slug;


    public function render()
    {
        return view('livewire.posts.kategori-create',[
            'kategori' => new PostKategori,
            'page_meta' => [
                'title' => 'Input Data Kategori',
                'description' => 'Silahkan Input data Kategori dengan Teliti',
                'method' => 'submit',
                'submit' => 'Input Data',
            ]  
        ]);
    }

    public function submit(){
        PostKategori::create([
            'nama' => $this->nama,
            'slug' => str()->slug($this->nama),
        ]);

        $this->redirectIntended(route('kategori.index', absolute: false), navigate: true);
        $this->dispatch('sweetalert', icon: 'success' , title: 'Data Berhasil disimpan' );
    }
}
