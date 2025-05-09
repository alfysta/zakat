<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Amil extends Model
{
    protected $table ="amil";
    protected $guarded = [];

    public function avatar(): string
    {
        return Str::of($this->nama_amil)
            ->explode(' ')
            ->map(fn (string $nama_amil) => Str::of($nama_amil)->substr(0, 1))
            ->implode('');
    }

}
