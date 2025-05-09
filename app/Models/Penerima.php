<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Penerima extends Model
{
    protected $table = "penerima";
    protected $fillable = ['nama_penerima', 'alamat', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);

    }

    public function avatar(): string
    {
        return Str::of($this->nama_penerima)
            ->explode(' ')
            ->map(fn (string $nama_penerima) => Str::of($nama_penerima)->substr(0, 1))
            ->implode('');
    }
}
