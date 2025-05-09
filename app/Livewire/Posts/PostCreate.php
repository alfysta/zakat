<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use App\Models\PostKategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostCreate extends Component
{
    use WithFileUploads;

    public $judul;
    public $body;
    public $kategori_id;

    #[Validate('image|max:2048')]
    public $thumbnails;


    public function render()
    {
        return view('livewire.posts.post-create', [
            'kategori' => PostKategori::get(),
            'post' => new Post,
            'page_meta' => [
                'title' => 'Input Artikel',
                'description' => 'Silahkan Input Artikel Anda',
                'method' => 'created',
                'submit' => 'Create Data'

            ],
        ]);
    }

    public function created(){


       Post::create([
            'user_id' => Auth::user()->id,
            'judul' => $this->judul,
            'slug' => str()->slug($this->judul),
            'body' => $this->body,
            'kategori_id' => $this->kategori_id,
            'thumbnails' => $this->thumbnails->store('images/posts')
        ]);

        $this->redirectIntended(route('article.index', absolute: false), navigate: true);
        $this->dispatch('sweetalert', icon: 'success' , title: 'Data Berhasil disimpan' );
    }
}
