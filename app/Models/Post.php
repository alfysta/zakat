<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function images(){
        
        return "/storage/". $this->thumbnails;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategori()
    {
        return $this->belongsTo(PostKategori::class);
    }

    public function avatar(): string
    {
        return 'https://gravatar.com/avatar/' . hash( 'sha256', strtolower( trim( $this->email ) ) );

    }
}
