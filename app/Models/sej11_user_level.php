<?php

namespace App\Models;

use Database\Factories\Sej11UserLevelFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sej11_user_level extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sej11__level_id',
        'score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','user');
    }

    public function sej11_level()
    {
        return $this->belongsTo(sej11_level::class,'sej11__level_id','id');
    }

    public function sej11_pengerjaans()
    {
        return $this->hasMany(sej11_level::class,'sej11_pengerjaan_id','id');
    }

    public function sej11_soals()
    {
        return $this->belongsToMany(Sej11_soal::class,'sej11_pengerjaans','sej11_user_level_id','sej11_soal_id');
    }

    protected static function newFactory(){
        return Sej11UserLevelFactory::new();
    }

    
}
