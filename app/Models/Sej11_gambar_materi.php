<?php

namespace App\Models;

use Database\Factories\Sej11GambarMateriFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sej11_gambar_materi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //bissaaa plisss

    public function sej11_levels()
    {
        return $this->belongsTo(sej11_level::class,'sej11__level_id','id');
    }

    protected static function newFactory(){
        return Sej11GambarMateriFactory::new();
    }
}
