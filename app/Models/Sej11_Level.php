<?php

namespace App\Models;

use Database\Factories\Sej11LevelFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sej11_Level extends Model
{
    use HasFactory;

    protected $fillable = [
       'sej11_link_youtube_id',
        'gambar_utuh',
        'judul_sub_bab',
        'materi',
    ];

    public function sej11_user_levels()
    {
        return $this->hasMany(sej11_user_level::class);
    }

    public function sej11_link_youtubes()
    {
        return $this->hasMany(sej11_link_youtube::class);
    }
//fokus ini
    public function sej11_soals()
    {
        return $this->hasMany(Sej11_soal::class,'sej11__level_id','id');
    }

    public function sej11_gambar_materis()
    {
        return $this->belongsToMany(sej11_gambar_materi::class);
    }

    protected static function newFactory(){
        return Sej11LevelFactory::new();
    }

    //ini leveeellll modeeeeelllll
}
