<?php

namespace App\Livewire\Posts;

use App\Models\PostKategori;
use Livewire\Component;

class Kategori extends Component
{
    public $search="";
    
    public function render()
    {
        return view('livewire.posts.kategori',[
            'kategori' => PostKategori::where('nama', 'like', '%'.$this->search.'%')->latest()->paginate()
        ]);
    }

        
    public function delete($get_id){

        $zakat = PostKategori::destroy($get_id);

    }
}
