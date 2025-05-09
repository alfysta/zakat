<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zakat extends Model

{
    use HasFactory ;
    protected $table ="zakat";
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
