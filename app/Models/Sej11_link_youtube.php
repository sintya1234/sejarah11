<?php

namespace App\Models;

use Database\Factories\Sej11LinkYoutubeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sej11_link_youtube extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sej11_level()
    {
        return $this->belongsTo(sej11_level::class);
    } 

    protected static function newFactory(){
        return Sej11LinkYoutubeFactory::new();
    }
}
