<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sej11_Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_link_youtube',
        'gambar utuh',
        'judul_sub_bab',
        'Materi',
    ];

    public function sej11_user_levels()
    {
        return $this->hasMany(sej11_user_level::class);
    }

    public function sej11_link_youtubes()
    {
        return $this->hasMany(sej11_link_youtube::class);
    }

    public function sej11_soals()
    {
        return $this->hasMany(sej11_soal::class);
    }

    public function sej11_gambar_materis()
    {
        return $this->belongsToMany(sej11_gambar_materi::class);
    }

    //ini leveeellll modeeeeelllll
}
