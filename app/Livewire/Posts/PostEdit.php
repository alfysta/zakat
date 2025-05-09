<?php

namespace App\Livewire\Posts;
use App\Models\Post;
use App\Models\PostKategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

use Livewire\Component;

class PostEdit extends Component
{

    use WithFileUploads;

    public $postId;
    public $judul;
    public $body;
    public $kategori_id;

    #[Validate('image|max:2048')]
    public $thumbnails;

    public function mount(Post $post){
        $this->postId = $post->id;
        $this->judul = $post->judul;
        $this->body = $post->body;
        $this->kategori_id = $post->kategori_id;
        $this->thumbnails = $post->thumbnails;
    }

    public function render()
    {
        $post = Post::find($this->postId);
        return view('livewire.posts.post-create',[
            'kategori' => PostKategori::get(),
            'post' => $post,
            'page_meta' => [
                'title' => 'Update Artikel',
                'description' => 'Silahkan Update Artikel Anda',
                'method' => 'update',
                'submit' => 'Update Data'

            ],
        ]);
    }

    public function update(){

    $post = Post::find($this->postId);

       $post->update([
            'user_id' => Auth::user()->id,
            'judul' => $this->judul,
            'body' => $this->body,
            'kategori_id' => $this->kategori_id,
            'thumbnails' => $this->thumbnails->store('/images/posts')
        ]);

        $this->redirectIntended(route('article.index', absolute: false), navigate: true);
        $this->dispatch('sweetalert', icon: 'success' , title: 'Data Berhasil diupdate' );
    }
}
