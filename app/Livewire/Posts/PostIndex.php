<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{

    use WithPagination;
    public $search ="";
    public $paginate =10;

    public $date = '';

    public function render()
    {

        if($this->search){

            $posts = Post::with('user')->where('judul', 'like', '%'.$this->search.'%')
                    ->latest()->paginate($this->paginate);
        
        }elseif($this->date){

            $posts = Post::whereDate('created_at',$this->date)
                        ->latest()->paginate($this->paginate);
           
        }else{
            $posts = Post::with('user')->latest()->paginate($this->paginate);
        }
        return view('livewire.posts.post-index',[
            'posts' => $posts
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function postDelete($get_id){

        $post = Post::find($get_id);

        Storage::delete($post->thumbnails);

        $post->delete();

    }
}

