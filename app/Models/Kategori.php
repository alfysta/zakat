<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $fillable = ['kategori'];

    public function penerima()
    {
        return $this->hasMany(Penerima::class);

    }
}
