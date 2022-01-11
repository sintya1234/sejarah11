<?php

namespace App\Models;

use App\Http\Resources\sej11_pengerjaanResources;
use Database\Factories\Sej11SoalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sej11_soal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sej11_level()
    {
        return $this->belongsTo(Sej11_level::class,'sej11__level_id','id');
    }

    public function sej11_pengerjaans()
    {
        return $this->belongsTo(sej11_pengerjaan::class,'sej11_soal_id','id');
    }


    public function sej11_waktu()
    {
        return $this->belongsTo(sej11_waktu::class,'sej11_waktu_id','id');
    }

    public function sej11_opsi_pilgans()
    {
        return $this->hasMany(sej11_opsi_pilgan::class,'sej11_soal_id','id');
    }

   

    public function sej11_user_levels()
    {
        return $this->belongsToMany(sej11_user_level::class,'sej11_pengerjaans','sej11_soal_id','sej11_user_level_id');
    }

    protected static function newFactory(){
        return Sej11SoalFactory::new();
    }

}
