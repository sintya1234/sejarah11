<?php

namespace App\Models;

use Database\Factories\Sej11SoalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sej11_soal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sej11_levels()
    {
        return $this->belongsTo(Sej11_level::class,'sej11__level_id','id');
    }

    public function sej11_waktu()
    {
        return $this->belongsTo(sej11_waktu::class);
    }

    public function sej11_opsi_pilgans()
    {
        return $this->hasMany(sej11_opsi_pilgan::class);
    }

    public function sej11_opsi_isian()
    {
        return $this->belongsTo(sej11_opsi_pilgan::class);
    }

    protected static function newFactory(){
        return Sej11SoalFactory::new();
    }

}
