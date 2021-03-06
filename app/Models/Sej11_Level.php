<?php

namespace App\Models;

use Database\Factories\Sej11LevelFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sej11_Level extends Model
{
    use HasFactory;

    protected $table='sej11__levels';
    protected $fillable = [
        'gambar_utuh',
        'judul_sub_bab',
        'materi',
    ];

    public function sej11_user_levels()
    {
        return $this->hasMany(sej11_user_level::class,'sej11__level_id','id');
    }

    public function sej11_link_youtubes()
    {
        return $this->hasMany(sej11_link_youtube::class);
    }
//fokus ini
    public function sej11_soals()
    {
        return $this->hasMany(Sej11_soal::class);
    }

    public function sej11_gambar_materis()
    {
        return $this->hasMany(sej11_gambar_materi::class, 'sej11__level_id','id');
    }

    protected static function newFactory(){
        return Sej11LevelFactory::new();
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'sej11_user_levels','sej11__level_id','user_id');
    }

    //ini leveeellll modeeeeelllll
}
